<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "project";
    $conn = new mysqli($host , $user, $pass, $dbname ,3306) or die("not connected");
    echo "connected"

?>
