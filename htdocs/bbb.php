<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostlocal";

    $usirname = $_POST['uid'];
    $email = $_POST['mail'];
    $passsword = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO datawhat (email, username, password, password_two)
    VALUES ('$usirname', '$email', '$passsword', '$passwordRepeat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../New_folder/aaa.php?signup=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
