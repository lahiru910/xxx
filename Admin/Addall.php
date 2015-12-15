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

<div id="contentcu">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>

<div id="side"></div>
<div id="centerpanel">
<h1>Add All</h1>
<form action="createall.php" method="post">
Route ID              :<select id="routeid" name="routeid">

<option>
 <?php
include "includes/connection.php";
            $result=mysqli_query( $conn,"SELECT route_id FROM tbl_routen group by route_id") or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysqli_fetch_array($result)) {
            $Title=$cdrow["route_id"];
            
                echo "<option>$Title</option>";
            
            }
                
            ?>
</option>

</select>
</br>
Destination :<select id="destination" name="destination">

<option>
 <?php
            $result2=mysqli_query( $conn,"SELECT destination FROM tbl_routen group by destination") or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow1=mysqli_fetch_array($result2)) {
            $Title1=$cdrow1["destination"];
            
                echo "<option>$Title1</option>";
            
            }
                
            ?>
</option>

</select></br>
BUS ID  :<input type="text" name="busid" value="" /></br>
No. Plate :<input type="text" name="busno" value="" /></br>
Bus Type            :<input type="text" name="bustype" value="" /></br>
Seats            :<input type="text" name="seat" value="54" /></br>
</br>
Driver ID         :<input type="text" name="drvid" value="NTC" /></br>
Driver Name       :<input type="text" name="drvname" value="" /></br>
</br>
Conductor ID :<input type="text" name="condid" value="NTC" /></br>
Conductor Name        :<input type="text" name="condname" value="" /></br>
Conductor Moblie :<input type="text" name="condmob" value="" /></br>
</br>
Time :<input type="text" name="time" value="hh:mm:ss" /></br>

<br />
<input type="submit" name="submit"  />
</form>

</div>   </div>     
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>