<?php
session_start();
if (isset($_POST['submit'])) {

  $title = $_POST['submit'];

  include 'dbh.php';
  $im = "SELECT * FROM movies WHERE name = '$title'" ;

  $records = mysqli_query($conn,$im);

  echo"<!DOCTYPE html>";
  echo"<html lang='en' dir='ltr'>";
    echo"<head>";
      echo"<meta charset='utf-8'>";
      echo"<title>".$title."</title>";
      echo"<link rel='stylesheet' href='movie.css'>";
      echo"<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>";
    echo"</head>";
    echo"<body style='background-color: black; color:white;'>";

        echo"<div class='abc' style='padding-left:20px; color:white;'>";
        echo"<div >";
        while($result = mysqli_fetch_assoc($records)){
            $mname = $result['name'];
            $person = $_SESSION['id'];
            $movieid = $result['mid'];
            $current = $result['viewers'];
            $newcount = $current + 1;
            $newsql = "UPDATE movies SET viewers = '$newcount' WHERE name='$mname' ";
            $nsql = "UPDATE user1 SET mid = '$movieid'";
            $updatecount = mysqli_query($conn,$newsql);
            $updatecount = mysqli_query($conn,$nsql);

            $url ="video-uploads/".$result['videopath'];
            

            echo"<br>";
            
            echo"<a href='homepage.php' style='font-size: 20px;color:orange;border:1px solid orange;border-radius:5px;padding:10px;text-decoration:none;'>Back to Home </a>";
            echo"<div style='overflow: hidden;'>";
                echo"<div style='float: right;width : 40%;'>";
                  echo "<img src='uploads/".$result['imgpath']."' height='500' width='450' style='margin-top: 60px;margin-right:20px; margin-bottom:30px; margin-left:80px' />";
                echo"</div>";
                echo"<div style='float: Left;width : 60%;'>";
                echo"<table  border='1' width='900' height='500' style='margin-left:20px; margin-top:60px; padding:20px;'>";
            echo"<colgroup>";
            echo"<col width='20%'>";
            echo"<col width='80%'>";
            echo"</colgroup>";
            echo"<tr>";
            echo"<th><h5 style='display: inline; font-size:30px; padding-left:5px;'>movie name </h5></th>";
            echo"<td><h1 style='display: inline; font-size:30px; padding-left:5px;'>".ucwords($result['name'])."</h1></td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th><h5 style='display: inline; font-size:30px; padding-left:5px;'> genre </h5></th>";
            echo"<td><h4 style='display: inline; padding-left:5px;'>".ucwords($result['genre'])."</h4></td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th><h5 style='display: inline; font-size:30px; padding-left:5px;' >release year </h5></th>";
            echo"<td><h4 style='display: inline; padding-left:5px;'>".$result['rdate']."</h4></td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th><inline><h5 style='display: inline; font-size:30px; padding-left:5px;' >description </inline></th>";
            echo"<td><h4 style='display: inline; padding-left:5px;'>".ucfirst($result['decription'])."</h4></inline></td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th><h5 style='display: inline; font-size:30px; padding-left:5px;' >runtime</h5></th>";
            echo"<td><h4 style='display: inline; padding-left:5px;'>".$result['runtime']." mins </h4></td>";
            echo"</tr>";
            echo"<tr>";
            echo"<th><h5 style='display: inline; font-size:30px; padding-left:5px;' >views </h5></th>";
            echo"<td><h4 style='display: inline; padding-left:5px;'>".$result['viewers']."</h4></td>";
            echo"</tr>";

          //echo "<br><br><h5 style='display: inline; font-size:30px'><br>movie name : </h5><h1 style='display: inline; font-size:30px;'>".ucwords($result['name'])."</h1>";
          //echo"<br><h5 style='display: inline; font-size:30px;' >genre : </h5><h4 style='display: inline;'>".ucwords($result['genre'])."</h4>";
          //echo"<br><h5 style='display: inline; font-size:30px;' >release year : </h5><h4 style='display: inline;'>".$result['rdate']."</h4>";
          //echo"<br><inline><h5 style='display: inline; font-size:30px;' >description : </inline><h4 style='display: inline;'>".ucfirst($result['decription'])."</h4></inline>";
          //echo"<br><h5 style='display: inline; font-size:30px;' >runtime : </h5><h4 style='display: inline;'>".$result['runtime']." mins </h4>";
          //echo"<br><h5 style='display: inline; font-size:30px;' >views : </h5><h4 style='display: inline;'>".$result['viewers']."</h4>";
           echo"</div>";
           echo"</div>";
           echo"</table>";

          echo"<br><br><br>";
          echo"<div style='margin-left:250px' class='embed-responsive embed-responsive-16by9'>";   
          echo '<video controls="controls" class="embed-responsive-item">
          <source src="'.$url.'" type="video/mp4"> 
          Your browser does not support the HTML5 Video element.
          </video>
          '; 
          echo"</div>";

        }
        echo"</div>";
        echo"</div>";

    echo"</body>";


  echo"</html>";


}
?>
