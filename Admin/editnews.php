<?php
	require_once('auth.php');
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
	<th>ID</th>
	<th>News</th>
	<th>&nbsp;</th>


<?php
include "includes/connection.php";
$result = mysqli_query( $conn,"select * from tbl_news");

while($row=mysqli_fetch_array($result))
{
	?>

<tr><td>
<?php echo $row["news_id"];?>
</td><td>
<?php echo $row["news"];?>
</td>
<td>
    <form action="edit.php" method="POST">
 	<input type="hidden" name="news_id" value="<?php echo $row['news_id']; ?>" />
    <input type="submit" value="edit" name="edit" />
    </form>
    </td>
</td></tr>
<?php }  ?>

</table>


</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>