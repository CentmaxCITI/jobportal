<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "citiac_centmax";
$dbPassword = "centmax@2022";
$dbName     = "citiac_blog";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>