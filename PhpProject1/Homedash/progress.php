<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';
error_reporting(E_ERROR | E_PARSE);// disables the dispalying of errors

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




$query="SELECT score FROM questionnaire WHERE symptom='depression' && user_username='$name'  ";
$res=  mysqli_query($db, $query);
$row= mysqli_fetch_array($res);
$dep=  intval($row["score"]);
if (!$res) {
    printf("Error: %s\n", mysqli_error($db));
    
}



$query2="SELECT score FROM questionnaire WHERE symptom='sdisorder' && user_username='$name' ";
$res2=  mysqli_query($db, $query2);
$row2= mysqli_fetch_array($res2);
$sd=  intval($row2["score"]);

$query3="SELECT score FROM questionnaire WHERE symptom='subabuse' && user_username='$name' ";
$res3=  mysqli_query($db, $query3);
$row3= mysqli_fetch_array($res3);
$suba3=  intval($row3["score"]);






 
?>
<?php
    $dataPoints = array();
    
    $query1="SELECT score,datetaken FROM questionnaire WHERE symptom='anxiety' && user_username='$name' ORDER BY time ";
    $res1=  mysqli_query($db, $query1);
    
    
    while ($row = mysqli_fetch_assoc($res1)) {		
		array_push($dataPoints, array("y"=> $row["score"],"label"=> $row["datetaken"]));
	}
    
 $dataPoints2 = array();
    
    $query2="SELECT score,datetaken FROM questionnaire WHERE symptom='depression' && user_username='$name' ORDER BY time ";
    $res2=  mysqli_query($db, $query2);
    
    
    while ($row = mysqli_fetch_assoc($res2)) {		
		array_push($dataPoints2, array("y"=> $row["score"],"label"=> $row["datetaken"]));
	}
    

$dataPoints3 = array();
    
    $query3="SELECT score,datetaken FROM questionnaire WHERE symptom='sdisorder' && user_username='$name' ORDER BY time ";
    $res3=  mysqli_query($db, $query3);
    
    
    while ($row = mysqli_fetch_assoc($res3)) {		
		array_push($dataPoints3, array("y"=> $row["score"],"label"=> $row["datetaken"]));
	}
    

$dataPoints4 = array();
    
    $query4="SELECT score,datetaken FROM questionnaire WHERE symptom='subabuse' && user_username='$name' ORDER BY time ";
    $res4=  mysqli_query($db, $query4);
    
    
    while ($row = mysqli_fetch_assoc($res4)) {		
		array_push($dataPoints4, array("y"=> $row["score"],"label"=> $row["datetaken"]));
	}
    

?>


  <!-- sidebar-wrapper  -->
  <main class="page-content" style="background-color: #F9F7F6;">
      
      <div class="row" style="background-color: #F9F7F6;">
  <div class="col"></div>
  <div class="col-8" style="padding: auto; text-align: center"><img id="diary-icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQDI68ZjeW3VUec4v5I-M_JQxC6pSfapKvg7ntXp_pZwC9Si6iC" > 
      <h1>Mental Health Progress</h1>
      <hr>
      <p>See the progress you have made so far below. The questionnaire has the objective of keeping track of your emotional state over time, so please try to complete it at least once  a week</p>
  </div>
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
        <div class="col"></div>

      <div class="col-8">
          <div id="chartContainer" style="height: 370px; width: 100%; flex-align: end"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      </div>
          <div class="col"></div>

</div>
      
      
      <div class="row">
        <div class="col"></div>

      <div class="col-8">
          <div id="chartContainer2" style="height: 370px; width: 100%; flex-align: end"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      </div>
          <div class="col"></div>

</div>

      
<div class="row">
        <div class="col"></div>

      <div class="col-8">
          <div id="chartContainer3" style="height: 370px; width: 100%; flex-align: end"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

      </div>
          <div class="col"></div>

</div>
      
      <div class="row">
        <div class="col"></div>

      <div class="col-8">
          <div id="chartContainer4" style="height: 370px; width: 100%; flex-align: end"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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


<script type="text/javascript">

    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Anxiety"
            },
            axisX: {
                title: "Date"
            },
            axisY: {
                title: "Score"
            },

            data: [
            {
                type: "spline",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart.render();
        
        var chart2 = new CanvasJS.Chart("chartContainer2", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Depression"
            },
            axisX: {
                title: "Date"
            },
            axisY: {
                title: "Score"
            },

            data: [
            {
                type: "spline",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart2.render();
        
        var chart3 = new CanvasJS.Chart("chartContainer3", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Somatic Disorder"
            },
            axisX: {
                title: "Date"
            },
            axisY: {
                title: "Score"
            },

            data: [
            {
                type: "spline",
                dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart3.render();
        
        var chart4 = new CanvasJS.Chart("chartContainer4", {
            theme: "light2",
            animationEnabled: true,
            title: {
                text: "Substance Abuse"
            },
            axisX: {
                title: "Date"
            },
            axisY: {
                title: "Score"
            },

            data: [
            {
                type: "spline",
                dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart4.render();
        
    });
</script>
</head>
<body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                 

