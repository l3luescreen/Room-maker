<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostlocal";

    $oneone = $_POST['subname'];
    $twotwo = $_POST['type'];
    $threethree = $_POST['score'];
    $fourfour = $_POST['text'];
    $fivefive = $_POST['file'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO modal (mail_mail, useruser, wordcode, wordcodeword, codeword)
    VALUES ('$oneone', '$twotwo', '$threethree', '$fourfour', '$fivefive')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../New_folder/aaa.php?signup=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
