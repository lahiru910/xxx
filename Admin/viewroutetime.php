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
<div id="freespace">ADMIN Panel </div>
<?php
$routeid = $_POST["routeid"];
include "includes/connection.php";

$result = mysqli_query($conn,"select * from tbl_time where route_id='$routeid'");

    echo"<table align=center>";
    echo "<th>Time</th>";
    echo "<th>Route ID</th>";
    echo "<th>Destination</th>";

    echo "<th>Type</th>";
    echo "<th>Bus ID</th>";
    while($row = mysqli_fetch_array($result))
        {
        echo"<tr><td>";
        echo $row["time"];
        echo "</td><td>";
        echo $row["route_id"];
        
        echo "</td><td>";
        echo $row["destination"];

        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>";
        echo $row["bus_id"];
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