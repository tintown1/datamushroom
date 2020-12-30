<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<?php include ('connect.php'); 
//ส่วนของการเพิ่มข้อมูลรูปภาพ
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    //date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	//$date1 = date("Ymd_his");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	//$numrand = (mt_rand());

	//รับชื่อไฟล์จากฟอร์ม 
	//$file1 = $_POST['file1'];//รับชื่อไฟล์เดิม
	
	//$img = (isset($_REQUEST['img']) ? $_REQUEST['img'] : '');
	
	//$upload=$_FILES['img']['name'];
	//if($upload <> '') { 
 
	//โฟลเดอร์ที่เก็บไฟล์
	//$path="img/";
	//ตัวขื่อกับนามสกุลภาพออกจากกัน
	//$type = strrchr($_FILES['img']['name'],".");
	//ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
	//$newname =$numrand.$date1.$type;
 
	//$path_copy=$path.$newname;
	//$path_file_img="img/".$newname;
	//คัดลอกไฟล์ไปยังโฟลเดอร์
	//move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
	//}else{
	//	$newname = $file1;//ถ้าไม่เลือกรูปให้กลับเป็นรูปเดิม
	//	}

 
//สร้างตัวแปร
	$mID = $_POST["m_id"];
    $hedcname = $_POST["m_cname"];
    $hedname = $conn-> real_escape_string ($_POST["m_name"]);
	$hedsci = $_POST["m_sname"];
	$hedfam = $_POST["m_family"];
	$hedmus = $_POST["m_mush"];
	$hedsta = $_POST["m_stalk"];
	$hedspo = $_POST["m_spore"];
	$hedben = $_POST["m_benefit"];
    $hedenv = $_POST["m_env"];
	

$ext = pathinfo(basename($_FILES['m_pic']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "uploadshed/".$ext;
$upload_path = $image_path.$new_image_name;
//uploading
$success = move_uploaded_file($_FILES['m_pic']['tmp_name'], $upload_path);
if ($success=FALSE) {
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
}
	$hed_img = $new_image_name;

//แก้ไขข้อมูล
$sql = "UPDATE mushroom SET
	m_cname='$hedcname' ,
	m_name='$hedname' , 
	m_sname='$hedsci' ,
	m_family='$hedfam' ,
	m_mush='$hedmus' ,
	m_stalk='$hedsta' ,
	m_spore='$hedspo' ,
	m_benefit='$hedben'  ,
	m_env='$hedenv',
	m_pic='$hed_img'
	
	
	WHERE m_id = '$mID' ";
	
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

//ปิดการเชื่อมต่อ database
mysqli_close($conn);
//ถ้าสำเร็จให้ขึ้นอะไร
if ($result){
echo "<script type='text/javascript'>";
  echo"alert('Edit Success');";
echo"window.location = 'admin.php';";
echo "</script>";
}
else {
//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
echo "<script type='text/javascript'>";
echo "alert('error!');";
echo"window.location = 'updatehedform.php'; ";
echo"</script>";
}
?>