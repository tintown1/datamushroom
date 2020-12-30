<?php 
	include('connect.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Search</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<?php include('head.php'); ?>


<div class="article-container">
<div class="container fonts" style="margin-top:10px;">

<div class="content_right" style="background-color:#fffff8; height:200px;">
	<div class="text-center" style="padding-left:10px; margin-top:20px;">
	<h1>Search results</h1>
<!--<div class="table" style="margin-top:10px;">
                            <table class="table" style="color:#337ab7 ;background-color:white" >
                            <thead>
                                <tr class="text-center" style="font-size:14px;">
                                	<th>ชื่อท้องถิ่น</th>
                                    <th>ชื่อสามัญ</th>
                                    <th>ชื่อวิทยาศาสตร์</th>                                    
                                </tr>
                            </thead>
							<tbody>-->
	<?php 
		if (isset($_POST['submit-search'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM mushroom WHERE m_cname LIKE '%$search%' OR m_name LIKE '%$search%' OR m_sname LIKE '%$search%' ";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);

			echo "There are ".$queryResult." results!";

			if ($queryResult > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href='article.php?title=".$row['m_cname']."&date=".$row['m_name']."'>
					<div class='article-box'>
					<table class='table' style='color:#337ab7 ;background-color:white' >
					<thead class='thead-dark'>
					<tr>
						<th>ชื่อท้องถิ่น</th>
						<th>ชื่อสามัญ</th>
						<th>ชื่อวิทยาศาสตร์</th>
					</tr>
					</thead>
					<tr class='text-center' style='font-size:14px;'>
						<td>".$row['m_cname']."</td>
						<td>".$row['m_name']."</td>
						<td>".$row['m_sname']."</td>
						
						</tr></table></div></a>";					
				}
			} else {
				echo "There are no results matching your search!";
			}
		}
	 ?>
</div>
	</div>

</tbody>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>