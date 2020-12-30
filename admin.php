<?php
include('connect.php');

$ID = $_SESSION['ID'];

$level = $_SESSION['level'];
if ($level != 'admin') {
  Header("Location: ../logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include('headadmin.php'); ?>
  <div class="container fonts" style="margin-top:10px;">
    <div class="content_right" style="background-color:#fffff8; height:200px;">
      <div class="text-center" style="padding-left:10px; margin-top:20px;">
        <input class="form-control" id="myInput" type="text" placeholder="Search.."> <br/><br/>
        <table class="table table-striped" cellpadding="0" cellspacing="0" border="0" align="center" width="1280px">
          <thead>
            <tr align='center' bgcolor='#FDCFC6'>
              <td>ชื่อท้องถิ่น</td>
              <td>ชื่อสามัญ</td>
              <td>ชื่อวิทยาศาสตร์</td>
              <td>กลุ่ม</td>
              <!--<td>ดอกเห็ด</td>
<td>ก้าน</td>
<td>สปอร์</td>
<td>การใช้ประโยชน์</td>
<td>นิเวศ</td>-->
              <td>รูปภาพ</td>
              <td>แก้ไข</td>
              <td>ลบ</td>
            </tr>
          </thead>
          <?php
          //1. เชื่อมต่อ database: 
          //include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
          //2. query ข้อมูลจากตาราง: 
          $perpage = 12;
          if (isset($_GET['page'])) {
            $page = $_GET['page'];
          } else {
            $page = 1;
          }
          $start = ($page - 1) * $perpage;
          $query = "SELECT * FROM mushroom ORDER BY m_id ASC LIMIT {$start} , {$perpage} ";
          //3. execute the query. 
          $result = mysqli_query($conn, $query);
          //4 . แสดงข้อมูลที่ query ออกมา: 

          //ใช้ตารางในการจัดข้อมูล
          //echo "<table border='1' align='center' width='1280'>";

          //echo "<tr align='center' bgcolor='#CCCCCC'><td>ชื่อท้องถิ่น</td><td>ชื่อสามัญ</td><td>ชื่อวิทยาศาสตร์</td><td>ลักษณะจำแนก</td><td>การใช้ประโยชน์</td><td>นิเวศ</td><td>แก้ไข</td><td>ลบ</td></tr>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<tbody id='myTable'";
            echo "<tr>";
            echo "<td>" . $row["m_cname"] .  "</td> ";
            echo "<td>" . $row["m_name"] .  "</td> ";
            echo "<td>" . $row["m_sname"] .  "</td> ";
            echo "<td>" . $row["m_family"] .  "</td> ";
            // echo "<td>" .$row["m_mush"] .  "</td> ";
            //echo "<td>" .$row["m_stalk"] .  "</td> ";
            //echo "<td>" .$row["m_spore"] .  "</td> ";
            //echo "<td>" .$row["m_benefit"] .  "</td> ";
            //echo "<td>" .$row["m_env"] .  "</td> ";
            echo "<td>" . $row["m_pic"] .  "</td> ";


            //แก้ไขข้อมูลส่่ง member_id ที่จะแก้ไขไปที่ฟอร์ม
            echo "<td><a href='updatehedform.php?m_id=$row[0]'><button type='edit' class='btn-warning' >edit</button></a></td> ";

            //ลบข้อมูล
            echo "<td><a href='deletehed.php?m_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\"><button type='delete' class='btn-danger'>del</button></a></td> ";
            echo "</tr>";
          }
          echo "</table>";
          $sql2 = "SELECT * FROM mushroom ";
          $query2 = mysqli_query($conn, $sql2);
          $total_record = mysqli_num_rows($query2);
          $total_page = ceil($total_record / $perpage);


          //5. close connection
          mysqli_close($conn);
          ?>

          <p class="text-center">
            <a href="admin.php?page=1" aria-label="Previous"><span aria-hidden="true"><i class="fas fa-backward"></i></span></a>
            <?php for ($i = 1; $i <= $total_page; $i++) { ?>
              <span><a href="admin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></span>
            <?php } ?>
            <a href="admin.php?page=<?php echo $total_page; ?>" aria-label="Next"><span aria-hidden="true"><i class="fas fa-forward"></i></span></a>
          </p>
      </div>
    </div>
  </div>
  </div>


  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>

</html>