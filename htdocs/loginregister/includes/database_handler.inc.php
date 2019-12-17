<?php
    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "";
    $dBselect = "login system tutorial";

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBselect);

    if (!$conn) {
        die("Connection Failed: ".mysqli_connect_error());
    }
?>
