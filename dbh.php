<?php
  $conn = mysqli_connect("localhost","root","","movie");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
