<?php

    $connect = mysqli_connect("localhost", "root", "root", "test-exam");

    if(!$connect){
        die("No connection to database!");
    }

?>