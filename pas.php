<?php

	$f=$_POST['s1'];
	$u=$_POST['r1'];
	$s = $_POST['attendance1'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into storeattendance(firstname,username,status) values('$f','$u','$s');";
	if($con->query($sql)==true)
	{
		echo "inserted<br>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
	
	$f=$_POST['s2'];
	$u=$_POST['r2'];
	$s = $_POST['attendance2'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into storeattendance(firstname,username,status) values('$f','$u','$s');";
	if($con->query($sql)==true)
	{
		echo "inserted<br>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
	
	$f=$_POST['s3'];
	$u=$_POST['r3'];
	$s = $_POST['attendance3'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into storeattendance(firstname,username,status) values('$f','$u','$s');";
	if($con->query($sql)==true)
	{
		echo "inserted<br>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
	
	$f=$_POST['s4'];
	$u=$_POST['r4'];
	$s = $_POST['attendance4'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into storeattendance(firstname,username,status) values('$f','$u','$s');";
	if($con->query($sql)==true)
	{
		echo "inserted<br>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
	
	$f=$_POST['s5'];
	$u=$_POST['r5'];
	$s = $_POST['attendance5'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into storeattendance(firstname,username,status) values('$f','$u','$s');";
	if($con->query($sql)==true)
	{
		echo "inserted<br>";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();

?>