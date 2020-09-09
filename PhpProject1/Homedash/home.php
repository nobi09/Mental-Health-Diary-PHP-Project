<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';
error_reporting(E_ERROR | E_PARSE);// disables the dispalying of errors

//$date= date("d/m/Y");
//echo 'sessions name'. $name;
//echo 'today date'. $date;
 if (isset($_SESSION['name']))
      echo $_SESSION['name'];
      echo "<br>".$_SESSION['username'];
 echo "<br>".$_SESSION['firstname'];
 $name=$_SESSION['username'];

 ?>

<?php
    $dataPoints = array();
    
    $query1="SELECT score FROM questionnaire WHERE symptom='anxiety' && user_username='$name' ";
    $res1=  mysqli_query($db, $query1);
    
    
    while ($row = mysqli_fetch_assoc($res1)) {		
		array_push($dataPoints, $row["score"]);
	}
    
    $a = array_filter($dataPoints);
    $average = array_sum($a)/count($a);
   // echo "Average score of anxiety= ".$average;

        
        
        
 $dataPoints2 = array();
    
    $query2="SELECT score FROM questionnaire WHERE symptom='depression' && user_username='$name' ORDER BY time ";
    $res2=  mysqli_query($db, $query2);
    
    
    while ($row = mysqli_fetch_assoc($res2)) {		
		array_push($dataPoints2,$row["score"]);
	}
        
        
    $a2 = array_filter($dataPoints2);
    $average2 = array_sum($a2)/count($a2);
   // echo "Average score of depression= ".$average. "\n";
    

$dataPoints3 = array();
    
    $query3="SELECT score,datetaken FROM questionnaire WHERE symptom='sdisorder' && user_username='$name' ORDER BY time ";
    $res3=  mysqli_query($db, $query3);
    
    
    while ($row = mysqli_fetch_assoc($res3)) {		
		array_push($dataPoints3, $row["score"]);
	}
    

        
    $a3 = array_filter($dataPoints3);
    $average3 = array_sum($a3)/count($a3);
    //echo "Average score of somatic disorders= ".$average. "\n";
    
    
$dataPoints4 = array();
    
    $query4="SELECT score,datetaken FROM questionnaire WHERE symptom='subabuse' && user_username='$name' ORDER BY time ";
    $res4=  mysqli_query($db, $query4);
    
    
    while ($row = mysqli_fetch_assoc($res4)) {		
		array_push($dataPoints4, $row["score"]);
	}
    
    $a4 = array_filter($dataPoints4);
    $average4 = array_sum($a4)/count($a4);
    //echo "Average score of substance abuse= ".$average4. "\n";
?>

<?php
 $last1 = array();
    
    $query5="SELECT score,datetaken FROM questionnaire WHERE symptom='anxiety' && user_username='$name' ORDER BY time DESC LIMIT 2";
    $res5=  mysqli_query($db, $query5);
    
    
    while ($row = mysqli_fetch_assoc($res5)) {		
		array_push($last1, $row["score"]);
	}
    
    $a5 = array_filter($last1);
    $average5 = array_sum($a5)/count($a5);
    //echo "Average score of substance abuse= ".$average4. "\n";
    
    
    
    
    
     $last2 = array();
    
    $query6="SELECT score,datetaken FROM questionnaire WHERE symptom='depression' && user_username='$name' ORDER BY time DESC LIMIT 2";
    $res6=  mysqli_query($db, $query6);
    
    
    while ($row = mysqli_fetch_assoc($res6)) {		
		array_push($last2, $row["score"]);
	}
    
    $a6 = array_filter($last2);
    $average6 = array_sum($a6)/count($a6);
    //echo "Average score of substance abuse= ".$average4. "\n";

    
    
     $last3 = array();
    
    $query7="SELECT score,datetaken FROM questionnaire WHERE symptom='sdisorder' && user_username='$name' ORDER BY time DESC LIMIT 2";
    $res7=  mysqli_query($db, $query7);
    
    
    while ($row = mysqli_fetch_assoc($res7)) {		
		array_push($last3, $row["score"]);
	}
    
    $a7 = array_filter($last3);
    $average7 = array_sum($a7)/count($a7);
    //echo "Average score of substance abuse= ".$average4. "\n";
    
    
    
    
     $last4 = array();
    
    $query8="SELECT score,datetaken FROM questionnaire WHERE symptom='subabuse' && user_username='$name' ORDER BY time DESC LIMIT 2";
    $res8=  mysqli_query($db, $query8);
    
    
    while ($row = mysqli_fetch_assoc($res8)) {		
		array_push($last4, $row["score"]);
	}
    
    $a8 = array_filter($last4);
    $average8 = array_sum($a8)/count($a8);
    //echo "Average score of substance abuse= ".$average4. "\n";
