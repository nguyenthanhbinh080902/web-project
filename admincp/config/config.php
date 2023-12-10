<?php

    $mysqli = new mysqli("localhost", "root", "", "web_mysqli");

    // Check connection
    if ($mysqli->connect_error) {
    die("Kết nối Mysqli lỗi: " . $mysqli->connect_error);
    }
    //echo "Connected successfully";

?>