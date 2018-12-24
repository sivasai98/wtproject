<?php
session_start();
  $us=$_POST['t1'];
  $pwd=$_POST['t2'];
  $con=new mysqli("localhost","root","","siva");
  $sql="select * from addfaculty where username='$us' and password='$pwd' ";
  $result=$con->query($sql);
  $_SESSION["aname"]=$us;
  if($result->num_rows==1)
  {
    header('Location: facultypage.php');
  }
  else
  {
    header('Location: wrongfaculty.php');
  }
  $con->close();
?>

