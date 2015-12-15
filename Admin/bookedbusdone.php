<?php
	
 require_once('auth.php');
    require_once('includes/connection.php');
?>
<!DOCTYPE html>
<head>
<title>Admin Panel</title><link rel="shortcut icon" href="admin.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex1.css">
<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>

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
    <h2 style="color:black; font: Tahoma;">Booked Seats</h2>  
	<form method="post" action=" "> <table id="tbl1" align="center">
         <tr align="left"><td>
        Route</td><td>: </td><td><?php echo $_POST['route']; ?></td></tr><tr align="left"><td>
        Time </td><td>: </td><td><?php echo $_POST['time']; ?></td></tr> 
    </br>
</br> <?php
        $route = $_POST["route"];
        $time = $_POST["time"];
        $result0=mysqli_query( $conn,"SELECT *  from tbl_ticket where route_id='$route' and time='$time' and ok='true' group by bus_id");
        while($row0=mysqli_fetch_array($result0))
        { $busid=$row0['bus_id'];
          $condid=$row0['conductor_id'];
          ?>
          <tr align="left"><td>
          Bus ID</td><td>: </td><td><?php echo $busid; ?></td></tr><tr align="left"><td>
          Conductor ID</td><td>: </td><td><?php echo $condid; ?></td></tr></table> 
      </br>
          <table align="center">
            <tr><th>Ticket ID </th><th> Name </th><th>Seat</th>
          <?php
        }
        $result=mysqli_query( $conn,"select * from tbl_ticket where route_id='$route' and time='$time' and ok='true'");
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr><td>";
            echo $row['ticket_id'];
            echo "</td>";
            echo "<td>";
            echo $row['user'];
            echo "</td>";
            echo "<td>";
            echo $row['seat_no'];
            echo "</td></tr>";
        }
		?>    
        </table>
    </br>
        <u><b>Cancelled</b></u>
        
        <table align="center">
            <tr><th>Ticket ID </th><th> Name </th><th>Seat</th>
          <?php
         
        $result=mysqli_query( $conn,"select * from tbl_ticket where route_id='$route' and time='$time' and ok='False'");
        while($row=mysqli_fetch_array($result))
        {
            echo "<tr><td>";
            echo $row['ticket_id'];
            echo "</td>";
            echo "<td>";
            echo $row['user'];
            echo "</td>";
            echo "<td>";
            echo $row['seat_no'];
            echo "</td></tr>";
        }
        ?>    
        </table>
    </br>

	</form>
</div></br><button onclick="printContent('centerpanel7')">Print Content</button>



</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>