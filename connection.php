<?php
    $connection = mysqli_connect('localhost','project','12345','travel_info','3306');

    if(!$connection) echo "Connection unsuccessful.<br> Error: ".mysqli_connect_error($connection)."<br>";
?>