
<table style="alignment-adjust: central;">
    <tr>
        <td>Destination:</td>
        <td>
            <?php
                $destination = getData("SELECT * FROM tbl_time WHERE destination = '{$des_id}'", true);
                echo $destination['destination'];
            ?>
        </td>
    </tr>
    <tr>
        <td>Route id :</td>
        <td>
            <?php
                $sql   = "SELECT route_id FROM tbl_time
                          WHERE  destination = '{$des_id}'";

                $route = getData($sql, true);
                echo $route['route_id'];
            ?>
        </td>
    </tr>
    

</table>

<table >
    <tr>
        <th>BUS ID</th>
        <th>BUS No</th>
        <th>Time</th>
        <th>Type</th>
        <th>&nbsp;</th>
    </tr>
    
    <?php foreach (getData("SELECT b.*, t.time FROM tbl_bus b LEFT JOIN tbl_time t ON t.bus_id = b.bus_id WHERE t.destination = '{$destination['destination']}'") as $bus): ?>
        <tr>
            <td><?php echo $bus['bus_id']; ?></td>
            <td><?php echo $bus['no_plate']; ?></td>
            <td><?php echo $bus['time']; ?></td>
            <td><?php echo $bus['Bus_type']; ?></td>
            <td>
                    <!--<BUTTON formaction="" formmethod="" onClick="window.location='book1.php?busid=11';">Reserve!</BUTTON>-->
                    <?php
                    echo '<a href="book.php?busid='.$bus['bus_id'].'&no_plate='.$bus['no_plate'].'" title="Reserve">Reserve</a>';
                    ?>
                
            </td>
        </tr>
    <?php endforeach; ?>
</table>