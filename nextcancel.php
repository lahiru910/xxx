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

  <p class="thicker" style="font-family:tahoma;font-size:18px; text-align:center;">Your ticket has cancelled successfully.</p>
</br>
  <?php

  $ticketid=$_POST['ticketid'];
  $busid=$_POST['busid'];
  $seatno=$_POST['seat'];
  $user=$_POST['user'];
  $epass=$_POST['pass'];

  mysqli_query($conn,"update tbl_seats set booked='False' where Bus_id='$busid' and Seat='$seatno'")or die(mysql_error());
  mysqli_query($conn,"update tbl_ticket set ok='False' where Bus_id='$busid' and user='$user' and password='$epass' and seat_no='$seatno'")or die(mysql_error());
  mysqli_query($conn,"insert into tbl_cancelled (ticket_id) values('$ticketid') ");



  ?>
</div>  
</div>
<div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#desid').change(function(){
            $('form').submit();
        });
    });
</script>

</body>


</html>