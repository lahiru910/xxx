<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>
<!DOCTYPE html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/tours.css">

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
<div id="container">
<div id="links" style="background:url(images/button.jpg)">
<div id="link1"><a href="index.php"><div id="link1">Home</div></a></div>
<div id="link2"><a href="route.php"><div id="link2">Routes</div></a></div>
<div id="link3"><a href="tickets0.php"><div id="link3">Tickets</div></a></div>
<div id="link4"><a href="tours.php"><div id="link4">Tours</div></a></div>
<div id="link5"><a href="contactus.php"><div id="link5">Contact us</div></a></div>
</div>
<div id="content">
<div id="freespace"></div>
<div id="centerpanel1">
<div id="cenupbdr"></div>

</br><p class="thicker" style="font-family:tahoma;font-size:18px;">This is a Cost estimation system for tour.</p>


<p class="light" style="font-family:tahoma;font-size:18px;">How many Stops Do you Need?</p>

<form action="tours0.php" method="post" style="text-align:center">
            
    <table align="center">
        <tr><td>
            <input type="text" name="maxx" size="10" maxlength="2">
        </td>
        <td>
            <input type="submit" value="Next" name="Next"></form>
        </td>
    </tr>
           
       </table>
</form>

</div>   </div>     
       
<div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>
</body>
</html>