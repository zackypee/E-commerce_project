<?php
$conn = mysqli_connect("127.0.0.1", "root", "1234", "php_project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
