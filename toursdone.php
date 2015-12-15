<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
$cities = $_POST["cities"];

$dist   = 0;

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
<div id="cenupbdr"></div>

<div id="centerpanel7"><p class="thicker" style="font-family:tahoma;font-size:18px;">Calculation upon your request </p>
</br>


<table align="Center">
 <tr>
    <th>Start</th>
    <th>Stop</th>
    <th>Distance</th>
    <th>Total Distance</th>
    <th>Charge</th>
    <th>Total Charge</th>

 </tr>

<?php
foreach($cities as $key => $city):

$forward_key  = ++$key;
$backward_key = --$key;


if (!isset($cities[$forward_key]) or $cities[$forward_key] == 'None')
    break;

$city1 = isset($cities[$backward_key]) ? $cities[$backward_key] : $cities[0];
$city2 = $cities[$forward_key];

?>

<tr>
    <td><?php echo $city1; ?></td>
    <td><?php echo $city2; ?> </td>
    <td>
        <?php 

            $distance  = "SELECT distance FROM tbl_distance WHERE city1 = '$city1' and city2= '$city2' limit 1";
            $des       = mysqli_query($conn,$distance);

            if (mysqli_num_rows($des) == 1) {

                $des2  = getdata("SELECT distance FROM tbl_distance WHERE city1 = '$city1' and city2 = '$city2'", true);
                echo $des2['distance'];
                $dis0=$des2['distance'];
                echo "Km";
                $dist += $des2['distance'];

            } else {
                
                $des3 = getdata("SELECT distance FROM tbl_distance WHERE city1 = '$city2' and city2= '$city1'",true);
                echo $des3['distance'];
                $dis0=$des3['distance'];
                echo "Km";
                $dist += $des3['distance'];
            }
        ?>
    </td>
    <td>
        <?php echo $dist; ?>
    </td>
    <td>
        <?php echo "Rs.", ($dis0*1.05*100);; ?>
    </td>
    <td>
        <?php echo "Rs.", ($dist*1.05*100); ?>
    </td>
</tr>



<?php endforeach; ?>

</table>

</br><p class="thick" style="font-family:tahoma;font-size:10px;">These Distances calculated upon Road Devolopment Authority's 2010 Publications. </p></div>  

<?php/* var_dump($dist);*/ ?>

 


</div>   
          
<div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>
</body>
</html>