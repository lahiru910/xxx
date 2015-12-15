<?php
    require_once('auth.php');
    require_once('../includes/connection.php');
	require_once('../includes/function.php');

    if (isset($_POST['delete']) and isset($_POST['driver_id'])) {
        executeQuery("DELETE FROM tbl_driver WHERE driver_id = '{$_POST['driver_id']}'");
    mysql_query("update `tbl_bus` set `Driver`='False' where `Bus_id`='$busid'")or die(mysql_error());
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
<div  id="centerpanel2" >
<table >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Bus</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach (getData("SELECT * FROM tbl_driver") as $driver): ?>
        <tr>
            <td><?php echo $driver['driver_id']; ?></td>
            <td><?php echo $driver['driver_name']; ?></td>
            <td><?php echo $driver['bus_id']; ?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="driver_id" value="<?php echo $driver['driver_id']; ?>" />
                    <input type="submit" value="Delete" name="delete" />
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
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