<?php include('connect.php');?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Untitled Document</title>
  </head>
  
  <body>
  <?php 
  echo "<pre>";
  print_r($_GET);
  echo "</pre>";
  ?>
  
  
  
  
  <center>
  <?php
  $HID = mysqli_real_escape_string($conn,$_GET['H_ID']);
  
  
  
  $query = "SELECT * FROM hed where H_ID = '$HID' " or die("Error:" . mysqli_error());  //คำสั่งให้เลือกข้อมูลจาก TABLE ชื่อ tbl_member โดยเรียงจาก member_id และให้เรียงลำดับจากมากไปน้อยคือ DESC
  //ประกาศตัวแปร sqli
  $result = mysqli_query($conn, $query);
  $row1 = mysqli_free_result($result);
  mysqli_close($conn);
  
  ?>
  
  
  
  <form action="hedupdate_db.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><table width="20%" border="1" cellpadding="1" cellspacing="1">
  <tr>
  <td colspan="2" align="center">edit</td>
  </tr>
  <!---<tr>
  <td>ID</td>
  <input name="H_ID" type="hide" id="H_ID" value="<?php echo $row1['H_ID'];?>"  /></td>
  </tr>--->
  <tr>
  <td>ชื่อท้องถิ่น</td>
  <td><input name="H_cname" type="text" id="H_cname" value="<?php echo $row1['H_cname'];?>" /></td>
  </tr>
  <tr>
  <td>ชื่อสามัญ</td>
  <td><input name="H_name" type="text" id="H_name" value="<?php echo $row1['H_name'];?>" /></td>
  </tr>
  <tr>
  <td>ชื่อวิทยาศาสตร์</td>
  <td><input name="H_sciname" type="text" id="H_sciname" value="<?php echo $row1['H_sciname'];?>" /></td>
  </tr>
  <tr>
  <td>ลักษณะจำแนก</td>
  <td><input name="H_description" type="text" id="H_description" value="<?php echo $row1['H_description'];?>" /></td>
  </tr>
  <tr>
  <td>การใช้ประโยชน์</td>
  <td><input name="H_benefit" type="text" id="H_benefit" value="<?php echo $row1['H_benefit'];?>" /></td>
  </tr>
  <tr>
  <td>นิเวศ</td>
  <td><input name="H_env" type="text" id="H_env" value="<?php echo $row1['H_env'];?>" /></td>
  </tr>
  
  <tr>
  <td>&nbsp;</td>
  <td><input type="submit" name="button" id="button" value="Edit" /></td>
  </tr>
  </table>
    <br />
    <a href="insert.php">insert</a>
  </form>
  <p>&nbsp;</p>
  </center>
  </body>
  </html>