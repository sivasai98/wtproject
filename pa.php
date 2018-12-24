<html>
<head>
<meta charset="utf-8">
<title>POST Attendance</title>
<style>
	body {font-family: Arial, Helvetica, sans-serif;height: 100%; }
html{height: 100%;}
* {box-sizing: border-box;}

.bg-img {
  
  background-image: url("3.jpg");


  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  
  position: relative;
}
	#stu {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#stu td, #stu th {
    border: 1px solid #ddd;
    padding: 8px;
	text-align: center;
}

#stu tr:nth-child(even){background-color: #f2f2f2;}

#stu tr:hover {background-color: #ddd;}

#stu th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
	text-align: center;
	
}
	
	</style>
</head>

<body class="bg-img">
<marquee> <h3><p> IT-A Students Attendance</p></h3></marquee>
<form name="f1" action="pas.php" method="post">
  <table width="95%" border="1" align="center" id="stu">
  <tbody>
    <tr>
      <th width="373"  align="center" scope="col"><p><strong>Name</strong></p></th>
      <th width="377"  align="center" scope="col">Roll nuber</th>
      <th width="485"  align="center" scope="col">Attendance</th>
    </tr>
    <tr>
      <th scope="row" ><input type="text" name="s1"  value="student1" readonly></th>
      <td> <input type="text" name="r1" value="1201" readonly></td>
      <td>
      	<h5>present<input type="radio" name="attendance1" value="present" > 
      	  absent
      	  <input type="radio" name="attendance1" value="absent"></h5>
      </td>
    </tr>
	
	<tr>
      <th scope="row" ><input type="text" name="s2"  value="student2" readonly></th>
      <td> <input type="text" name="r2" value="1202" readonly></td>
      <td>
      	<h5>present<input type="radio" name="attendance2" value="present" > 
      	  absent
      	  <input type="radio" name="attendance2" value="absent"></h5>
      </td>
    </tr>
	<tr>
      <th scope="row" ><input type="text" name="s3"  value="student3" readonly></th>
      <td> <input type="text" name="r3" value="1203" readonly></td>
      <td>
      	<h5>present<input type="radio" name="attendance3" value="present" > 
      	  absent
      	  <input type="radio" name="attendance3" value="absent"></h5>
      </td>
    </tr>
	
	<tr>
      <th scope="row" ><input type="text" name="s4"  value="student4" readonly></th>
      <td> <input type="text" name="r4" value="1204" readonly></td>
      <td>
      	<h5>present<input type="radio" name="attendance4" value="present" > 
      	  absent
      	  <input type="radio" name="attendance4" value="absent"></h5>
      </td>
    </tr>
	
	<tr>
      <th scope="row" ><input type="text" name="s5"  value="student5" readonly></th>
      <td> <input type="text" name="r5" value="1205" readonly></td>
      <td>
      	<h5>present<input type="radio" name="attendance5" value="present" > 
      	  absent
      	  <input type="radio" name="attendance5" value="absent"></h5>
      </td>
    </tr>
    
	
    
	
	<tr>
	<td align="center">  <input type="submit" name="submit" value="submit"></td>
	
	<td align="center">  <input type="reset" name="reset" value="reset"></td></tr>
  </tbody>

</table>
</form>
</body>
</html>



	
