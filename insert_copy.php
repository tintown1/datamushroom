<?php
include('connect.php');

$ID = $_SESSION['ID'];

$level = $_SESSION['level'];
if ($level != 'admin') {
  Header("Location: ../logout.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>เพิ่มข้อมูลเห็ด</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>

<body background="#81FF9B">
  <?php include('headadmin.php');   ?>
  <div class="container fonts" style="margin-top:10px;">

    <div class="content_right" style="background-color:#fffff8; height:200px;">
      <div class="text-center" style="padding-left:10px; margin-top:20px;">
        <center><br /><br /><br />
          <p>เพิ่มข้อมูลเห็ด</p>
          <form id="form1" name="form1" action="save_insert.php" method="post" enctype="multipart/form-data" novalidate>
            <table width="60%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อท้องถิ่น :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_cname" name="m_cname" class="form-control" data-validation="required">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อสามัญ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_name" name="m_name" class="form-control" data-validation="required">
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อวิทยาศาสตร์ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_sname" name="m_sname" class="form-control" data-validation="required">

                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อกลุ่ม :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_family" name="m_family" class="form-control" data-validation="required">

                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ดอกเห็ด :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <textarea rows="4" cols="40" type="text" id="m_mush" name="m_mush" class="form-control" data-validation="required"></textarea>

                  </div>
      </div>
      </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="form7Example1">ก้าน :</label>
        </td>
        <td>
          <div class="form-outline mb-4">
            <textarea rows="4" cols="40" type="text" id="m_stalk" name="m_stalk" class="form-control" data-validation="required"></textarea>

          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="form7Example1">สปอร์ :</label>
        </td>
        <td>
          <div class="form-outline mb-4">
            <textarea rows="4" cols="40" type="text" id="m_spore" name="m_spore" class="form-control" data-validation="required"></textarea>

          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="form7Example1">การใช้ประโยชน์ :</label>
        </td>
        <td>
          <div class="form-outline mb-4">
            <textarea rows="4" cols="40" type="text" id="m_benefit" name="m_benefit" class="form-control" data-validation="required"></textarea>

          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label class="form-label" for="form7Example1">นิเวศ :</label>
        </td>
        <td>
          <div class="form-outline mb-4">
            <textarea rows="4" cols="40" type="text" id="m_env" name="m_env" class="form-control" data-validation="required"></textarea>

          </div>
        </td>
      </tr>
      <tr>
        <td><label>รูปภาพ :</label></td></br>
        <td><input type="file" name="m_pic"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" class="btn-success" name="button" id="button" value="Save" /></td>

      </tr>
      </table>
      </form>
      <br />
    </div>
  </div>
  </div>


  </center>


  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#form1").validate();
    });
  </script>
</body>

</html>