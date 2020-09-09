<?php
include '../Config/connection.php';
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
    <li><a  href="../index.php">Home</a></li>
  <li><a class="active" href="registration2.php">Register</a></li>
  <li><a  href="login2.php">Login</a></li>
</ul>
<div class="container">
  <h2>User Registration</h2>
  <form action="" class="was-validated" method="post">
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter your name" name="firstname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter your last name" name="lastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" class="form-control" id="uname" placeholder="Create a username" name="username" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
      <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="uname" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Create a password password" name="password" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
  </form>
</div>
</body>
</html>
<?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT username from `user`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
          $email=$_POST['email'];
          $username=$_POST['username'];
          $password=$_POST['password'];
          
          $sql = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `username`, `password`) VALUES ('$firstname','$lastname','$email','$username','$password')";



          mysqli_query($db,$sql);
          ?>
          <script type="text/javascript">
           alert("Registration successful. Please Login");
           window.location="login2.php"

          </script>
           
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>