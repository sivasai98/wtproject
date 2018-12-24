<?php
    $uname=$_COOKIE['un'];
	$connect=new mysqli("localhost","root",'',"siva");
	$sql="select firstname,username,count(status),count(firstname) from storeattendance where username='$uname' and status='present'";
	$ans=$connect->query($sql);
	if($ans->num_rows>=1)
	{
		echo "<table border=2>";
		echo "<tr><th>firstname</th><th>username</th><th>attendance</th><th>no.of classes conducted</th></tr>";
		while($row=$ans->fetch_assoc())
        {
			echo "<tr><td>".$row['firstname']."</td><td>".$row['username']."</td><td>".$row["count(status)"]."</td><td>".$row["count(firstname)"]."</td></tr>";
	    }
		echo "</table>";
	}
	else
    {
		echo "No records found";
    }
?>