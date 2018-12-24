<?php
    
	$connect=new mysqli("localhost","root",'',"siva");
	$sql="select * from addfaculty";
	$ans=$connect->query($sql);
	if($ans->num_rows>=1)
	{
		echo "<table border=2>";
		echo "<tr><th>firstname</th><th>lastname</th><th>username</th><th>password</th><th>confirmpassword</th><th>postalcode</th><th>phonenumber</th><th>mailid</th></tr>";
		while($row=$ans->fetch_assoc())
        {
			echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['username']."</td><td>".$row['password']."</td><td>".$row['confirmpassword']."</td><td>".$row['postalcode']."</td><td>".$row['phonenumber']."</td><td>".$row['mailid']."</td></tr>";
	    }
		echo "</table>";
	}
	else
    {
		echo "No records found";
    }
?>