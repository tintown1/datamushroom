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
</head>

<body background="#81FF9B">
  <?php include('headadmin.php');   ?>
  <div class="container fonts" style="margin-top:10px;">

    <div class="content_right" style="background-color:#fffff8; height:200px;">
      <div class="text-center" style="padding-left:10px; margin-top:20px;">
        <center><br /><br /><br />
          <p>เพิ่มข้อมูลเห็ด</p>
          <form id="form1" name="form1" action="save_insert.php" method="post" enctype="multipart/form-data" >
            <table width="60%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อท้องถิ่น :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_cname" name="m_cname" class="form-control" required > 
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อท้องถิ่น
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อสามัญ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_name" name="m_name" class="form-control" required>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อวิทยาศาสตร์ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_sname" name="m_sname" class="form-control" required>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ชื่อกลุ่ม :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <input type="text" id="m_family" name="m_family" class="form-control" required>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">ดอกเห็ด :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <textarea rows="4" cols="40" type="text" id="m_mush" name="m_mush" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
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
                    <textarea rows="4" cols="40" type="text" id="m_stalk" name="m_stalk" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">สปอร์ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <textarea rows="4" cols="40" type="text" id="m_spore" name="m_spore" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">การใช้ประโยชน์ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <textarea rows="4" cols="40" type="text" id="m_benefit" name="m_benefit" class="form-control" required=></textarea>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label class="form-label" for="form7Example1">นิเวศ :</label>
                </td>
                <td>
                  <div class="form-outline mb-4">
                    <textarea rows="4" cols="40" type="text" id="m_env" name="m_env" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                      กรุณากรอกชื่อสามัญ
                    </div>
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
  <script language="JavaScript">

        document.getElementById('m_cname').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_cname').value = "";
              return false;
          }
        }
        document.getElementById('m_name').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_name').value = "";
              return false;
          }
        }
        document.getElementById('m_sname').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_sname').value = "";
              return false;
          }
        }
        document.getElementById('m_family').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_family').value = "";
              return false;
          }
        }
        document.getElementById('m_mush').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_mush').value = "";
              return false;
          }
        }
        document.getElementById('m_stalk').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_stalk').value = "";
              return false;
          }
        }
        document.getElementById('m_spore').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_spore').value = "";
              return false;
          }
        }
        document.getElementById('m_benefit').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_benefit').value = "";
              return false;
          }
        }
        document.getElementById('m_env').onkeyup = function(e) {
          if(e.keyCode == 32 && this.value.indexOf(' ') == 0) 
          
          {
            
              document.getElementById('m_env').value = "";
              return false;
          }
        }


</script>
</body>

</html>