?>

  <!-- sidebar-wrapper  -->

  <main class="page-content" style="background-color: #F9F7F6;">
    <div class="container-fluid" style=" text-align: center;">
        <img id="diary-icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTVCkbWpJfDlBWhZ6KBqkdxjHraCmvrBeyE4RszR9Y37HDqIM0i&usqp=CAU" >
        <h1>Home</h1>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
            <img id="diary-icon" style="height: 80px"src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStHHYb6iWNSyl0BikLH97PUYjRijz9GnPdeOx_HWqxYHCkgJHc&usqp=CAU" >

            <h3>News Feed</h3>
            <?php


$xml=("https://news.google.com/rss/topics/CAAqIQgKIhtDQkFTRGdvSUwyMHZNR3QwTlRFU0FtVnVLQUFQAQ/sections/CAQiR0NCQVNMd29JTDIwdk1HdDBOVEVTQldWdUxVZENJZzhJQkJvTENna3ZiUzh3TTNnMk9XY3FDeElKTDIwdk1ETjROamxuS0FBKikIAColCAoiH0NCQVNFUW9JTDIwdk1HdDBOVEVTQldWdUxVZENLQUFQAVAB?hl={lang}");


$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p><a href='" . $channel_link
  . "'>" . $channel_title . "</a>");
