<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["ID"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["message"];

    $sql = "UPDATE users SET name='$name', email='$email', message='$phone' WHERE ID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
