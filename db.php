<?php
$conn = new mysqli("localhost", "lampuser1", "Lamp@7559", "lampdb1");

if ($conn->connect_error) {
    die("Connection failed");
}
echo "Database Connected Successfully";
?>
