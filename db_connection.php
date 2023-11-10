<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'database_interview';

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
    die("Takleh connect" . $conn->connect_error);
}
?>