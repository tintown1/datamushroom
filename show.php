<?php
    include('connect.php');
    $q = "SELECT * FROM hed";
    $result = mysqli_query($connect,$q);
?>
<html>
<head>
 <meta charset="UTF-8">
 <title>แสดงรูป</title>
</head>
<body>
<table style="width: 500px">
 <tr>
 <th>รูปภาพ</th>
 </tr>
 <?php
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
 ?>
 <tr>
    <td><img src="uploads/<?php echo $row ['H_pic'] ?>"></td>

</tr>
<?php 
     } 
     mysqli_free_result($result);
     mysqli_close($conn);
     ?>
</table>
</body>
</html>