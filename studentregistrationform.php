<html>
<body>
<form name="f1" align="center" action="studentregistrationform.php" method="post">
<table width="50%" align="center">
<tr>
<td>
<h4>FIRST NAME :</h4>
</td>
<td>
<input type="text" name = "firstname" size="30">
</td>
</tr>
<tr>
<td>
<h4>LAST NAME :</h4>
</td>
<td>
<input type="text" name = "lastname" size="30">
</td>
</tr>

<tr>
<td>
<h4>User Name:</h4>
</td>
<td>
<input type="text" name="username" size="30" maxlength="10">
</td>
</tr>

<tr>
<td>
<h4>password:</h4>
</td>
<td>
<input type="password" name="password" size="30">
</td>
</tr>

<tr>
<td>
<h4>confirm password:</h4>
</td>
<td>
<input type="password" name="confirmpassword" size="30">
</td>
</tr>



<tr>
<td>
<h4>postal code:</h4>
</td>
<td>
<input type="number" name="postalcode" size="30" maxlength="6">
</td>
</tr>

<tr>
<td>
<h4>phone number:</h4>
</td>
<td>
<input type="number" name="phonenumber" size="30" maxlength="10">
</td>
</tr>

<tr>
<td>
<h4>mail id:</h4>
</td>
<td>
<input type="email" name="mailid" size="30" >
</td>
</tr>

<tr>
<td>
<input type="submit" value="submit" name="submit">
<input type="reset" value="reset" name="reset">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$postalcode = $_POST['postalcode'];
	$phonenumber = $_POST['phonenumber'];
	$mailid = $_POST['mailid'];
	$con=new mysqli("localhost","root","","siva");
	$sql="insert into addstudent(firstname,lastname,username,password,confirmpassword,postalcode,phonenumber,mailid) values('$firstname','$lastname','$username','$password','$confirmpassword','$postalcode','$phonenumber','$mailid');";
	if($con->query($sql)==true)
	{
		echo "inserted";
	}
	else
	{
		echo "Error:".$sql."<br>".$con->error;
	}
	$con->close();
}
?>
	









