<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>

<!DOCTYPE html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<style>
p.normal {
    font-weight: normal;
}

p.light {
    font-weight: lighter;
}

p.thick {
    font-weight: bold;
}

p.thicker {
    font-weight: 900;
}
</style>

</head>

<body style="background-color: black;">
<div id="wrapper">
<div id="header">
        <div id="cover" style="background:url(images/2.jpg)"></div>

     
        <div id="lowerborder"></div>
        
    </div>
<div id="container1">
<div id="links" style="background:url(images/button.jpg)">
<div id="link1"><a href="index.php"><div id="link1">Home</div></a></div>
<div id="link2"><a href="route.php"><div id="link2">Routes</div></a></div>
<div id="link3"><a href="tickets0.php"><div id="link3">Tickets</div></a></div>
<div id="link4"><a href="tours.php"><div id="link4">Tours</div></a></div>
<div id="link5"><a href="contactus.php"><div id="link5">Contact us</div></a></div>
</div>
<div id="content1">
<div id="freespace"></div><p class="thicker" style="font-family:tahoma;font-size:18px;">Your Data has been successfully Added.Please remember username & Password in any case for ticket cancelletion.</p>

<form method="POST" action="printtick.php" target="_blank">
<input type="hidden" name="busid" value="<?php echo $_POST['busid'];$busid=$_POST['busid']; ?>" />
<input type="hidden" name="distance" value="<?php echo $_POST['distance']; $dist=$_POST['distance']; ?>" />
<input type="hidden" name="busno" value="<?php echo $_POST['busno'];$busno= $_POST['busno'];?>" />
<input type="hidden" name="routeid" value="<?php echo $_POST['routeid']; $routeid= $_POST['routeid'];?>" />
<input type="hidden" name="bustype" value="<?php echo $_POST['bustype'];$bustype=  $_POST['bustype'];;?>" />
<input type="hidden" name="destination" value="<?php echo $_POST['destination'];$destination=  $_POST['destination'];?>" />
<input type="hidden" name="price1" value="<?php echo $_POST['price1'] ; $price1= $_POST['price1'];?>" />
<input type="hidden" name="drivid" value="<?php echo $_POST['drivid']; $drivid= $_POST['drivid'];?>" />
<input type="hidden" name="condid" value="<?php echo $_POST['condid']; $condid= $_POST['condid'];?>" />
<input type="hidden" name="condcont" value="<?php echo $_POST['condcont']; $condcont= $_POST['condcont'];?>" />
<input type="hidden" name="time" value="<?php echo $_POST['time']; $time= $_POST['time'];?>" />
<input type="hidden" name="seatno" value="<?php echo $_POST['seatno'];  $seatno=$_POST['seatno'];?>" />
<input type="hidden" name="user" value="<?php echo $_POST['user'];  $user=$_POST['user'];?>" />
<input type="hidden" name="pass" value="<?php echo $_POST['pass'];  $pass=$_POST['pass'];?>" />

<?php 
mysqli_query($conn,"insert into tbl_ticket (ticket_price,bus_type,bus_id,conductor_id,contact_no,driver_id,route_id,destination,seat_no,time,user,password) values ('$price1','$bustype','$busid','$condid','$condcont','$drivid','$routeid','$destination','$seatno','$time','$user',md5('$pass'))")or die(mysql_error());

mysqli_query($conn,"update tbl_seats set booked='TRUE' where Bus_id='$busid' and Seat='$seatno'")or die(mysql_error());

foreach (getData("SELECT * from tbl_ticket where route_id='$routeid' and user='$user' and  seat_no='$seatno'") as $tick1)
	$tickid=$tick1['ticket_id'];
?>
<input type="hidden" name="tickid" value="<?php echo $tickid;?>" />
<input type="submit" value="Print">
</form>
 </br>
</div>     
</div>       
<div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>
</body>
</html>