<?php
 require_once('auth.php');
    require_once('../includes/connection.php');
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

<div id="content">
<div id="freespace"><a href="index.php">ADMIN Panel</a> </div>

<div id="centerpanel1">


<h1>Edit News</h1>
<?php 
$id=$_POST['news_id'];
$sql=mysqli_query( $conn,"SELECT * FROM tbl_news WHERE news_id='$id' limit 1");
while($row=mysqli_fetch_array($sql))
{
?>
<form action="savenews.php" method="post">
News            :
</br><textarea rows="10" cols="30" name="news" value="" maxlength="100"/><?php echo $row['news']?></textarea></br>

<input type="hidden" name="news_id" value="<?php echo $id; ?>"  />
<br />
<input type="submit" name="submit"  />

</form>
<?php } ?>
</div>


</div>        
       
<div id="footer" style="background:url(images/3256.jpg)">
<div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
</div>
    
</div>

</div>

    	

</body>


</html>