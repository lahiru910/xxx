<?php
	
 require_once('auth.php');
 require_once('includes/connection.php');
 require_once('includes/function.php');
?>
<!DOCTYPE html>
<head>
<title>Admin Panel</title><link rel="shortcut icon" href="admin.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex1.css">

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


<div id="content">
<div id="freespace"> </div>
<div id="centerpanel7">
	<h2 style="color:black; font: Tahoma;">Select Route</h2>
</br>
	<form method="post" action="bookedbus.php">
		Route ID   
		<select id="route" name="route">
			<option>
			<?php
				$result=mysqli_query( $conn,"SELECT route_id FROM tbl_ticket group by route_id")or die ("Query to get data from firsttable failed: ".mysql_error());
            	while ($row=mysqli_fetch_array($result))
            	{
            		$route=$row["route_id"];
            		echo "<option>";
                	echo $route;
                	echo "</option>";
            	}
            	?>
        </option>
		</select>

		<input type="submit" name="submit" value="next" style="width:60px  ; height: 25px;"/>
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