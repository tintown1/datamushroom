<?php include('connect.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Articles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>



	<?php
	include('head.php');
	?>
	<div class="container fonts" style="margin-top:10px;">

		<div class="content_right" style="background-color:#fffff8; height:500px;">

			<h1>Article page</h1>


			<div class="article-container">



				<!--<table align = "center" width = "75%" border = "0" cellpadding = "10">
	<thead>
	<tr>
	<th>ชื่อท้องถิ่น :</th>
	</tr>
	<tr>
	<th>ชื่อสามัญ :</th>
	</tr>
	<tr>
	<th>ชื่อวิทยาศาสตร์ :</th>
	</tr>
	<tr>
	<th>ลักษณะจำแนก :</th>
	</tr>
	<tr>
	<th>การใช้ประโยชน์ :</th>
	</tr>
	<tr>
	<th>นิเวศ :</th>
	</tr>
	</thead>-->
				<tbody>
					<?php

					$title = mysqli_real_escape_string($conn, $_GET['title']);
					$date = mysqli_real_escape_string($conn, $_GET['date']);
					//$pic = mysqli_real_escape_string($conn, $_GET['pic']);

					$sql = "SELECT * FROM mushroom WHERE m_cname='$title' AND m_name = '$date'";
					//$sql2 = "SELECT * FROM mushroom WHERE m_pic='$pic";
					$result = mysqli_query($conn, $sql);
					$queryResults = mysqli_num_rows($result);

					if ($queryResults > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<center><div class='col-4'><a href='uploadshed/" . $row['m_pic'] . "'><img src='uploadshed/" . $row['m_pic'] . "' align='center' width='150' height='200' ></div></a></center> ";
							echo "<div class='article-box'>
					
					
					<table  align ='center' border = '0' cellpadding = '10' cellspacing='0' width='50%'> 
					<tr>
						<th>ชื่อท้องถิ่น :</th>
						<td>" . $row['m_cname'] . "</td>
					</tr>
					<tr>
						<th>ชื่อสามัญ :</th>
						<td>" . $row['m_name'] . "</td>
					</tr>
					<tr>
						<th>ชื่อวิทยาศาสตร์ :</th>
						<td>" . $row['m_sname'] . "</td>
					</tr>
					<tr>
						<th>ชื่อกลุ่ม :</th>
						<td>" . $row['m_family'] . "</td>
					</tr>
					<tr>
						<th>ลักษณะจำแนก :</th>	
					</tr>
					<tr>
						<th>ดอกเห็ด :</th>
						<td>" . $row['m_mush'] . "</td>	
					</tr>
					<tr>
						<th>ก้าน :</th>
						<td>" . $row['m_stalk'] . "</td>	
					</tr>
					<tr>
						<th>สปอร์ :</th>
						<td>" . $row['m_spore'] . "</td>	
					</tr>
					<tr>
						<th>การใช้ประโยชน์ :</th>
						<td>" . $row['m_benefit'] . "</td>
					</tr>
					<tr>
						<th>นิเวศ :</th>
						<td>" . $row['m_env'] . "</td>
					</tr>

					</table></div>";
						}
					}
					?>
			</div>
		</div>
	</div>
	</tbody>
	</table>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>