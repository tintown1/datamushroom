<?php include('connect.php');  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เห็ดในป่าสแกราช</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<?php include("head.php"); ?>
    <section id="content">

      
        <!-- ส่วนของฝังขวา -->
        <div class="container fonts" style="margin-top:10px;">
            <div class="admin_right" style="background-color:#fffff8;">
                <div style="margin-top:20px;">
                    <h4 class="text-center">ข้อมูลเห็ดป่า</h4>
                    <form method="get" action="index - Copy.php">
                    <div class="row justify-content-center" style="padding-top:20px;">
                        <div class="col-2 text-right" style="padding-top:7px">ค้นหา :</div>
                        <div class="col-4">
                        <?php
	                            ini_set('display_errors', 1);
	                                error_reporting(~0);

	                            $strKeyword = null;

	                            if(isset($_POST["txtKeyword"]))
	                            {
		                            $strKeyword = $_POST["txtKeyword"];
	                            }
                        ?>
                        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                        <table width="599" border="1">
                        <tr>
                        <th>Keyword
                         <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
                         <input type="submit" value="Search"></th>
                        </tr>
                         </table>
                        </form>
                        </div>
                        <div class="col-2"><button type="submit" class="btn btn-info">ค้นหา</button></div>
                    </div>
                    </form>
                    
                    <?php 
                    if($_GET['search'] == "")
                    {
                    ?>
                        <div class="table-responsive" style="margin-top:10px;">
                            <table class="table table-hover" style="color:#337ab7 ;background-color:white">
                            <thead>
                                <tr class="text-center" style="font-size:14px;">
                                <th>ชื่อท้องถิ่น</th>
                                    
                                    <th>ชื่อสามัญ</th>
                                    <th>ชื่อวิทยาศาสตร์</th>
                                    
                                </tr>
                            </thead>
                                <tbody>
                                    <?php 
                                    $perpage = 10;
                                    if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                    } else {
                                    $page = 1;
                                    }
                                    $start = ($page - 1) * $perpage;
                                    $querymanage = "SELECT *
                                    FROM hed  
                                    
                                    ORDER BY H_ID ASC LIMIT {$start} , {$perpage}";
                                    $objQuery = mysqli_query($conn,$querymanage);
                                    if(mysqli_num_rows($objQuery) > 0) 
                                    {
                                        
                                        while($row = mysqli_fetch_array($objQuery))
                                        { 
                                        ?>
                                        <tr class="text-center" style="font-size:14px;">
                                            <td><?php echo $row['H_cname']; ?></td>
                                            
                                            <td><?php echo $row['H_name']; ?></td>
                                            <td><?php echo $row['H_sciname']; ?></td>
                                          
                                           
                                            <!--<td><a href="rs_admincreateroom.php?id=<?php echo $row['rID']; ?>"><i style="color:#337ab7;" class="fas fa-edit"></i></a></td>
                                            <td><a onclick="deleteItem(<?php echo $row['rID']; ?>);"><i  style="color:#337ab7;" class="fa fa-trash"></i></a></td>-->
                                        </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            $sql2 = "SELECT * FROM hed ";
                            $query2 = mysqli_query($conn, $sql2);
                            $total_record = mysqli_num_rows($query2);
                            $total_page = ceil($total_record / $perpage);
                        ?>
                        <p class="text-center">
                            <a href="index.php?page=1" aria-label="Previous"><span aria-hidden="true"><i class="fas fa-backward"></i></span></a>
                            <?php for($i=1;$i<=$total_page;$i++){ ?>
                                <span><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></span>
                            <?php } ?>  
                            <a href="index.php?page=<?php echo $total_page;?>" aria-label="Next"><span aria-hidden="true"><i class="fas fa-forward"></i></span></a> 
                        </p>
                        </div>
                    <?php
                    }

                    else
                    {
                    ?>
                        <div class="table-responsive" style="margin-top:10px;">
                            <table class="table table-hover" style="color:#337ab7 ;background-color:white">
                            <thead>
                                <tr class="text-center" style="font-size:14px;">
                                    <th>ชื่อท้องถิ่น</th>
                                    
                                    <th>ชื่อสามัญ</th>
                                    <th>ชื่อวิทยาศาสตร์</th>
                                   
                                </tr>
                            </thead>
                                <tbody>
                                    <?php 
                                    $querymanage = "SELECT *
                                    FROM hed
                                    LEFT JOIN rs_typeroom on rs_room.typeID = rs_typeroom.ID
                                    WHERE (rs_room.typeID LIKE '%".$_GET["search"]."%') ";
                                    $objQuery = mysqli_query($conn,$querymanage);
                                    while($row = mysqli_fetch_array($objQuery))
                                    { 
                                    ?>
                                    <tr class="text-center" style="font-size:14px;">
                                    <td><?php echo $row['H_cname']; ?></td>
                                            
                                            <td><?php echo $row['H_name']; ?></td>
                                            <td><?php echo $row['H_sciname']; ?></td>
                                          
                                        
                                        <!--<td><a href="rs_admincreateroom.php?id=<?php echo $row['rID']; ?>"><i style="color:#337ab7;" class="fas fa-edit"></i></a></td>
                                        <td><a onclick="deleteItem(<?php echo $row['rID']; ?>);"><i  style="color:#337ab7;" class="fa fa-trash"></i></a></td>-->
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    }
                    ?>
                    

                </div>
            </div>
    </section>
   <!-- <script>
        function deleteItem (id) 
        { 
            if(confirm('คุณแน่ใจแล้วใช่หรือไม่ ที่จะลบข้อมูลนี้') == true)
            {
                window.location=`deletehed.php?H_ID=${$HID}`;
            }
        };
    </script>-->






    

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js" ></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
</body>
</html>