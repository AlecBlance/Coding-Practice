<?php
    $conn = mysqli_connect("localhost", "root", "", "coding_act_1");
    if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
?>