<?php
 require_once('auth.php');
    require_once('../includes/connection.php');
?>

<!DOCTYPE html>
<head>
<title>Admin Panel</title><link rel="shortcut icon" href="admin.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex.css">

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

<div id="content">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>

<div id="centerpanel1">


<h1>Add a Conductor</h1>
<form action="createcon.php" method="post">
Conductor ID              :<input type="text" name="condid" value="" /></br>
Conductor Name :<input type="text" name="condname" value="" /></br>
contact no :<input type="text" name="condmob" value="" /></br>
BUS ID         :<input type="text" name="busid" value="" />
<br />
<input type="submit" name="submit"  />
</form>

</div>


</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>