echo("<br>");
echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=5; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
  echo ("<p><a href='" . $item_link
  . "'>" . $item_title . "</a>");
  echo ("<br>");
  echo ($item_desc . "</p>");
}
?>
            
        </div>
        <div class="form-group col-md-12">
          
        </div>
      </div>
      
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
            
            <img id="diary-icon" src="https://p.kindpng.com/picc/s/255-2559408_transparent-sales-icon-png-transparent-background-trend-icon.png" style="height: 100px; " >
      
            
       <table class="table table-hover" style="text-align: left">
    <thead class="thead-light">
      <tr>
          <th colspan="5"><h3 style="padding: auto; text-align: center">My trends</h3></th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
          <th>Mental Illness</th>
          <th style="text-align: center">Total Average</th>
          <th style="text-align: center">Average of last 2 assessments</th>
          <th style="text-align: center">Trend</th>
          <th>Status</th>
          
        
      
    </tr>
   
    
    <tr>
        <td>Anxiety</td>
        <td style="text-align: center; color: "><?php echo $average;?></td>
        <td style="text-align: center"><?php echo $average5;?></td>
        <td style="text-align: center"><?php
        
        switch (true) {
    case $average5 < $average:
           echo " <img id='diary-icon' src='https://www.kindpng.com/picc/m/10-101602_down-green-picture-arrow-png-green-down-arrow.png' style='height: 20px;' >";
        break;

    case $average5 > $average:
       echo "<img id='diary-icon' src='data:image/png;base64,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' style='height: 20px; ' >";
        break;

    default:
        echo "<img id='diary-icon' src='https://static.thenounproject.com/png/645172-200.png' style='height: 20px; ' >";  
        break;
}
        
         
          ?>  
            </td>  
        <td><?php
        
        switch (true) {
    case $average <= 4:
        echo "<font color='green'>Low</p>";
        break;

    case $average >4 && $average <=8:
        echo "<font color='gold'>Mild</p>";
        break;
    case $average >8 && $average <=12:
        echo "<font color='orange'>Moderate</p>";
        break;
    case $average >12 && $average <=16:
        echo "<font color='red'>Severe</p>";
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
        
          
        
      
    </tr>

    
     <tr>
        <td>Depression</td>
        <td style="text-align: center"><?php echo $average2;?></td>
        <td style="text-align: center"><?php echo $average6;?></td>
        <td style="text-align: center"><?php
         switch (true) {
    case $average6 < $average2:
           echo " <img id='diary-icon' src='https://www.kindpng.com/picc/m/10-101602_down-green-picture-arrow-png-green-down-arrow.png' style='height: 20px;' >";
        break;

    case $average6 > $average2:
       echo "<img id='diary-icon' src='data:image/png;base64,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' style='height: 20px; ' >";
        break;

    default:
        echo "<img id='diary-icon' src='https://static.thenounproject.com/png/645172-200.png' style='height: 20px; ' >";  
        break;
}
         
          ?>  
            </td>  
        <td><?php
        
        switch (true) {
    case $average2 <= 4:
        echo "<font color='green'>Low</p>";
        break;

    case $average2 >4 && $average2 <=8:
        echo "<font color='gold'>Mild</p>";
        break;
    case $average2 >8 && $average2 <=12:
        echo "<font color='orange'>Moderate</p>";
        break;
    case $average2 >12 && $average2 <=16:
        echo "<font color='red'>Severe</p>";
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
        
          
        
      
    </tr>
    
    
    
     <tr>
        <td>Somatic Disorder</td>
        <td style="text-align: center"><?php echo $average3;?></td>
        <td style="text-align: center"><?php echo $average7;?></td>
        <td style="text-align: center"><?php
        
         
        switch (true) {
    case $average7 < $average3:
           echo " <img id='diary-icon' src='https://www.kindpng.com/picc/m/10-101602_down-green-picture-arrow-png-green-down-arrow.png' style='height: 20px;' >";
        break;

    case $average7 > $average3:
        echo "<img id='diary-icon' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX/////AAD/kZH/+vr/+fn/pKT/pqb/qKj/oqL/5OT/xsb/qqr/nZ3/v7//rq7/paX/6en/l5f/UVH/zs7/Njb/urr/tLT/c3P/mZn/2Nj/S0v/09P/Rkb/y8v/KCj/HR3/fn7/8PD/a2v/Y2P/W1v/IyP/ERH/hIT/b2//XV3/39//QED/Ojr/Jyf/Ly//iYnilW/dAAAGSklEQVR4nN2d2ULbMBBFmSZpWAIN+1rCEihLC///d8WYJU5sa5uZO9J5LCDN7fEIySTx2poyJ9oTarNF1+gShCG6Qpcgy4iocIlvAekYXYQklUKiKboMQd4DlixxvU5YsMSPgPSALkSKyWfCYiV+BaQbdCkyfCsk2kAXI8JCwDIlLiosU2IjIN2iy+HnpJmwQIlLAcuTuKyQ6AldEjMrAUuTuKqwNIktAekRXRQnu20JS5I4aA1Ic3RdfLQrLEhih8KCJHYpJDpFl8ZEZ0DaQ5fGQ7fCQiR2dmExEvsUFiGxV2EREn/0J8xfokMh0Rm6wlRcConO0SWm4VSYvUS3wswlDj0C5i3RR2HWEj26sOICXWc8fgqJ9tGFxuLVhVlL9FWYrURvhdlK9FeYqUTPhbTmGV1tDCEKs5QY0IWZSgxTmKHEQIUZSgxVSPQbXXIYQQtpzV90zWGEK8xMYnAXZicxRmFWEqMUZiUxTiHRJrpwXyIW0poDdOW+xCrMRmJkF2YkMV5hJhITFGYiMUVhFhKjF9KaF3T9btIUEm2jA7hI6sIsJKYqNC8xsQszkJiu0LhEBoVEl+gUfXAoNC0xeSGtMSyRR6FhiSxdWGFWIpdCsxLZFBLdobO0w6fQqESmhbTmHzpNG5wKTUpk7MIKg53Iq5DoEB1oGWaFRDN0omW4FZqTyLqQ1hjrRH6FxiSyd2GFKYkSCk1JFFFoajmVUWhIosBCWmNGopRCMxKFurDCiEQ5hUYkCiokukenq5BUSHSEjie4kNYY6ERZhQYkinZhBVyitEK4RHGF8OVUXiFYooJCsEQNhVCJKgqhEnUUAiUqKQRK1FIIk6imECZRTyFIoqJCkERNhUQ7+gFVFb6hn1BXIUCitkL9TtRWqC5RXSFpd6K+QmWJCIW6EhEKVSViFGpK7P8YPTnUJKIU6klEKdSTCAuoJRGnkGhLIyCuCys0EiIVqnQiVqGGRKxCjU4EB5SXiFYoLhHdhRWyCdueU6GNqEQLCmUlWlAoKxGd7QO5gDYUEo3FEqKTfSEVcOKeWgmpTkTnWkAmoB2FUp2ITtVAIqCVhbTmp0BCdKYl+ANa6sIK/k5EJ1qBO6A1hfydiM7TAm9AewqJfrEmRKdphTOgRYW8nYjO0gFfQJsKOTsRnaQTroBWFRKNmBKic/TAE3AdHaMHnk5Ep+iFI6BlhTydiM7gID2gbYUcEtEJnKQGHKEDOEldTtH1e5AW0HoXVqR1Irp6L0pXmCYRXbsn8QHtL6Q18RLRlXtTusJ4iei6AyhdYaxEdNVBxAT8iS46iBiJ6JoDKV1hjEShQl4mM6GRQwP+EqnisXpS5eaeyNjrBhS+Tj8G37iSGD4s4Jh9/lnjVfZDgVNLWCdyzz5fffLf9gX3JECFVxutszwd804TIpFz3vvRoHOeIe8L4yEKz1wP4To84JvMfzllm/LqyWO281u2+XwDbjHNNxl6TnjN9b5i305kmew57LP/dy5ZZvWbjEPhw2lQvor9OcO8fhLT59m9Ds5XMf2TPrXPPKkKD1I+N3acui/3WU7TZrg9T8hXkbovd8+wkzL8j7jLs0navtzdifFjX7K9g3UwuY8vwzV4tML5Ple+d+L35S6JkcP+mTrGDefpIbKW/mGjFM4kXji/Fr0v75cYcf3vST7gNmpf3jdguMKOox8fEfvyvksqUOH9evfRj4/r19CI3WMdBY1zofdcrcB9ebfEEIXHPkc/PsL25V2jBCg88T368RGyL++S6KvwL+iZDAP/fXn7AJ4Kb8KPfnxsnvkV2f4mU6//IJa9dQqe+/K2H/VQeAB/UEHFcN2jndre2ub8seSjHx/bzxESXQpf0ZdnE+f98lWJvV3Id/TjY+h42+7y9x/2fC/z0Y+P3n358nLarVDg6MfH6Y2vxC6FM5UPSEuh+355s/R2hXurf/WzyFHHvnzxe1oVmr48m5w/uiTerV6eY42jHx/TtkPk95dXFIremZBiZ6XVvn/HLV3H4ncmpPi9fL/88wvbjctT5c6EFEuHyE+JCwqdf5Q2z2C8uMGu/+1bYbaXZ5OFP+7Uh6GXj8uz5zUTufF1iHz/NP7NfFfPHgaj+y+JB+Vcnk3e73jM3lZYusvsl7s/T28X6/bartWjEQuDrfl/4nRzvYB5J80AAAAASUVORK5CYII=' style='height: 20px; ' >";
        break;

    default:
        echo "<img id='diary-icon' src='https://static.thenounproject.com/png/645172-200.png' style='height: 20px; ' >";  
        break;
}
        
         
        
          ?>  
            </td>  
<td><?php
        
        switch (true) {
    case $average3 <= 4:
        echo "<font color='green'>Low</p>";
        break;

    case $average3 >4 && $average3 <=8:
        echo "<font color='gold'>Mild</p>";
        break;
    case $average3 >8 && $average3 <=12:
        echo "<font color='orange'>Moderate</p>";
        break;
    case $average3 >12 && $average3 <=16:
        echo "<font color='red'>Severe</p>";
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>        
          
        
      
    </tr>
    
    <tr>
        <td>Substance Abuse</td>
        <td style="text-align: center"><?php echo $average4;?></td>
        <td style="text-align: center"><?php echo $average8;?></td>
        <td style="text-align: center"><?php
        
        
        switch (true) {
    case $average8 < $average4:
           echo " <img id='diary-icon' src='https://www.kindpng.com/picc/m/10-101602_down-green-picture-arrow-png-green-down-arrow.png' style='height: 20px;' >";
        break;

    case $average8 > $average4:
        echo "<img id='diary-icon' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX/////AAD/kZH/+vr/+fn/pKT/pqb/qKj/oqL/5OT/xsb/qqr/nZ3/v7//rq7/paX/6en/l5f/UVH/zs7/Njb/urr/tLT/c3P/mZn/2Nj/S0v/09P/Rkb/y8v/KCj/HR3/fn7/8PD/a2v/Y2P/W1v/IyP/ERH/hIT/b2//XV3/39//QED/Ojr/Jyf/Ly//iYnilW/dAAAGSklEQVR4nN2d2ULbMBBFmSZpWAIN+1rCEihLC///d8WYJU5sa5uZO9J5LCDN7fEIySTx2poyJ9oTarNF1+gShCG6Qpcgy4iocIlvAekYXYQklUKiKboMQd4DlixxvU5YsMSPgPSALkSKyWfCYiV+BaQbdCkyfCsk2kAXI8JCwDIlLiosU2IjIN2iy+HnpJmwQIlLAcuTuKyQ6AldEjMrAUuTuKqwNIktAekRXRQnu20JS5I4aA1Ic3RdfLQrLEhih8KCJHYpJDpFl8ZEZ0DaQ5fGQ7fCQiR2dmExEvsUFiGxV2EREn/0J8xfokMh0Rm6wlRcConO0SWm4VSYvUS3wswlDj0C5i3RR2HWEj26sOICXWc8fgqJ9tGFxuLVhVlL9FWYrURvhdlK9FeYqUTPhbTmGV1tDCEKs5QY0IWZSgxTmKHEQIUZSgxVSPQbXXIYQQtpzV90zWGEK8xMYnAXZicxRmFWEqMUZiUxTiHRJrpwXyIW0poDdOW+xCrMRmJkF2YkMV5hJhITFGYiMUVhFhKjF9KaF3T9btIUEm2jA7hI6sIsJKYqNC8xsQszkJiu0LhEBoVEl+gUfXAoNC0xeSGtMSyRR6FhiSxdWGFWIpdCsxLZFBLdobO0w6fQqESmhbTmHzpNG5wKTUpk7MIKg53Iq5DoEB1oGWaFRDN0omW4FZqTyLqQ1hjrRH6FxiSyd2GFKYkSCk1JFFFoajmVUWhIosBCWmNGopRCMxKFurDCiEQ5hUYkCiokukenq5BUSHSEjie4kNYY6ERZhQYkinZhBVyitEK4RHGF8OVUXiFYooJCsEQNhVCJKgqhEnUUAiUqKQRK1FIIk6imECZRTyFIoqJCkERNhUQ7+gFVFb6hn1BXIUCitkL9TtRWqC5RXSFpd6K+QmWJCIW6EhEKVSViFGpK7P8YPTnUJKIU6klEKdSTCAuoJRGnkGhLIyCuCys0EiIVqnQiVqGGRKxCjU4EB5SXiFYoLhHdhRWyCdueU6GNqEQLCmUlWlAoKxGd7QO5gDYUEo3FEqKTfSEVcOKeWgmpTkTnWkAmoB2FUp2ITtVAIqCVhbTmp0BCdKYl+ANa6sIK/k5EJ1qBO6A1hfydiM7TAm9AewqJfrEmRKdphTOgRYW8nYjO0gFfQJsKOTsRnaQTroBWFRKNmBKic/TAE3AdHaMHnk5Ep+iFI6BlhTydiM7gID2gbYUcEtEJnKQGHKEDOEldTtH1e5AW0HoXVqR1Irp6L0pXmCYRXbsn8QHtL6Q18RLRlXtTusJ4iei6AyhdYaxEdNVBxAT8iS46iBiJ6JoDKV1hjEShQl4mM6GRQwP+EqnisXpS5eaeyNjrBhS+Tj8G37iSGD4s4Jh9/lnjVfZDgVNLWCdyzz5fffLf9gX3JECFVxutszwd804TIpFz3vvRoHOeIe8L4yEKz1wP4To84JvMfzllm/LqyWO281u2+XwDbjHNNxl6TnjN9b5i305kmew57LP/dy5ZZvWbjEPhw2lQvor9OcO8fhLT59m9Ds5XMf2TPrXPPKkKD1I+N3acui/3WU7TZrg9T8hXkbovd8+wkzL8j7jLs0navtzdifFjX7K9g3UwuY8vwzV4tML5Ple+d+L35S6JkcP+mTrGDefpIbKW/mGjFM4kXji/Fr0v75cYcf3vST7gNmpf3jdguMKOox8fEfvyvksqUOH9evfRj4/r19CI3WMdBY1zofdcrcB9ebfEEIXHPkc/PsL25V2jBCg88T368RGyL++S6KvwL+iZDAP/fXn7AJ4Kb8KPfnxsnvkV2f4mU6//IJa9dQqe+/K2H/VQeAB/UEHFcN2jndre2ub8seSjHx/bzxESXQpf0ZdnE+f98lWJvV3Id/TjY+h42+7y9x/2fC/z0Y+P3n358nLarVDg6MfH6Y2vxC6FM5UPSEuh+355s/R2hXurf/WzyFHHvnzxe1oVmr48m5w/uiTerV6eY42jHx/TtkPk95dXFIremZBiZ6XVvn/HLV3H4ncmpPi9fL/88wvbjctT5c6EFEuHyE+JCwqdf5Q2z2C8uMGu/+1bYbaXZ5OFP+7Uh6GXj8uz5zUTufF1iHz/NP7NfFfPHgaj+y+JB+Vcnk3e73jM3lZYusvsl7s/T28X6/bartWjEQuDrfl/4nRzvYB5J80AAAAASUVORK5CYII=' style='height: 20px; ' >";
        break;

    default:
        echo "<img id='diary-icon' src='https://static.thenounproject.com/png/645172-200.png' style='height: 20px; ' >";  
        break;
}
        
           
          ?>  
            </td>  
<td><?php
        
        switch (true) {
    case $average4 <= 4:
        echo "<font color='green'>Low</p>";
        break;

    case $average4 >4 && $average4 <=8:
        echo "<font color='gold'>Mild</p>";
        break;
    case $average4 >8 && $average4 <=12:
        echo "<font color='orange'>Moderate</p>";
        break;
    case $average4 >12 && $average4 <=16:
        echo "<font color='red'>Severe</p>";
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>        
          
        
      
    </tr>
    
    </tbody>
    
  </table>

        </div>          
        </div>
      
      
      <hr>
      <?php
    $query8="SELECT score,datetaken FROM questionnaire WHERE symptom='subabuse' && user_username='$name' ORDER BY time DESC LIMIT 2";
    $res8=  mysqli_query($db, $query8);
      ?>
      
      
      
       <div class="row">
        <div class="form-group col-md-12">
            <img id="diary-icon" style="height: 100px"src="data:image/png;base64,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" >

           
            <table class="table table-hover" style="text-align: left">
    <thead class="thead-light">
      <tr>
          <th colspan="5"><h3 style="padding: auto; text-align: center">My Guidelines</h3></th>
        
      </tr>
      
    </thead>
    <tbody>
        <tr>
            <th>Mental illness</th>
            <th>My Condition</th>
            <th>What to do?</th>
            
        </tr>
        
        <tr>
            <td>Anxiety</td>
            <td><?php
                          include 'guidelines.php';
        
        switch (true) {
    case $average <= 4:
        echo "<p>Low</p>";
        break;

    case $average >4 && $average <=8:
        echo $mildanx;
        break;
    case $average >8 && $average <=12:
        echo $moderateanx;
        break;
    case $average >12 && $average <=16:
        echo $severeanx;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
            <td><?php
    include 'guidelines.php';
        
        switch (true) {
    case $average <= 4:
        echo "<p>LOW?! Keep doing what you're doing!</p>";
        break;

    case $average >4 && $average <=8:
        echo $mildanx2;
        break;
    case $average >8 && $average <=12:
        echo $moderateanx2;
        break;
    case $average >12 && $average <=16:
        echo $severeanx2;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
            
        </tr>
         <tr>
            <td>Depression</td>
            <td><?php
                          include 'guidelines.php';
        
        switch (true) {
    case $average2 <= 4:
        echo "<p>Low</p>";
        break;

    case $average2 >4 && $average2 <=8:
        echo $milddep;
        break;
    case $average2 >8 && $average2 <=12:
        echo $moderatedep;
        break;
    case $average2 >12 && $average2 <=16:
        echo $severedep;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
        <td><?php
    include 'guidelines.php';
        
        switch (true) {
    case $average2 <= 4:
        echo "<p>LOW?! Keep doing what you're doing!</p>";
        break;

    case $average2 >4 && $average2 <=8:
        echo $milddep2;
        break;
    case $average2 >8 && $average2 <=12:
        echo $moderatedep2;
        break;
    case $average2 >12 && $average2 <=16:
        echo $severedep2;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>

            
        </tr>
         <tr>
            <td>Somatic disorder</td>
            <td><?php
                          include 'guidelines.php';
        
        switch (true) {
    case $average3 <= 4:
        echo "<p>Low</p>";
        break;

    case $average3 >4 && $average3 <=8:
        echo $mildsd;
        break;
    case $average3 >8 && $average3 <=12:
        echo $moderatesd;
        break;
    case $average3 >12 && $average3 <=16:
        echo $severesd;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
        <td><?php
    include 'guidelines.php';
        
        switch (true) {
    case $average3 <= 4:
        echo "<p>LOW?! Keep doing what you're doing!</p>";
        break;

    case $average3 >4 && $average3 <=8:
        echo $mildsd2;
        break;
    case $average3 >8 && $average3 <=12:
        echo $severesd2;
        break;
    case $average3 >12 && $average3 <=16:
        echo $severesd2;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>

            
        </tr>
         <tr>
            <td>Substance Abuse</td>
            <td><?php
                          include 'guidelines.php';
        
        switch (true) {
    case $average4 <= 4:
        echo "<p>Low</p>";
        break;

    case $average4 >4 && $average4 <=8:
        echo $mildsa;
        break;
    case $average4 >8 && $average4 <=12:
        echo $moderatesa;
        break;
    case $average4 >12 && $average4 <=16:
        echo $severesa;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>
        <td><?php
    include 'guidelines.php';
        
        switch (true) {
    case $average4 <= 4:
        echo "<p>LOW?! Keep doing what you're doing!</p>";
        break;

    case $average4 >4 && $average4 <=8:
        echo $mildsa2;
        break;
    case $average4 >8 && $average4 <=12:
        echo $moderatesa2;
        break;
    case $average4 >12 && $average4 <=16:
        echo $severesa2;
        break;

    default:
           echo "N/A";
        break;
}
        
         
          ?>  </td>

            
        </tr>
        
    </tbody>
            </table>
        </div>
       </div>
            
        </div>
        <div class="form-group col-md-12">
          
        </div>
      </div>
            
      </div>
    </div>

  </main>
  <!-- page-content" -->

  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->

<script>
function showRSS(str) {
  if (str.length==0) {
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="../JS/dashscript.js"></script>

</body>
</html>
