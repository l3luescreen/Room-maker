<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hostlocal";

    $usirname = $_POST['pokeone'];
    $email = $_POST['poketwo'];
    $passsword = $_POST['pokethree'];
    $passwordRepeat = $_POST['pokefour'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO teacher (name, surname, subject, numbers)
    VALUES ('$usirname', '$email', '$passsword', '$passwordRepeat')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../New_folder/contact.php?signup=success");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
