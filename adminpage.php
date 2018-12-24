<?php
   session_start();
   if (!isset($_SESSION["aname"])){
    header('Location: adminlogin.php');
  }
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {height: 100%; }
html{height: 100%;}


.bg-img {
  
  background-image: url("a.jpg");


  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  position: relative;
}


#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#HOME {
    top: 40px;
    background-color: #800000;
}

#ADDSTUDENTS {
    top: 100px;
    background-color: #4CAF50;
}

#ADDFACULTY {
    top: 180px;
    background-color: #2196F3;
}

#STUDENTSLIST {
    top: 260px;
    background-color: #f44336;
}

#FACULTYLIST {
    top: 340px;
    background-color: #E67E22;
}

#LOGOUT {
    top: 420px;
    background-color: #555
}



</style>
</head>
<body>
<div style="margin-left:80px;">
  
 
</div>
<div class="bg-img">
<h2>welcome admin</h2>
<div id="mySidenav" class="sidenav">
  <a href="logout.php" id="HOME">HOME</a>
  <a href="studentregistrationform.php" id="ADDSTUDENTS" target="new">ADD STUDENTS</a>
  <a href="facultyregistrationform.php" id="ADDFACULTY" target="new">ADD FACULTY</a>
  <a href="studentslist.php" target="new" id="STUDENTSLIST">STUDENTS LIST</a>
  <a href="facultylist.php" target="new" id="FACULTYLIST">FACULTY LIST</a>
  <a href="logout.php" id="LOGOUT" method="post">LOG OUT</a> 
  
</div>
</div>

</div>
     
</body>
</html> 

