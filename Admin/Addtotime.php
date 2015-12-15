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
        <div id="cover" style="background:url(images/2.1.1.jpg)">
            
        </div>
        </a>

     
        <div id="lowerborder"></div>
        
    </div>

<div id="container">

<div id="content">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>

<div id="centerpanel1">


<h1>Add a Bus</h1>
<form action="createtotime.php" method="post">
Route ID              :
<select id="route" name="route">

<option>
 <?php
 			 $result=mysqli_query($conn,"SELECT route_id FROM tbl_bus group by route_id") or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysqli_fetch_array($result)) {
            $route=$cdrow["route_id"];
            
                echo "<option>$route</option>";

            
            }
                
            ?>
</option>

</select></br>
Destination              :
<select id="des" name="des">

<option>
 <?php
             $result=mysqli_query($conn,"SELECT destination FROM tbl_routen group by destination") or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysqli_fetch_array($result)) {
            $destination=$cdrow["destination"];
            
                echo "<option>$destination</option>";
            
            }
                
            ?>
<input type="hidden" name="destination" value="<?php echo $destination;?>" />
</option>

</select></br>
Bus ID :<select id="busid" name="busid">

<option>
 <?php
            $result=mysqli_query($conn,"SELECT bus_id FROM tbl_bus") or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysqli_fetch_array($result)) {
            $Title=$cdrow["bus_id"];
            echo "<option>$Title</option>";
            
            }
                
            ?>
</option>

</select>
</br>
Time :<input type="text" name="time" value="hh:mm:ss" /></br><br />
<input type="submit" name="submit"  />
</form>

</div>


</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>