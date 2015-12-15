<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>
<!DOCTYPE html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex.css">
<script type="text/javascript" src="jq/jquery.min.js"></script>
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
</div><div id="content6">
<div id="freespace"></div>  
<div id="centerpane6">
  <p class="thicker" style="font-family:tahoma;font-size:18px;">Your ticket details should be shown here</p>
  <table>
    <?php

  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $epass=md5($pass);   $result=mysqli_query($conn,"select * from tbl_ticket where user='$user' and password='$epass' and ok='true'");
            if(mysqli_fetch_array($result)>0)
            {

        foreach (getData("select * from tbl_ticket where user='$user' and password='$epass' and ok='true'") as $row)


    {   
        echo "<tr><td>Ticket ID :</td><td>";
        echo $row['ticket_id'];
        $ticketid=$row['ticket_id'];
        echo "</td></tr><td>";
        echo "Route ID :";
        echo "</td><td>";
        echo $row['route_id'];
        echo "</td></tr><td>";
        echo "Destination :";
        echo "</td><td>";
        echo $row['destination'];
        echo "</td></tr><td>";
        echo "Seat No :";
        echo "</td><td>";
        echo $row['seat_no'];
        $seat=$row['seat_no'];
        echo "</td></tr><td>";
        echo "Booked Time :";
        echo "</td><td>";
        echo $row['book_time'];
        echo "</td></tr><td>";
        echo "Departure time :";
        echo "</td><td>";
        echo $row['time'];
        echo "</td></tr>";
        $busid=$row['bus_id'];
        ?>

<form action="nextcancel.php" method="post"><input type="hidden" name="ticketid" value="<?php echo $ticketid; ?>" />
<input type="hidden" name="busid" value="<?php echo $busid; ?>" />
<input type="hidden" name="seat" value="<?php echo $seat; ?>" />
<input type="hidden" name="user" value="<?php echo $user; ?>" />
<input type="hidden" name="pass" value="<?php echo $epass; ?>" />
<td colspan="2" style="text-align:center;"><input type="submit" value="Cancel"> 
</form>;
<?php
    }
}
else
{?>
<p class="thicker" style="font-family:tahoma;font-size:18px;">No Details found !</p>
    <?php


}
?>


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