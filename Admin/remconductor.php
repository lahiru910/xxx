<?php
    require_once('auth.php');
    require_once('../includes/connection.php');
    require_once('../includes/function.php');

    if (isset($_POST['delete']) and isset($_POST['conductor_id'])) {
        executeQuery("DELETE FROM tbl_conductor WHERE conductor_id = '{$_POST['conductor_id']}'");
    mysql_query("update `tbl_bus` set `Conductor`='False' where `Bus_id`='$busid'")or die(mysql_error());
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
        <th>contact no</th>
        <th>Bus</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach (getData("SELECT * FROM tbl_conductor") as $cond): ?>
        <tr>
            <td><?php echo $cond['conductor_id']; ?></td>
            <td><?php echo $cond['name']; ?></td>
            <td><?php echo $cond['contact_no']; ?></td>
            <td><?php echo $cond['bus_id']; ?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="conductor_id" value="<?php echo $cond['conductor_id']; ?>" />
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