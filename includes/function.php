<?php

function getData($sql, $single = false)
{
    global $conn;

    $result = mysqli_query( $conn,$sql) 
        or die ("Query to get data from firsttable failed: ".mysql_error());

    if ($single == true) {
        return mysqli_fetch_assoc($result);
    }

    $return = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $return[] = $row;
    }

    return $return;
}

function executeQuery($sql)
{
    global $conn;
    mysqli_query( $conn,$sql);
}
