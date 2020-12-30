<?php
include('connect.php');

$ID = $_SESSION['ID'];

$level = $_SESSION['level'];
if ($level != 'admin') {
    Header("Location: ../logout.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>            </title>
</head>

<body>
    <?php include('headadmin.php'); ?>
    <div class="content_right" style="background-color:#fffff8; height:200px;">
        <div class="text-center" style="padding-left:10px; margin-top:20px;">
            <center><br /><br /><br />
                <p>เพิ่ม admin</p>
                <form id="form1" name="form1" action="save_admin.php" method="post" enctype="multipart/form-data">
                    <table width="60%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td>
                                <label class="form-label" for="form7Example1">ชื่อผู้ใช้ :</label>
                            </td>
                            <td>
                                <div class="form-outline mb-4">
                                    <input type="text" id="ีusername" name="username" class="form-control" required>
                                    <div class="invalid-feedback">
                                        กรุณากรอกชื่อท้องถิ่น
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label" for="form7Example1">รหัสผ่าน :</label>
                            </td>
                            <td>
                                <div class="form-outline mb-4">
                                    <input type="text" id="password" name="password" class="form-control" required>
                                    <div class="invalid-feedback">
                                        กรุณากรอกชื่อสามัญ
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="form-label" for="form7Example1">level :</label>
                            </td>
                            <td>
                                <div class="form-outline mb-4">
                                    <input type="text" id="level" name="level" class="form-control" required>
                                    <div class="invalid-feedback">
                                        กรุณากรอกชื่อสามัญ
                                    </div>
                                </div>
                            </td>
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

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>