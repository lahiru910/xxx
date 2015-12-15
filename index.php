<?php
    include "includes/connection.php"
    
?>
<!DOCTYPE html>
<head>
<title>Online Ticketing System</title><link rel="shortcut icon" href="sltbots.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/1.css">
<script type="text/javascript" src="jq/jquery.min.js"></script>
<script type="text/javascript" src="jq/jquery.contenthover.js"></script>
<script src="jq/jquery-1.9.1.min.js"></script>
<script src="jq/jquery.vticker.js?v=1.13"></script>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    width: 100%;
}

th {
    height: 20px;
}

</style>
</head>

<body style="background-color: black;">
<div id="wrapper">
<div id="header">
        <div id="cover" style="background:url(images/2.jpg)">
        <a href="index.php"></a>
        </div>
    <div id="lowerborder">
        
<ul>
     <?php 
     $sql=mysqli_query($conn,"Select * from tbl_news order by news_id asc");
     while ($row=mysqli_fetch_array($sql)){
        echo "<li><div id='line'>News : ";                   
        echo $row["news"];
        echo "</div></li>";
        }
?>
</ul>
    <script >
        $('#lowerborder').vTicker('init', {speed: 100, 
         pause: 6000,
        showItems: 1,
        padding:4});
    </script>

</div>
        
    </div>
<div id="container">
        
        <div id="midcontainer">
        <div id="cont">
        <div id="firstrow">
            <div id="route" style="background : url(images/routes1.jpg)"><a href="route.php"><div id="tile1" ></div></a></div>
            <div id="tickets" style="background : url(images/tick.jpg)"><a href="tickets0.php"><div id="tile2" ></div></a></div>
            <div id="special" style="background : url(images/tours1.jpg)"><a href="tours.php"><div id="tile3" ></div></a></div>
        </div>
        <div id="secondrow">
            <div id="abut" style="background-color: burlywood; ">
                <div id="tile4" >
                    <div id="subtile4" >
                        <h3 style="color:brown;"> Buses leaving from Colombo:</h3>
                    </div>
                    <div id="subtile5"  >
                        <ul id="scroller" >           
               
                        <?php $query=mysqli_query($conn,"Select * from tbl_time order by time asc");
                        while ($row=mysqli_fetch_array($query))
                        {
                            
                            
                            echo "<li><div id=line2><div id=route2>";                   
                            echo $row["route_id"];
                            echo " </div><div id=space></div><div id=des1>";
                           echo $row["destination"];
                            echo " </div><div id=space></div><div id=des1>";
                            echo $row["type"];
                            echo "</div><div id=space></div><div id=des1>";
                            echo $row["time"];              
                            echo "</div></li>";
                        }
                        ?>
                        </ul>
                    <script >
                    $('#subtile5').vTicker('init', {speed: 100, 
                     pause: 2500,
                    showItems: 5,
                    padding:4});
                    </script>

                    </div>            
                </div>
            </div>

        <div id="link" style="background : url(images/about.jpg)"><a href="Contactus.php"><div id="tile5" ></div></a></div>
        </div>
        </div>
        </div>
         </div>
    
   <div id="footer" style="background:url(images/3256.jpg)">
        <div id="ftitle">Copyright &copy; 2014 . CS205 Practical Group Project.<a href="Admin/login.php">Admin</a></div>
    </div>
    
</div>

</div>

    	

</body>


</html>