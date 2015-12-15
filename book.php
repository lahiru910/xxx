<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>
<!DOCTYPE html>
<head>
<title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
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
<div id="content2">
<div id="freespace"></div>
<p class="thicker" style="font-family:tahoma;font-size:18px;">Check the Details and confirm selection</p>

<table style="text-align:left; font-family:tahoma; font-size:16px; background-color:none;" align="center">
<?php
//echo "working one";			
if(isset($_GET['busid'])){
$bus_id=$_GET['busid'];	
	echo "<tr><td>Bus id </td><td> ".$_GET['busid'];
	echo "</td></tr>";
	echo "<tr><td>Number plate</td><td>".$_GET['no_plate'];
	echo "</td></tr>";
	foreach (getData("select * from tbl_bus where bus_id='$bus_id'") as $route)
			
		echo "<tr><td>Route id</td><td>";
		echo $route['route_id'] ;
		$route1= $route['route_id'];
		echo "</td></tr>";
		echo "<tr><td>Type</td><td>";
		echo $route['Bus_type'] ;
		$bustype = $route['Bus_type'] ;
		echo "</td></tr>";

	foreach (getData("select * from tbl_time where bus_id='$bus_id'") as $bus1)
		echo "<tr><td>Destination</td><td>";
		echo $bus1['destination'] ;	
		$des5 = $bus1['destination'];
		echo "</td></tr>";
		echo "<tr><td>Departure time</td><td>";
		$time = $bus1['time'];
		echo $bus1['time'] ;	
		echo "</td></tr>";
	foreach (getData("select * from tbl_driver where bus_id='$bus_id'") as $bus2)
		
		$drvid = $bus2['driver_id'] ;

	foreach (getData("select * from tbl_conductor where bus_id='$bus_id'") as $bus3)
		$condid = $bus3['conductor_id'] ;
		$condcont = $bus3['contact_no'] ;	

	foreach (getData("select * from tbl_routen where destination='$des5' and route_id='$route1'") as $bus4)
		$dist=$bus4['distance'];

	
		if($bustype =='Normal')
			{
				$price= $bus4['normal'] ;
				echo "<tr><td>Price</td><td>";
				echo "Rs.";
				echo $price ;
				echo ".00";	
				echo "</td></tr>";
			}

		elseif ($bustype=='Semi') 
			{
				$price= $bus4['semi'] ;
				if($price==0)
				{
					$price="Not Available";
					echo "<tr><td>Price</td><td>";		
					echo $price ;
					echo "</td></tr>";
				}
				else
				{
				echo "<tr><td>Price</td><td>";
				echo "Rs.";
				echo $price ;
				echo ".00";	
				echo "</td></tr>";	
			}
			}
		elseif($bustype=='AC') 
			{

				$price= $bus4['ac'] ;
				if($price==0)
				{
					$price="Not Available";
					echo "<tr><td>Price</td><td>";		
					echo $price ;
					echo "</td></tr>";
				}
				else
				{
				echo "<tr><td>Price</td><td>";
				echo "Rs.";
				echo $price ;
				echo ".00";	
				echo "</td></tr>";
					}
			}
		elseif($bustype=='Super AC')
			{

				$price= $bus4['SuperAC'] ;
				if($price==0)
				{
					$price="Not Available";
					echo "<tr><td>Price</td><td>";		
					echo $price ;
					echo "</td></tr>";
				}
				else
				{
					echo "<tr><td>Price</td><td>";
					echo "Rs.";
					echo $price ;
					echo ".00";	
					echo "</td></tr>";

				}
			}
		}

?>

	
<tr><td style="width:50%;">Seat No:</td>

<td style="width:50%;">
<form method="POST" action="printtick0.php">
	<select name="seatno">
		<?php
		foreach (getData("select * from tbl_seats where bus_id='$bus_id' and booked='False'") as $bus5)
		{
		$var1 = $bus5['Seat'] ;
		 echo "<option>";
		 echo $var1;
		 echo"</option>";
		}
		?>
	</select>
</td>

<input type="hidden" name="busid" value="<?php echo $_GET['busid']; ?>" />
<input type="hidden" name="distance" value="<?php echo $dist; ?>" />
<input type="hidden" name="busno" value="<?php echo $_GET['no_plate']; ?>" />
<input type="hidden" name="routeid" value="<?php echo $route1; ?>" />
<input type="hidden" name="bustype" value="<?php echo $bustype ?>" />
<input type="hidden" name="destination" value="<?php echo $des5 ; ?>" />
<input type="hidden" name="price1" value="<?php echo $price ; ?>" />
<input type="hidden" name="drivid" value="<?php echo $drvid; ?>" />
<input type="hidden" name="condid" value="<?php echo $condid; ?>" />
<input type="hidden" name="condcont" value="<?php echo $condcont; ?>" />
<input type="hidden" name="time" value="<?php echo $time; ?>" />
<tr><td>User Name</td><td><input type="text" name="user" value="User Name"/></td></tr>
<tr><td>Password </td><td><input type="password" name="pass" /></td></tr>
<tr><td colspan="2" style="text-align:center;"><input type="submit"></td></tr>
</form>
</table>

  
</div>     
</div>       
<div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>
</body>
</html>