<?php
    // config holds DB connection, user, pass & path
    require_once "config/config.php";
    // Creates a connection $conn
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // error $conn fails
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }