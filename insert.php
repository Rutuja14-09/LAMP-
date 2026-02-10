<?php
require "config.php";

$name  = "Rutuja";
$email = "Ritu1@example.com";

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email);

if ($stmt->execute()) {
    echo "Data inserted successfully";
} else {
    echo "Insert failed";
}

$stmt->close();
$conn->close();
?>
