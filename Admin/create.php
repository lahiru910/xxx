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
$drvid = $_POST["drvid"];
$drvname = $_POST["drvname"];
$busid = $_POST["busid"];

if(!$_POST["submit"])
{
echo "Please fill out the form";
header("location:index.php") ;   
}
else{
    
    mysqli_query($conn,"insert into tbl_driver (driver_id,driver_name,bus_id) Values ('$drvid','$drvname','$busid')") ;
    echo "User has been Added!";
   

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