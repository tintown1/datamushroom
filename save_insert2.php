<mate charset ="utf-8" />
<?php include ('connect.php'); 
//ส่วนของการเพิ่มข้อมูลรูปภาพ
//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    //date_default_timezone_set('Asia/Bangkok');
	//สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลด
	//$date1 = date("Ymd_his");
	//สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
	//$numrand = (mt_rand());

	//รับชื่อไฟล์จากฟอร์ม 
	//$img = (isset($_REQUEST['img']) ? $_REQUEST['img'] : '');
	
	//$upload=$_FILES['img'];
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
	//}

	




//$q = "INSERT INTO hed (H_pic) VALUES ('$hed_img')";
//$result = mysqli_query($conn,$q);
	
//สร้างตัวแปร

$hedcname = $_POST["m_cname"];
$hedname = $_POST["m_name"];
$hedsci = $_POST["m_sname"];
$hedfam = $_POST["m_family"];
$hedmus = $_POST["m_mush"];
$hedsta = $_POST["m_stalk"];
$hedspo = $_POST["m_spore"];
$hedben = $_POST["m_benefit"];
$hedenv = $_POST["m_env"];
$hedpic = $_POST["m_pic"];


$ext = pathinfo(basename($_FILES['m_pic']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "uploads/".$ext;
$upload_path = $image_path.$new_image_name;
//uploading
$success = move_uploaded_file($_FILES['m_pic']['tmp_name'], $upload_path);
if ($success=FALSE) {
    echo "ไม่สามารถ upload รูปภาพได้";
    exit();
}
	$hed_img = $new_image_name;

	//เพิ่มข้อมูล
	$sql = " INSERT INTO mushroom
	(m_cname,m_name,m_sname,m_family,m_mush,m_stalk,m_spore,m_benefit,m_env,m_pic)
	VALUES
	('$hedcname', '$hedname', '$hedsci','$hedfam','$hedmus','$hedsta','$hedspo','$hedben','$hedenv','$hed_img')";
	
	

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
			
			
				
				
				//ถ้าสำเร็จให้ขึ้นอะไร
	if ($result){
		echo "<script type='text/javascript'>";
		echo"alert('บันทึกข้อมูลสำเร็จ');";
	    echo"window.location = 'admin.php';";
		echo "</script>";
		}
		else {
			//กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม		
				echo "<script type='text/javascript'>";
				echo "alert('error!');";
				echo"window.location = 'admin.php'; ";
				echo"</script>";
	}


?>