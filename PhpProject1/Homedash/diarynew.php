<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';
$date= date("d/M/Y H:i");
echo $_SESSION['username'];
$time= strtotime($date);
echo "$date.<br>" ;
$today=strtotime ("today");
echo "$today.<br>";
$now=strtotime ("now");
echo "$now.<br>";

$day=strtotime ("26 march 2020");
echo "$day.<br>";
?>
  <!-- sidebar-wrapper  -->
  <main class="page-content" style="background-color: #F9F7F6;">
      
      <div class="row" style="background-color: #F9F7F6;">
  <div class="col"></div>
  
<div class="col-8" style="padding: auto; text-align: center"><img id="diary-icon" src="https://i.ibb.co/8rhVsx8/book-6.png" > <h1>Dear Diary</h1>
    <hr><h2 id="main-heading">Type your personal thoughts and get instant responses.</h2> 
    <p id="main-intro"> We understand that sometimes it can be tough having no one around to talk to. Dear Diary is an application that allows you to enter what you're thinking throughout the day and will analyse your messages to get to know you better as a person and try to help you throughout the day/weeks/months and year by giving you ideas and solutions on how you can tackle your current issues in life. </p>
</div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col-8" style="text-align: center"><h2 class="mheading">About <span class="text-primary">Dear Diary</span></h2>
        <p>The idea behind Dear Diary is to help people who may not know who turn to at any moment in time and we understand that in these situations it can be tough not fully understanding why you're feeling low and depressed. Users can submit their personal thoughts and experiences on a private blog. Once they have submitted a message, the system will analyse common behaviour patterns and will try to explain what the user is experiencing and giving regular support by giving the user recommendations on a daily basis. </p>
    </div>
<div class="col"></div>
</div>
       <div class="row" style="background-color: wheat;">
  <div class="col"></div>
  <div class="col-8" style="padding: auto; text-align: center">
    <form action="" method="post" style="padding-top: 100px;  ">
<?php        include 'index.html'?>        <br>
        <button type="submit" name="submit" class="btn btn-primary btn-lg" style="float: right;">Add page to your diary</button>
    </form>
      <a href="mydiary.php" style="color: white"><button type="button" name="previouspages" class="btn btn-danger btn-lg" style="float: left; ">See previous pages</button></a>

</div>

    <div class="col"></div>
</div>
<div class="row">
      <div class="col"></div>
  <div class="col-8" style="padding: auto; text-align: center"> <h2 class="mheading">We Need To Talk About <span class="text-primary">Depression (VIDEO)</span></h2> 
             
                 <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/hoJJeK_shlA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
  <div class="col"></div>
</div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="./dashscript.js"></script>

</body>
</html>
<?php

      if(isset($_POST['submit']))
      {
        
          $diarypage=$_POST['page'];
          $score=$_POST['score'];
          
          mysqli_query($db,'SET foreign_key_checks = 0');

          $sql = "INSERT INTO `diary` VALUES ('$date','$diarypage','$_SESSION[username]','$now')";
//do some stuff here

         $res=mysqli_query($db,$sql);
           
                      $count = mysqli_affected_rows($db);

           
           mysqli_query($db,'SET foreign_key_checks = 1');
           


         


           
           if ($count!=0){



          ?>
          <script type="text/javascript">
           alert("Diary Updated Successfully");
           window.location="mydiary.php"

          </script>
           
        <?php
      }
      
      elseif ($count==0) 
   {
          ?>
          <script type="text/javascript">
           alert("Update failed");
           window.location="diarynew.php"

          </script>
           
        <?php
      
  }
           }