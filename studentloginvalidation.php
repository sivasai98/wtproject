<?php
session_start();
  $us=$_POST['t1'];
  $pwd=$_POST['t2'];
  setcookie("un",$us);
  $con=new mysqli("localhost","root","","siva");
  $sql="select * from addstudent where username='$us' and password='$pwd' ";
  $result=$con->query($sql);
  $_SESSION["aname"]=$us;
  if($result->num_rows==1)
  {
    header('Location: studentpage.php');
  }
  else
  {
    header('Location: wrongstudent.php');
  }
  $con->close();
?>

