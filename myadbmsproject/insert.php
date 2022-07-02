<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'myadbms');

if(isset($_POST['insertdata'])){

  $collegeid=$_POST['collegeid'];
  $collegename=$_POST['collegename'];
  $vaccinetype=$_POST['vaccinetype'];
  $totalstudents=$_POST['totalstudents'];
  $city=$_POST['city'];
  $date=$_POST['date'];

  // $query1="INSERT INTO vaccine('collegeid','collegename','vaccinetype','totalstudents','city','date') VALUES ('$collegeid','$collegename','$vaccinetype','$totalstudents','$city','$date')";

  $query2="INSERT INTO `vaccine`(`collegeid`, `collegename`, `vaccinetype`, `totalstudents`, `city`, `date`) VALUES ('$collegeid','$collegename','$vaccinetype','$totalstudents','$city','$date')";

  $queryrun=mysqli_query($connection,$query2);

  if($queryrun){
    echo'<script>alert("Data saved");</script>';
    header('Location:index.php');
  }else{
    echo'<script>alert("Data Not saved!")</script>';
  }
}


?>
