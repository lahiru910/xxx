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
        <div id="cover" style="background:url(images/2.jpg)">
            
        </div>
        </a>

     
        <div id="lowerborder"></div>
        
    </div>

<div id="container">
</br>
<h1 style="color: red ; text-align: center;">Log in Failed</h1>
</br>

<form method="post" action="logindex.php" class="login">
  

  
    <p>
      <label for="login">User:</label>
      <input type="text" name="user" id="user" value="User Name">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="pass" id="pass" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="forgot.php">Forgot your password?</a></p>
  </form>





</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

      

</body>


</html>