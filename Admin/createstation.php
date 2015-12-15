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
<div id="side"></div>
<div id="contentcu">

<div id="freespace">ADMIN Panel </div>


<?php
include "includes/connection.php";
$staid = $_POST["staid"];
$staname = $_POST["staname"];
$routeid = $_POST["routeid"];
$pnormal=$_POST["pnormal"];
$psemi=$_POST["psemi"];
$pac=$_POST["pac"];

if(!$_POST["submit"])
{
echo "Please fill out the form";
header("location:addstation.php") ;   
}
else{
    mysql_query("insert into tbl_station (station_id,route_id,Station_name,Normal,Semi,AC) Values ('$staid','$routeid','$staname','$pnormal','$psemi','$pac')") or die(mysql_error()) ;
    echo "Station has been Added!";
   

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