<!-- connect.php -->
<?php
    $conn = new mysqli("localhost", "root", "YES", "login");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>