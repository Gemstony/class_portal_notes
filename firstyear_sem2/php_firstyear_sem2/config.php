<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

$servername= "sql300.infinityfree.com";
$username ="if0_38573175";
$password = "9SdIHdH364ak";
$database = "if0_38573175_classportal";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die ("connection failed" . $conn->connect_error);

}





