<?php

    session_start();
    include 'connection.php';
    $travel_id=$_REQUEST['id'];
    $sql_query="update details set status='Inactive' where id=".$travel_id;
    $result=mysqli_query($connection,$sql_query);
    header("Location: table.php");

?>