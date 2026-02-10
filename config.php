<?php
/* Database Configuration */

$DB_HOST = "localhost";
$DB_USER = "lampuser1";
$DB_PASS = "Lamp@7559";
$DB_NAME = "lampdb1";

/* Create Connection */
$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

/* Check Connection */
if ($conn->connect_error) {
    error_log("Database Connection Failed: " . $conn->connect_error);
    die("Service temporarily unavailable. Please try again later.");
}
?>
