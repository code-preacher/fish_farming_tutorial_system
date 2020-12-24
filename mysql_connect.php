<?php

$conn = new mysqli("localhost", "root", "", "fish");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
