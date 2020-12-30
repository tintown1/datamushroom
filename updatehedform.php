<meta charset="UTF-8">
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show head</title>

  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  <?php
  //1. เชื่อมต่อ database: 
  include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  include('headadmin.php');
  //ตรวจสอบถ้าว่างให้เด้งไปหน้าหลัก
  if ($_GET["m_id"] == '') {
    echo "<script type='text/javascript'>";
    echo "alert('Error Contact Admin !!');";
    echo "window.location = 'admin.php'; ";
    echo "</script>";
  }


  //รับค่าไอดีที่จะแก้ไข
  $mID = mysqli_real_escape_string($conn, $_GET['m_id']);


  //2. query ข้อมูลจากตาราง: 
  $sql = "SELECT * FROM mushroom WHERE m_id='$mID' ";


  $result = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);
  extract($row);

  ?>
  <div class="container fonts" style="margin-top:10px;">
    <div class="content_right" style="background-color:#fffff8; height:200px;">
      <div class="text-center" style="padding-left:10px; margin-top:20px;">
        <form action="hedupdate_db.php" method="post" enctype="multipart/form-data" name="updatehed" id="updatehed">
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="40" colspan="2" align="center" bgcolor="#8AFE42"><b>แก้ไขข้อมูลเห็ด</b></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">ID : </td>
              <td bgcolor="#EBEBEB">

                <p><input type="text" name="m_id" value="<?php echo $mID; ?>" disabled='disabled' />
                  <input type="hidden" name="m_id" value="<?php echo $mID; ?>" />


              </td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td width="117" align="right" bgcolor="#EBEBEB">ชื่อท้องถิ่น
                :</td>
              <td width="583" bgcolor="#EBEBEB"><input name="m_cname" type="text" id="m_cname" value="<?php echo $row['m_cname']; ?>" size="30" placeholder="" required="required" /></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">ชื่อสามัญ
                <label> :</label></td>
              <td bgcolor="#EBEBEB"><input name="m_name" type="text" id="m_name" value="<?php echo $row['m_name']; ?>" size="30" required="required" /></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">ชื่อวิทยาศาสตร์ :</td>
              <td bgcolor="#EBEBEB"><input type="text" name="m_sname" id="m_sname" value="<?php echo $row['m_sname']; ?>" size="50" required="required" /></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">กลุ่ม :</td>
              <td bgcolor="#EBEBEB"><input type="text" name="m_family" id="m_family" value="<?php echo $row['m_family']; ?>" size="50" required="required" /></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">ดอกเห็ด : </td>
              <label> </label></td>
              <td bgcolor="#EBEBEB"><textarea type="text" id="m_mush" name="m_mush" cols="50" rows="8"><?php echo $row['m_mush']; ?></textarea></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">ก้าน :
                <label> </label></td>
              <td bgcolor="#EBEBEB"><textarea type="text" id="m_stalk" name="m_stalk" cols="50" rows="8"><?php echo $row['m_stalk']; ?></textarea></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">สปอร์ :
                <label> </label></td>
              <td bgcolor="#EBEBEB"><textarea type="text" id="m_spore" name="m_spore" cols="50" rows="8"><?php echo $row['m_spore']; ?></textarea></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">การใช้ประโยชน์ : </td>
              <td bgcolor="#EBEBEB"><textarea type="text" id="m_benefit" name="m_benefit" cols="50" rows="8"><?php echo $row['m_benefit']; ?></textarea></td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">นิเวศ : </td>
              <td bgcolor="#EBEBEB"><textarea type="text" id="m_env" name="m_env" cols="50" rows="4"><?php echo $row['m_env']; ?></textarea></td>
            </tr>
            <tr>
              <td bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" bgcolor="#EBEBEB">รูปภาพ :</td></br>
              <td bgcolor="#EBEBEB"><input type="file" id="m_pic" name="m_pic"></td>
            </tr>
            <tr>
              <td bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;
                <input type="button" class="btn-danger" value=" ยกเลิก " onclick="window.location='admin.php' " /> <!-- ถ้าไม่แก้ไขให้กลับไปหน้าแสดงรายการ -->
                &nbsp;
                <input type="submit" class="btn-success" name="Update" id="Update" value="Update" /></td>
            </tr>
            <tr>
              <td bgcolor="#EBEBEB">&nbsp;</td>
              <td bgcolor="#EBEBEB">&nbsp;</td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>