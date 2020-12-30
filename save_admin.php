<mate charset ="utf-8" />
<?php include ('connect.php'); 

//กำหนดตัวแปร


$user = $_POST["username"];
$pass = $_POST["password"];
$lev = $_POST["level"];

//เพิ่มข้อมูล

$sql = " INSERT INTO login (username,password,level) VALUES ('$user','$pass','$lev')";

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
				echo"window.location = 'admininsert.php'; ";
				echo"</script>";
	}


?>