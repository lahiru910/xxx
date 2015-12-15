<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>
<html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/print.css">
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
<body>
	<div id="wrapper">
		<div id="header">
			<image src="images/logo1.jpg"/>
			<h3>Sri Lanka Transport Board.</h3>
		<i>Online Ticketing System</i>
		______________________

		</div>


		<div id="middle">
			<table >
				<tr>
					<td>From : </td>
					<td>Colombo</td>
				</tr>
				<tr>
					<td>to : </td>
					<td><?php echo $_POST['destination']; ?></td>
				</tr>
				<tr>
					<td>Route ID  : </td>
					<td><?php echo $_POST['routeid']; ?></td>
				</tr>
				<tr>
					<td>Distance  : </td>
					<td><?php echo $_POST['distance'];echo " Km"; ?></td>
				</tr>
				<tr>
					<td>Bus Type  : </td>
					<td><?php $bustype=$_POST['bustype'];
					echo $bustype ?></td>
				</tr>
				<tr>
					<td>Seat No  : </td>
					<td><?php echo $_POST['seatno']; ?></td>
				</tr>
				<tr>
					<td>Date  : </td>
					<td><?php echo  date("Y/m/d"); ?></td>
				</tr>
				
				<tr>
					<td  style="font-family:tahoma;font-size:16px;"><p class="thicker">Price  :</p> </td>
					<td  style="font-family:tahoma;font-size:16px;"><p class="thicker"><?php echo "Rs.";echo $_POST['price1'];echo ".00"; ?></p></td>
				</tr>

				<tr><td><h4>Details</h4></td></tr>
				<tr></tr>
				<tr>
					<td>BUS ID  : </td>
					<td><?php echo $_POST['busid']; ?></td>
				</tr>
				<tr>
					<td>Bus no : </td>
					<td><?php echo $_POST['busno']; ?></td>
				</tr>
				<tr>
					<td>Contact No  : </td>
					<td><?php echo $_POST['condcont']; ?></td>
				</tr>
				<tr>
					<td>Start Time  : </td>
					<td><?php echo $_POST['time']; ?></td>

				</tr>
				<tr>
					<h5><td>Ticket ID : </td>
					<td><?php echo $_POST['tickid']; ?></td></h5>
				</tr>
	
			</table>
			
		</div>
		<div id="footer">
			______________________<br/>
            <font size="1px">You have to buy the ticket from conductor and booked seats are valid from starting point to end point.</font>

		</div>
		
		
	</div><script type="text/javascript">window.print()</script>
</body>
</html>

