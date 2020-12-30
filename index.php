<?php include('connect.php');  ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เห็ดในป่าสแกราช</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body style>
    <?php include("head.php"); ?>

    <section id="content">
        <div class="container fonts" style="margin-top:10px;">
            <div class="content_right" style="background-color:#fffff8; height:200px;">
                <div class="text-center" style="padding-left:10px; margin-top:20px;">

                    <!-- ส่วนของฝังขวา -->
                    <!--<div class="container fonts" style="margin-top:10px;">
            <div class="admin_right" style="background-color:#fffff8;">
                <div style="margin-top:20px;">
                    <h4 class="text-center">ข้อมูลห้องพัก</h4>
                    <form method="get" action="index.php">
                    <div class="row justify-content-center" style="padding-top:20px;">
                        <div class="col-2 text-right" style="padding-top:7px">ค้นหา :</div>
                        <div class="col-4">-->

                    <center>
                        <form action="search.php" method="POST">
                            <input type="text" class="form=control" name="search" placeholder="Search" required>
                            <button type="submit" class="btn btn-primary" name="submit-search">Search</button>
                        </form>
                    </center>

                    <h2>All Mushrooms</h2>

                    <div class="article-container">
                        <div class="table-responsive" style="margin-top:10px;">
                            <table align="right" class="table table-bordered table-sm" style="color:#337ab7 ;background-color:white">
                                <thead class="thead-dark">
                                    <tr class="text-center" style="font-size:14px;">
                                        <th>ชื่อท้องถิ่น</th>
                                        <th>ชื่อสามัญ</th>
                                        <th>ชื่อวิทยาศาสตร์</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $perpage = 15;
                                    if (isset($_GET['page'])) {
                                        $page = $_GET['page'];
                                    } else {
                                        $page = 1;
                                    }
                                    $start = ($page - 1) * $perpage;
                                    $sql = "SELECT * FROM mushroom ORDER BY m_id ASC LIMIT {$start} , {$perpage} ";
                                    $result = mysqli_query($conn, $sql);
                                    $queryResults = mysqli_num_rows($result);

                                    if ($queryResults > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr class='article-box'>
						                    <td>" . $row['m_cname'] . "</td>
						                    <td>" . $row['m_name'] . "</td>
						                    <td>" . $row['m_sname'] . "</td>
					                        </tr>";
                                        }
                                    }
                                    $sql2 = "SELECT * FROM mushroom ";
                                    $query2 = mysqli_query($conn, $sql2);
                                    $total_record = mysqli_num_rows($query2);
                                    $total_page = ceil($total_record / $perpage);
                                    ?>
                        </div>
                        </tbody>
                        </table>
                        <p class="text-center">
                            <a href="index.php?page=1" aria-label="Previous"><span aria-hidden="true"><i class="fas fa-backward"></i></span></a>
                            <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                                <span><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></span>
                            <?php } ?>
                            <a href="index.php?page=<?php echo $total_page; ?>" aria-label="Next"><span aria-hidden="true"><i class="fas fa-forward"></i></span></a>
                        </p>
                    </div>
                </div>
            </div>
    </section>




    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>