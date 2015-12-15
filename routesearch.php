
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
<a href="index.php">
        <div id="cover" style="background:url(images/2.jpg)">
            
        </div>
        </a>

     
        <div id="lowerborder"></div>
        
    </div>
<div id="container">
<div id="links" style="background:url(images/button.jpg)">
<div id="link1"><a href="index.php"><div id="link1">Home</div></a></div>
<div id="link2"><a href="route.php"><div id="link2">Routes</div></a></div>
<div id="link3"><a href="tickets0.php"><div id="link3">Tickets</div></a></div>
<div id="link4"><a href="tours.php"><div id="link4">Tours</div></a></div>
<div id="link5"><a href="contactus.php"><div id="link5">Contact us</div></a></div>
</div>
<div id="content1">
<div id="freespace"></div>
<p class="thicker" style="font-family:tahoma;font-size:18px;">Bus Routes for the Route no:<?php  echo $_POST["routeid"];?></p>



<?php  
$routeid = $_POST["routeid"];
$result = mysqli_query($conn,"select * from tbl_routen where route_id='$routeid'");
$row_cnt =mysqli_num_rows($result);
if($row_cnt>0)
{
echo"<table align=center>";
echo "<th>Route_ID</th>";
echo "<th>Destination</th>";
echo "<th>Distance</th>";
echo "<th>Normal</th>";
echo "<th>Semi</th>";
echo "<th>AC</th>";
echo "<th>Super AC</th>";

while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["route_id"];
echo "</td><td>";
echo $row["destination"];
echo "</td><td>";
echo $row["distance"];echo " Km";
echo "</td><td>";

if($row["normal"] == 0)
	{
		$normal="Not Available"	;
		echo $normal;
	}
	else
	{
		$normal=$row["normal"];
		echo "Rs.";echo $normal;echo ".00";
	}

echo "</td><td>";

if($row["semi"] == 0)
	{
		$semi="Not Available"	;
		echo $semi;
	}
	else
	{
		$semi=$row["semi"];
		echo "Rs.";echo $semi;echo ".00";
	}

echo "</td><td>";

if($row["ac"] == 0)
	{
		$ac="Not Available"	;
		echo $ac;
	}
	else
	{
		$ac=$row["ac"];
		echo "Rs.";echo $ac;echo ".00";
	}
echo "</td><td>";

if($row["SuperAC"] == 0)
	{
		$SuperAC="Not Available"	;
		echo $SuperAC;
	}
	else
	{
		$SuperAC=$row["SuperAC"];
		echo "Rs.";echo $SuperAC;echo ".00";
	}
echo"</td></tr>";
} 

echo"</table>";
?><p class="thicker" style="font-family:tahoma;font-size:14px;">Note.</p>
<p class="thick" style="font-family:tahoma;font-size:14px;">Some Routes may not have all the bus types.Those are marked as "Not Available".</p>
</br>
<?php
}
else
{?>
	<p class="thick" style="font-family:tahoma;font-size:16px;">Sorry, Route Number you search is Not Available.</p>
<?php
}


?>
</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>