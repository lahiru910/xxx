<?php
	 require_once('auth.php');
    require_once('../includes/connection.php');
    require_once('../includes/function.php');

    if (isset($_POST['delete']) and isset($_POST['bus_id'])) {
        executeQuery("DELETE FROM tbl_time WHERE bus_id = '{$_POST['bus_id']}'");
        executeQuery("UPDATE `tbl_ticket` SET `ok`='False' where `Bus_id`='{$_POST['bus_id']}'");
    }
?>

<!DOCTYPE html>
<head>
<title>Admin Panel</title><link rel="shortcut icon" href="admin.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/adindex.css">

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

<div id="contentv">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>
<table align="center">
    <tr>
        <th>ID</th>
        <th>Destination</th>
        <th>Bus ID</th>
        <th>Time</th>
        <th>Type</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach (getData("SELECT * FROM tbl_time") as $bus): ?>
        <tr>
            <td><?php echo $bus['route_id']; ?></td>
            <td><?php echo $bus['destination']; ?></td>
            <td><?php echo $bus['bus_id']; ?></td>
            <td><?php echo $bus['time']; ?></td>
            <td><?php echo $bus['type']; ?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="bus_id" value="<?php echo $bus['bus_id']; ?>" />
                    <input type="submit" value="Delete" name="delete" />
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</br>



</div>
</div>

      
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>