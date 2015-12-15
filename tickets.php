<?php
require_once 'includes/connection.php';
require_once 'includes/function.php';
?>
<!DOCTYPE html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
<div id="centerpanel1">
<h2>Fill the form</h2>
<form action="" method="post">

<table style="alignment-adjust: central;">
<tr>
    <td>Destination:</td>
    <td>
        <select id="desid" name="desid">
        <?php
            foreach (getData("SELECT * FROM tbl_time group by destination") as $row) {
                $selected = (isset($_POST['desid']) and $_POST['desid'] == $row['destination']) ? 'selected="selected"' : '';
                echo "<option value=\"{$row['destination']}\" {$selected}>{$row['destination']}</option>";
            }
        ?>
        </select>
    </td>
</tr>

    <?php
        if (isset($_POST['desid'])) {
            $des_id = $_POST['desid'];
            include('ticketdone.php');
        }      
    ?>


</table>
</form>
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