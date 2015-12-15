<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>
<head>
<title>Admin Panel</title><link rel="shortcut icon" href="admin.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/login.css">

</head>

<body style="background-color: black;">
<div id="wrapper">
  <div id="header">
        <a href="index.php">
        <div id="cover" style="background:url(images/2.jpg)"></div>
        </a>
        <div id="lowerborder"></div>
        
  </div>

  <div id="container">
</br>
<h2 style="color: white; text-align: center;">Contact DATABASE ADMINISTRATOR</h2>
<h2 style="color: white; text-align: center;"><a href="mailto:lahiru910@gmail.com" >lahiru910@gmail.com</a></h2>

<h2 style="color: white; text-align: center;">+94714757137</h2>
</br>
</br>

  </div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>