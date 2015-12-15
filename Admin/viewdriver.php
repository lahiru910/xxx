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

<div id="container">

<div id="contentv">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>

<?php  

echo"<table align=center>";
echo "<th>Driver_ID</th>";
echo "<th>Name</th>";
echo "<th>Bus</th>";

include "includes/connection.php";
$result = mysqli_query( $conn,"select * from tbl_Driver");

while($row=mysqli_fetch_array($result))
{

echo"<tr><td>";
echo $row["driver_id"];
echo "</td><td>";
echo $row["driver_name"];
echo "</td><td>";
echo $row["bus_id"];
echo"</td></tr>";
} 

echo"</table>"
?>

</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>