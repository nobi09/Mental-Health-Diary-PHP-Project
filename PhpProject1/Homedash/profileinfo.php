<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';

?>

  <main class="page-content">
    <div class="container-fluid">
      <h2>My profile</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <?php
                      
          $type=$_SESSION['type'];

          echo $type;
          echo $_SESSION['username'];
          

           
               
            
            
          
            $sql = "SELECT * FROM `$type` WHERE username='$_SESSION[username]' ";
            $query=mysqli_query($db,$sql);
            while ($rows = mysqli_fetch_array($query)) {    
                       
            ?>
            <table class="table table-hover">

            <tr>
                <th>First Name</th>
            <td><?php echo $rows['firstname'];?></td>
            </tr>
            <tr>
                <th>Last Name</th>
            <td><?php echo $rows['lastname'];?></td>
            </tr>
            <tr>
                <th>Email</th>
            <td><?php echo $rows['email'];?></td>
            </tr>
            <tr>
                <th>Username</th>
            <td><?php echo $rows['username'];?></td>
            </tr>
            <tr>
                <th>Password</th>
            <td><?php echo $rows['password'];?></td>
            </tr>
            

        </tr>
          </table>

        <?php
    }
    ?>
            
         
            
            
            
            
            
        </div>
       
      </div>
      <h3>Edit your information</h3>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
         <form  method="post">

             <table class="table table-hover">
                 <form>
      <tr>
          <th>Firstname</th>
          <td><input id="name" type="text"  class="form-control" name="firstname" placeholder="Name" required></td>
      </tr>
    <tr>
          <th>Lastname</th>
          <td><input id="lastname" type="text"  class="form-control" name="lastname" placeholder="Lastname" required></td>
      </tr>
      <tr>
          <th>Email</th>
          <td><input id="email" type="text" class="form-control" name="email" placeholder="Email">
      <tr>
          <th>Username</th>
          <td><input id="username" type="text"  class="form-control" name="username" placeholder="Username" required></td>
      </tr>
      <tr>
          <th>Password</th>
          <td><input id="password" type="text"  class="form-control" name="password" placeholder="Password" required></textarea></td>
      </tr>
    
  </table>
             <button type="submit" name="submit" class="btn btn-primary btn-lg" style="float: right">Update Details</button>
</form>
<?php
    
  
    if(isset($_POST['submit'])){
     
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
          $email=$_POST['email'];
          $username=$_POST['username'];
          $password=$_POST['password']; 
          
          $count=0;

           $sql1 = "           
           UPDATE `$type`   
           SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `username`='$username', `password`='$password' 
           WHERE username='$_SESSION[username]';" ;
           
           
           $res=mysqli_query($db,$sql1);
          
           $count = mysqli_affected_rows($db);

           if ($res){



          ?>
          <script type="text/javascript">
           alert("Update Successful: Please Login Again");
           window.location="profile.php"

          </script>
           
        <?php
      }
      
      else    {
          ?>
          <script type="text/javascript">
           alert("Update failed");
           window.location="profileinfo.php"

          </script>
           
        <?php
      
    }}
          ?>
          
        </div>
          
        </div>
       
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
