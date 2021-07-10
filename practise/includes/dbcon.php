<?php
$host = "localhost";
$username = "root";
$pass = "";
$database = "#";
$conn = new mysqli($host,$username,$pass,$database);
if ($conn->connect_error) {
    die("Connection Failed:".$conn->connect_error);
}
?>