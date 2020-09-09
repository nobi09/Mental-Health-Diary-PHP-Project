<?php
$db = mysqli_connect("localhost", "root", "", "mydb"); 
session_start();


    if(isset($_POST['delete']))
    {   
        
        $date = $_POST['date'];
        
        mysqli_query($db,'SET SQL_SAFE_UPDATES = 0');


        $sql = "  
        DELETE FROM `diary`   
        WHERE diary_page_date='$date' && user_username = '$_SESSION[username]'  ";

        $res=  mysqli_query($db, $sql); 
        
        
        
        mysqli_query($db,'SET SQL_SAFE_UPDATES = 1');


        
    if ($res){



    ?>
    <script type="text/javascript">
    alert("Page Deleted Successfully");
    window.location="mydiary.php"

    </script>

    <?php
    }

    else 
    {
    ?>
    <script type="text/javascript">
    alert("Deletion failed");
    window.location="mydiary.php"

    </script>

    <?php

      }
           }


