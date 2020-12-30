<meta charset="UTF-8">
<!DOCTYPE html >
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Show head</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  </head>
    <body>
<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$query = "SELECT * FROM hed " ; 
//3. execute the query. 
$result = mysqli_query($conn, $query); 
//4 . แสดงข้อมูลที่ query ออกมา: 

//ใช้ตารางในการจัดข้อมูล
echo "<table border='1' align='center' width='1280'>";

  echo "<tr align='center' bgcolor='#CCCCCC'><td>ชื่อท้องถิ่น</td><td>ชื่อสามัญ</td><td>ชื่อวิทยาศาสตร์</td><td>ลักษณะจำแนก</td><td>การใช้ประโยชน์</td><td>นิเวศ</td></tr>";
    while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo "<td>" .$row["H_cname"] .  "</td> "; 
    echo "<td>" .$row["H_name"] .  "</td> ";  
    echo "<td>" .$row["H_sciname"] .  "</td> ";
    echo "<td>" .$row["H_description"] .  "</td> ";
    echo "<td>" .$row["H_benefit"] .  "</td> ";
    echo "<td>" .$row["H_env"] .  "</td> ";
    
    
  //แก้ไขข้อมูลส่่ง member_id ที่จะแก้ไขไปที่ฟอร์ม
  echo "<td><a href='updatehedform.php?H_ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='deletehed.php?H_ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($conn);
?>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>
