<?php 
session_start();
        if(isset($_POST['username'])){
                  include("connect.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM login 
                  WHERE  username='".$username."' 
                  AND  password='".$password."' ";
                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["ID"] = $row["ID"];
                      //$_SESSION["name"] = $row["name"];
                      $_SESSION["level"] = $row["level"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: admin.php");
                      }
                  if ($_SESSION["level"]=="user"){ 

                        Header("Location: index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>