<?php
	
 require_once('auth.php');
    require_once('includes/connection.php');
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
<div id="freespace"></div>
<div id="centerpanel7">
    <h2 style="color:black; font: Tahoma;">Select Time</h2> 
</br>
	<form method="post" action="bookedbusdone.php">
          
        
        <table id="tbl1" align="center">
        <tr><td>
        route: </td><td><?php echo $_POST['route']; ?></td></tr><tr><td>
        Time : </td><td>
		<select id="time" name="time">
			<option>
			<?php

                $route = $_POST["route"];
				$result=mysqli_query( $conn,"SELECT time FROM tbl_ticket where route_id='$route' group by time")or die ("Query to get data from firsttable failed: ".mysql_error());
            	while ($row=mysqli_fetch_array($result))
            	{
            		$time=$row["time"];
            		echo "<option>";
                	echo $time;
                	echo "</option>";
            	}
            ?>
            </option>
		</select>
    </td>
    </tr>
    <tr><td align="center" colspan="2" >
        <input type="hidden" name="route" value="<?php echo $route;?>" />
		<input type="submit" name="submit" value="next" style="width:60px  ; height: 25px;"/>
        </td></tr>
        </table>
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