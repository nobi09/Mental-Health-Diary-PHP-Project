<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';

if (isset($_SESSION['name']))
      echo $_SESSION['name'];
      echo $_SESSION['username'];
$name=$_SESSION['username'];

$date= date("d/m/Y");
/*
$query="SELECT `score` FROM `questionnaire` WHERE user_username='$name', datetaken='$date' , symptom='depression'";
$result = mysqli_query($db,$query);
$row = mysqli_fetch_array($result);
echo $row['score'];

 */




$query="SELECT score FROM questionnaire WHERE symptom='depression' && user_username='$name' && datetaken='$date' ";
$res=  mysqli_query($db, $query);
$row= mysqli_fetch_array($res);
$dep=  intval($row["score"]);


$query1="SELECT score FROM questionnaire WHERE symptom='anxiety' && user_username='$name' && datetaken='$date'";
$res1=  mysqli_query($db, $query1);
$row1= mysqli_fetch_array($res1);
$anx=  intval($row1["score"]);

$query2="SELECT score FROM questionnaire WHERE symptom='sdisorder' && user_username='$name' && datetaken='$date'";
$res2=  mysqli_query($db, $query2);
$row2= mysqli_fetch_array($res2);
$sd=  intval($row2["score"]);

$query3="SELECT score FROM questionnaire WHERE symptom='subabuse' && user_username='$name' && datetaken='$date'";
$res3=  mysqli_query($db, $query3);
$row3= mysqli_fetch_array($res3);
$suba3=  intval($row3["score"]);





 
?>


  <!-- sidebar-wrapper  -->
  <main class="page-content" style="background-color: #F9F7F6;">
      
      <div class="row" style="background-color: #F9F7F6;">
  <div class="col"></div>
  <div class="col-8" style="padding: auto; text-align: center"><img id="diary-icon" src="data:image/png;base64,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" > 
      <h1>Mood Self-Assessment Results</h1>
      <hr>
      <p>See the results below. The questionnaire has the objective of keeping track of your emotional state over time, so please try to complete it at least once  a week</p></div>
    <div class="col"></div>
</div>
<div class="row">
      <div class="col"></div>
  <div class="col"></div>
  <div class="col-8" style="padding: auto; text-align: center">
      
      

</div>

    <div class="col"></div>
  <div class="col"></div>
</div>
       <div class="row" >
  
</div>
<div class="row">
      
      <div class="col">
          <div id="chartContainer" style="height: 370px; width: 100%; flex-align: end"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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
<?php
$dataPoints = array(
	array("x"=> 10, "y"=> $anx, "indexLabel"=> "Anxiety"),
	array("x"=> 20, "y"=> $dep, "indexLabel"=> "Depression"),
	array("x"=> 30, "y"=> $sd, "indexLabel"=> "Somatic Disorder"),
	array("x"=> 40, "y"=> $suba3,"indexLabel"=> "Substance Abuse"),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Questionnaire results"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
    
</body>
</html>                              