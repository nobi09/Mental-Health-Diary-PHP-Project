<?php
include 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: darkgrey;
}

.active {
  background-color: #4CAF50;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<ul>
    <li><a  href="index.php">Home</a></li>
  <li><a href="registration2.php">Register</a></li>
  <li><a class="active" href="login2.php">Login</a></li>
</ul>
<div class="container">
  <h2>Professional Login</h2>
  <form action="" class="was-validated" method="post">
    <div class="form-group">
      <label for="uname">Email:</label>
      <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
      
    <button type="submit" class="btn btn-primary" name="submit" value="Sign In">Sign in</button>
  </form>
  <hr>
  <a href="proflogin.php"><button type="button" class="btn btn-secondary" name="submit" value="Sign In">To Login as an user click this button</button></a>

  
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))  {
    
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `professional` WHERE email='$_POST[email]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>              
              <script type="text/javascript">
                alert("Username and password do not match");
              </script> 
             
          <!--<div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>Username and password do not match</strong>
          </div>    
        <?php
      }
      else
      {
          session_start();
          $_SESSION['name'] = $_POST['email'];
          $name=$_SESSION['name'];
          $res1=mysqli_query($db,"SELECT `username` FROM `professional` WHERE email='$_POST[email]' && password='$_POST[password]';");
      
          $row= mysqli_fetch_assoc($res1);
          $_SESSION['username']=$row["username"];
          
          $res2=mysqli_query($db,"SELECT `firstname` FROM `professional` WHERE email='$_POST[email]' && password='$_POST[password]';");

           $row= mysqli_fetch_assoc($res2);
          $_SESSION['firstname']=$row["firstname"];
          
          $res3=mysqli_query($db,"SELECT `lastname` FROM `professional` WHERE email='$_POST[email]' && password='$_POST[password]';");

           $row= mysqli_fetch_assoc($res3);
          
          $_SESSION['lastname']=$row["lastname"];
          
          $_SESSION['type']="professional";
          
          
          //session_id()=$name;


        ?>
          <script type="text/javascript">
            window.location="homeprof.php"
          </script>
        <?php
      }
    }

  ?>