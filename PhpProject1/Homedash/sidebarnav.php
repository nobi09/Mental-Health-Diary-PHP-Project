<?php
include '../Config/connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'><link rel="stylesheet" href="./dashstyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">my mental pal</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="data:image/png;base64,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"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="username">Welcome <?php echo $_SESSION['firstname'];?></span>
          
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          
          
          <li class="sidebar-dropdown">
              <a href="home.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
            
          </li>
           <li class="sidebar-dropdown">
               <a href="diarynew.php">
              <i class="fa fa-book"></i>
              <span>Dear Diary</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
            
          </li>
        <li class="sidebar-dropdown">
            <a href="mydiary.php">
              <i class="fa fa-book"></i>
              <span>My Diary</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
            
          </li>
            
          
          <li class="sidebar-dropdown">
              <a href="questionnaire.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Questionnaire</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
            
          </li>
          <li class="sidebar-dropdown">
            <a href="progress.php">
              <i class="far fa-gem"></i>
              <span>Progress</span>
            </a>
            
          </li>
          <li class="sidebar-dropdown">
           
           
          <li class="header-menu">
            <span>Extra</span>
          </li>
           
                <li class="sidebar-dropdown">
            <a href="profileinfo.php">
              <i class="fa fa-cog"></i>
              <span>Profile info</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
                  
                
            <li class="sidebar-dropdown">
            <a href="locations.php">
              <i class="fa fa-cog"></i>
              <span>Near by Help</span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
                
            <li class="sidebar-dropdown">
            <a href="faq.php">
              <i class="fa fa-cog"></i>
              <span>Mental Health FAQ </span>
              <span class="badge badge-pill badge-danger"></span>
            </a>
                
            
                    
            
                
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      
        <a href="../Config/logout.php">
          <i class="fa fa-power-off" placeholder="Sign out">  
              <span style=" font-family: sans-serif">Log Out</span>
</i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  
  <!-- page-content" -->

<!-- page-wrapper -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="./dashscript.js"></script>

</body>
</html>
