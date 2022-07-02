<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'myadbms');

if(isset($_POST['deletedata'])){

  $id=$_POST['delete_id'];

  $query4="DELETE FROM vaccine WHERE collegeid=$id";
  $queryrun4=mysqli_query($connection,$query4);


  if($queryrun4){
    echo'<script> alert("Data deleted")</script>';
    header("Location:index.php");
  }else{
    echo'<script>alert("Data not deleteed")</script>';
  }
}
?>