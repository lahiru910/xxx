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
$condid = $_POST["condid"];
$condname = $_POST["condname"];
$condmob = $_POST["condmob"];
$busid = $_POST["busid"];

if(!$_POST["submit"])
{
echo "Please fill out the form";
header("location:index.php") ;   
}
else{
    
    mysqli_query($conn,"insert into tbl_conductor (conductor_id,name,contact_no,bus_id) Values ('$condid','$condname','$condmob','$busid')") or die(mysql_error());
    echo "Conductor data has been Added!";
   

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