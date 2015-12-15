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
<div id="side"></div>
<div id="contentcu">

<div id="freespace">ADMIN Panel </div>


<?php
include "includes/connection.php";
$seats = $_POST["seats"];
$noplate = $_POST["noplate"];
$type = $_POST["type"];
$busid = $_POST["busid"];
$routeid = $_POST["routeid"];

if(!$_POST["submit"])
{
echo "Please fill out the form";
header("location:index.php") ;   
}
else{
    
    mysqli_query($conn,"insert into tbl_bus (bus_id,seats,no_plate,Bus_type,route_id) Values ('$busid','$seats','$noplate','$type','$routeid')") or die(mysql_error());
    echo "bus data has been Added!";
   

}

for ($i=1; $i<=$seats; $i=$i+1) 
        { 
            $sk=$i;
            mysqli_query($conn,"insert into tbl_seats (bus_id,Seat,booked)values ('$busid','$sk','False')")or die(mysql_error());

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