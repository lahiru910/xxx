<?php
	require_once('auth.php');
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


<div id="content">
<div id="freespace"><h3 style="color:black; font: Tahoma;">Maintenance</h3> </div>

<div id="centerbar">
<h1> Add </h1>
<form action="Addnews.php" method="post">
<input type="submit" name="submit" value="Add News" style="width:150px  ; height: 25px;" /></form>
<form action="Addbus.php" method="post">
<input type="submit" name="submit" value="Add a bus" style="width:150px  ; height: 25px;" /></form>
<form action="Addconductor.php" method="post">
<input type="submit" name="submit" value="Add a Conductor" style="width:150px  ; height: 25px;"/></form>
<form action="Adddriver.php" method="post">
<input type="submit" name="submit" value="Add a Driver" style="width:150px  ; height: 25px;"/></form>

<form action="Addtotime.php" method="post">
<input type="submit" name="submit" value="Add to timetable" style="width:150px  ; height: 25px;"/></form>

<form action="Addall.php" method="post">
<input type="submit" name="submit" value="Add all" style="width:150px  ; height: 25px;"/></form>


</div>

<div id="sidebar">
<h1>Remove</h1>

<form action="remnews.php" method="post">
<input type="submit" name="submit" value="Remove News" style="width:150px  ; height: 25px;" /></form>
<form action="rembus.php" method="post">
<input type="submit" name="submit" value="Remove a bus" style="width:150px  ; height: 25px;" /></form>
<form action="remconductor.php" method="post">
<input type="submit" name="submit" value="Remove a Conductor" style="width:150px  ; height: 25px;"/></form>
<form action="remdriver.php" method="post">
<input type="submit" name="submit" value="Remove a Driver" style="width:150px  ; height: 25px;"/></form>
<form action="remtime.php" method="post">
<input type="submit" name="submit" value="Remove from timetable" style="width:150px  ; height: 25px;"/></form>

<br />
<br />

<form action="login.php"><input type="submit" value="Log out" style="width:150px  ; height: 25px;"/></form>


</div>

<div id="centerbar2">
<h1>View</h1>
<form action="editnews.php" method="post">
<input type="submit" name="submit" value="Edit News" style="width:150px  ; height: 25px;" /></form>
<form action="viewbus.php" method="post">
<input type="submit" name="submit" value="view bus" style="width:150px  ; height: 25px;" /></form>
<form action="viewconductor.php" method="post">
<input type="submit" name="submit" value="view Conductor" style="width:150px  ; height: 25px;"/></form>
<form action="viewdriver.php" method="post">
<input type="submit" name="submit" value="view Driver" style="width:150px  ; height: 25px;"/></form>
<form action="viewtime.php" method="post">
<input type="submit" name="submit" value="view timetable" style="width:150px  ; height: 25px;"/></form>
<form action="viewbook.php" method="post">
<input type="submit" name="submit" value="view booked" style="width:150px  ; height: 25px;"/></form>

</div>


</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>