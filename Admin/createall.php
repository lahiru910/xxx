<?php
	require_once('auth.php');
?>




<!DOCTYPE html>
<head>
<title>Online Ticketing System</title>
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
<div id="contentcu">

<div id="freespace">ADMIN Panel </div>


<?php
include "includes/connection.php";
$busid = $_POST["busid"];
$busno = $_POST["busno"];
$routeid = $_POST["routeid"];
$condid = $_POST["condid"];
$condname = $_POST["condname"];
$condmob = $_POST["condmob"];
$drvid = $_POST["drvid"];
$drvname = $_POST["drvname"];
$des = $_POST["destination"];
$bustype = $_POST["bustype"];
$seats = $_POST["seat"];
$time=$_POST["time"];

if(!$_POST["submit"])
{
echo "Please fill out the form";
header("location:addall.php") ;   
}
else{
    mysql_query("insert into tbl_bus (bus_id,seats,no_plate,bus_type,route_id) Values ('$busid','$seats','$busno','$bustype','$routeid')") or die(mysql_error()) ;
    mysql_query("insert into tbl_conductor (conductor_id,name,contact_no,bus_id) Values ('$condid','$condname','$condmob','$busid')") or die(mysql_error());
    mysql_query("insert into tbl_driver (driver_id,driver_name,bus_id) Values ('$drvid','$drvname','$busid')") or die(mysql_error());
    mysql_query("insert into tbl_time (route_id,bus_id,type,time,destination) Values ('$routeid','$busid','$bustype','$time','$des')") or die(mysql_error()) ;
    mysql_query("UPDATE `tbl_bus` SET `Conductor`='True',`Driver`='True' where `Bus_id`='$busid'")or die(mysql_error());
    for ($i=1; $i<=$seats; $i=$i+1) 
        { 
            $sk=$i;
            mysql_query("insert into tbl_seats (bus_id,Seat,booked)values ('$busid','$sk','False')")or die(mysql_error());

        }

    echo "Transport method has been Added!";
   

}
?>

<form action="index.php" method="post">

<input type="submit" name="submit" value="Admin"  />
</form>
</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>