<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;height: 100%; }
html{height: 100%;}
* {box-sizing: border-box;}

.bg-img {
  
  background-image: url("m.jpg");

  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  
  position: relative;
}


.container {
  position: absolute;
  margin: 20px;
  width: auto;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}


</style>
</head>
<body>	

<div class="bg-img">
<h1><p align="center"> SVEC STUDENT'S ATTENDANCE</p></h1>
  <div class="container">
  
    <div class="topnav">
      <a href="adminlogin.php" class="button" target="_parent">ADMIN LOGIN</a>
      <a href="facultylogin.php" class="button" target="_parent">FACULTY LOGIN</a>
      <a href="studentlogin.php" class="button" target="_parent">STUDENT LOGIN</a>
      <a href="ac.pdf" target="_parent">ACADEMIC CALENDER</a>
    </div>
  </div>
</div>

</body>
</html>
