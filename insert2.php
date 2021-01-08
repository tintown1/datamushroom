<?php
include('connect.php');

$ID = $_SESSION['ID'];

$level = $_SESSION['level'];
if ($level != 'admin') {
  Header("Location: ../logout.php");
}
?>
<!DOCTYPE html PUBLIC >
<html lang="en">

<head>
<meta charset="utf-8">
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>เพิ่มข้อมูลเห็ด</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <link href="validator.css" rel="stylesheet">
 <script src="jquery.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="jquery.form.validator.min.js"></script>
 <script src="security.js"></script>
 <script src="file.js"></script>
</head>

<body background="#81FF9B">
<center><h3 class="text-muted">เพิ่มข้อมูลเห็ด</h3></center><br>
        <div class="row marketing">
        
       
 <div class="col-lg-12">
 <form class="form-horizontal" role="form" action="save_insert.php" method="post" id="form" enctype="multipart/form-data">
 <div class="form-group">
 <label class="col-sm-3 control-label">ชื่อท้องถิ่น</label>
 <div class="col-sm-9">
 <input type="text" class="form-control" data-validation="required" id="m_cname" name="m_cname">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ชื่อสามัญ</label>
 <div class="col-sm-9">
 <input type="text" class="form-control" id="m_name" name="m_name" data-validation="required">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ชื่อวิทยาศาสตร์</label>
 <div class="col-sm-9">
 <input type="text" class="form-control" data-validation="required" name="m_sname" id="m_sname">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ชื่อกลุ่ม</label>
 <div class="col-sm-9">
 <input type="text" class="form-control" id="m_family" name="m_family" data-validation="required">
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ดอกเห็ด</label>
 <div class="col-sm-9">
 <textarea type="text" class="form-control" data-validation="required" id="m_mush" name="m_mush" rows="4" cols="40"></textarea>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ก้าน</label>
 <div class="col-sm-9">
 <textarea  type="text" class="form-control" data-validation="required" id="m_stalk" name="m_stalk"rows="4" cols="40"></textarea>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">สปอร์</label>
 <div class="col-sm-9">
 <textarea type="text" class="form-control" data-validation="required" id="m_spore" name="m_spore"rows="4" cols="40"></textarea>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">การใช้ประโยชน์</label>
 <div class="col-sm-9">
 <textarea type="text" class="form-control" data-validation="required" id="m_benefit" name="m_benefit"rows="4" cols="40"></textarea>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">ระบบนิเวศ</label>
 <div class="col-sm-9">
 <textarea type="text" class="form-control" data-validation="required" id="m_env" name="m_env"rows="4" cols="40"></textarea>
 </div>
 </div>
 <div class="form-group">
 <label class="col-sm-3 control-label">รูปภาพเห็ด</label>
 <div class="col-sm-9">
 <input  data-validation="mime size"  data-validation-max-size="512kb" data-validation-allowing="jpg, png" data-validation="required" id="m_pic" name="m_pic" type="file">
 </div>
 </div>
 
 </div>
 </div>
 </div>
 <div class="form-group">
 <center>
 <div class="col-sm-offset-2 col-sm-10">
 <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
 </div>
 </div>
 </form>
 </div>
 


  </center>


  <script>
 $.validate({
 modules: 'security, file',
 onModulesLoaded: function () {
 $('input[name="pass_confirmation"]').displayPasswordStrength();
 }
 });
 </script>
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
// สเปคบาข้างหน้าไม่ได้
</script>
<script language="JavaScript">
function validateForm() {
  var x = document.forms["form1"]["m_cname"].value;
  if (x == "") {
    alert("โปรดกรอกชื่อท้องถิ่น");
    return false;
  }
}

</script>
<?php include('headadmin.php');   ?>
<div class="container fonts" style="margin-top:10px;">

    <div class="content_right" style="background-color:#fffff8; height:200px;">
      <div class="text-center" style="padding-left:10px; margin-top:20px;">
        
</body>

</html>