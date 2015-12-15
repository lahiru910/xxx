<!DOCTYPE html>
<head><title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/index.css" >
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
<div id="cover" style="background:url(images/2.jpg)">
        <a href="index.php">
            <div id="upper"></div>
            <div id="mid"></div>
            <div id="lower"></div>
            </a>
        </div>

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

<div id="reqform"> 
</br>
<p class="thicker" style="font-family:tahoma;font-size:18px;">Select your Target Route</p>
<div id="freespace" ></div>

<form action="routesearch.php" method="post">
by Route No : <input type="text" name="routeid" size="19" maxlength="3"> 
<input type="submit" value="Search" name="Search"></form>
or</br>
 
<form action="routesearchdes.php" method="post">
by Destination: <input type="text" size="19" name="Destination">
<input type="submit" value="Search" name="Search">
</form>
</br>


</div>  
      
       
    <div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.</div>
    </div>
    
</div>

</div>

    	

</body>


</html>