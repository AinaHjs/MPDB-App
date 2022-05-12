<?php

$dsn = "mysql:host = localhost; dbnama = mpdb_app";
$username = "root";

try {
    $db = new PDO ($dsn,$username);
} catch (PDOException $e) {
    $error_message = "Database Error: ";
    $error_message .= $e->getMessage();
    echo $error_message;
}