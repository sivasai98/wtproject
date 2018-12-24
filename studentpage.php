<?php
   session_start();
   if (!isset($_SESSION["aname"])){
    header('Location: studentlogin.php');
  }
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {height: 100%; }
html{height: 100%;}


.bg-img {
  
  background-image: url("s.jpg");


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
    width: 120px;
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


#ATTENDANCE {
    top: 100px;
    background-color: #2196F3;
}

#ACADEMICCALENDER {
    top: 160px;
    background-color: #f44336;
}

#LOGOUT {
    top: 240px;
    background-color: #555
}


</style>
</head>
<body>
<div class="bg-img">
<div id="mySidenav" class="sidenav">
  <a href="logout.php" id="HOME">HOME</a>
  <a href="sa.php" id="ATTENDANCE" target="new">ATTENDANCE</a>
  <a href="ac.pdf" target="new" id="ACADEMICCALENDER">ACADEMIC CALENDER</a>
  <a href="logout.php" id="LOGOUT" method="post">LOG OUT</a> 
</div>
</div>
<div style="margin-left:80px;">
  </div>
     
</body>
</html> 

