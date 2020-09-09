   <?php
include '../Config/connection.php';
session_start();
echo $_SESSION["username"];
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <title></title>
    </head>
    <body>
        
       

<!--ADD Page Modal 
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="insert.php" method="post">

      <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Date Page</label>
                <input type="text" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Page content</label>
                <input type="text" class="form-control" name="page" id="exampleInputPassword1">
            </div>
            
            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="insert" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>-->
<!--############################################################################################## -->


<!--Edit Page Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modify the page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="update.php" method="post">

      <div class="modal-body">
            
          <input type="hidden"  name="date" id="date">
            <div class="form-group">
                <label for="exampleInputPassword1">Page content</label>
                 <?php include 'index.html';?>
              <!-- <input type="text" class="form-control" name="page" id="page">
           --> </div>
            
            
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="update" class="btn btn-primary">Update Page</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Page </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="delete.php" method="post">

            <div class="modal-body">

                <input type="hidden" name="date" id="deldate">

                <h4> Do you want to Delete this Page ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="delete" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->



        <div class="container">
                
                    <h2> My Diary </h2>
                
                 <div class="card">
                    <div class="card-body">
                         <!-- Button trigger modal -->
                         <a href="diarynew.php"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Add Page
                             </button></a> 
                         <a href="home.php"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="float: right">
                        Back to Home Page
                             </button></a>

                    </div>
                </div> 
                
                    <div class="card-body">
                <?php $db = mysqli_connect("localhost", "root", "", "mydb");
                
                $sql="SELECT * FROM diary WHERE user_username='$_SESSION[username]'";
                $res=  mysqli_query($db, $sql);
                ?>
                
                        
                    
                    
                
                <?php $db = mysqli_connect("localhost", "root", "", "mydb");
                
                $sql="SELECT * FROM diary WHERE user_username='$_SESSION[username]' ORDER BY time DESC";
                $res=  mysqli_query($db, $sql);
                ?>
                    
                    <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Page</th>
                        <th scope="col">Edit Page</th>
                        <th scope="col">Delete Page</th>
                      </tr>
                    </thead>
                    <?php        
                if ($res) {
                foreach ($res as $row)
                {
                    ?>
                    
                    <tbody>
                      <tr>
                        <td><?php echo  $row['diary_page_date'];?></td>
                        <td><?php echo $row['page'];?></td>
                        <td>
                            <button type="button" class="btn btn-warning editbtn">Edit page</button>
                        </td>
                        
                        <td>
                                <button type="submit" name="delete" class="btn btn-danger btn-sm deletebtn" >Delete the Page</button>
                            
                            
                        </td>
                      </tr>
                      <tr>
                       </tbody>
                       <?php    
                }
                }
                else 
                {
                echo 'No Record Found';
                    
                }

                ?>
                  </table>
                    </div>
                
        </div>
        
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>      
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {
        
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#deldate').val(data[0]);
      
    });
});

</script>
<script>
    
$(document).ready(function(){
    $('.editbtn').on('click', function(){
        $('#editmodal').modal('show');
        
        $tr =$(this).closest('tr');
        
        var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            
            console.log(data);
            
            $('#date').val(data[0]);
            $('#txt ').val(data[1]);
        
        // questa part mostrai valori all interno dell edit modal
    });
    
});  

</script>

    
</body>
</html>
