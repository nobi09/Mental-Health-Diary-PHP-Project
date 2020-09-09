<?php
$db = mysqli_connect("localhost", "root", "", "mydb"); 
session_start();


    if(isset($_POST['update']))
    {   
        
        $date = $_POST['date'];
        $page = $_POST['page'];
        
        $sql3 ="SELECT `time`
                FROM `diary`
                WHERE diary_page_date='$date' && user_username = '$_SESSION[username]'";
        
        $result=mysqli_query($db, $sql3);
        
        $rs = mysqli_fetch_array($result);

        $time = $rs['time'];
        
        mysqli_query($db,'SET SQL_SAFE_UPDATES = 0');


        $sql = "  
        DELETE FROM `diary`   
        WHERE diary_page_date='$date' && user_username = '$_SESSION[username]'  ";

        $res=  mysqli_query($db, $sql); 
        
        
        $sql2 = "INSERT INTO `diary` VALUES ('$date','$page','$_SESSION[username]', '$time')";

        $res2=  mysqli_query($db, $sql2); 
        
        mysqli_query($db,'SET SQL_SAFE_UPDATES = 1');


        
       
    if ($res2){



    ?>
    <script type="text/javascript">
    alert("Update Successful");
    window.location="mydiary.php"

    </script>

    <?php
    }

    else 
    {
    ?>
    <script type="text/javascript">
    alert("Update failed");
    window.location="mydiary.php"

    </script>

    <?php

      }
           }


