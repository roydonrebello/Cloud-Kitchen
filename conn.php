<?php

$conn = new mysqli('localhost', 'root', '', 'opd');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>