<?php
	$connect=new mysqli("localhost","root",'',"siva");
	$sql="select * from addstudent";
	$ans=$connect->query($sql);
	if($ans->num_rows>=1)
	{
		echo "<form name='f1' align='center' action='storeattendance.php' method='POST'>";
		echo "<table border=2  align='center'>";
		echo "<tr><th>Name</th><th>username</th><th>   status    </th></tr>";
	
            $t=1;
			$u=1;
			$v=1;
			
		while($row=$ans->fetch_assoc())
        {
						
			$fname = $row['firstname'];
			$uname = $row['username'];
			
			echo "<tr><td id=$t>".$fname."</td><td id=$u>".$uname."</td><td id=$v><h5><input type='checkbox' name='present' value='present' >present</h5><h5><input type='checkbox' name='present' value='absent' >absent</h5></td></tr>";
			
			$t=$t+1;
			$u=$u+1;
			$v=$v+1;
			
	    }
		echo "<tr><td><input type='submit' name='submit' value='submit'></td><td><input type='reset' name='reset' value='reset'></td></tr>";
		echo "</table>";
		echo "</form>";
	}
	else
    {
		echo "No records found";
    }
?>

