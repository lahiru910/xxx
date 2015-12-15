<?php
	require_once('auth.php');
?><!DOCTYPE html>
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
<div id="side"></div>
<div id="contentv">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>
<?php

include "includes/connection.php"; 

$result2 = mysqli_query( $conn,"select * from tbl_time order by route_id asc ");


    echo"<table align=center>";
    echo "<th>Time</th>";
    echo "<th>Route ID</th>";
    echo "<th>Destination</th>";
    echo "<th>Bus ID</th>";
    while($row2=mysqli_fetch_array($result2))
        {
        echo"<tr><td>";
        echo $row2["time"];
        echo "</td><td>";
        echo $row2["route_id"];
        
        echo "</td><td>";
        echo $row2["destination"];
        echo "</td><td>";
        echo $row2["bus_id"];
        echo"</td></tr>";
        } 
    echo"</table>";
    
?>
</div>        
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
</div>
</div>
</body>
</html>