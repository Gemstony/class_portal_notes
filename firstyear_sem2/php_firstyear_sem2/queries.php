<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$sql_OperatingSystem = "SELECT  * FROM tasks WHERE module_name = 'Operating System' ORDER BY task_id DESC;";
$stmt_OperatingSystem = $conn->prepare($sql_OperatingSystem);
$stmt_OperatingSystem->execute();
$result_OperatingSystem = $stmt_OperatingSystem->get_result();



$sql_ComputerNetworking = "SELECT  * FROM tasks WHERE module_name = 'Computer Networking' ORDER BY task_id DESC;";
$stmt_ComputerNetworking = $conn->prepare($sql_ComputerNetworking);
$stmt_ComputerNetworking->execute();
$result_ComputerNetworking  = $stmt_ComputerNetworking->get_result();


$sql_DatabaseManagement = "SELECT  * FROM tasks WHERE module_name = 'Database Management' ORDER BY task_id DESC;";
$stmt_DatabaseManagement = $conn->prepare($sql_DatabaseManagement);
$stmt_DatabaseManagement->execute();
$result_DatabaseManagement = $stmt_DatabaseManagement->get_result();



$sql_WebDevelopment = "SELECT  * FROM tasks WHERE module_name = 'Web Development' ORDER BY task_id DESC;";
$stmt_WebDevelopment = $conn->prepare($sql_WebDevelopment);
$stmt_WebDevelopment->execute();
$result_WebDevelopment = $stmt_WebDevelopment->get_result();



$sql_FunctionVariable = "SELECT  * FROM tasks WHERE module_name = 'Function of single Variable' ORDER BY task_id DESC;";
$stmt_FunctionVariable = $conn->prepare($sql_FunctionVariable);
$stmt_FunctionVariable->execute();
$result_FunctionVariable = $stmt_FunctionVariable->get_result();



$sql_EventDrivenPrograming = "SELECT  * FROM tasks WHERE module_name = 'Event Driven Programing' ORDER BY task_id DESC;";
$stmt_EventDrivenPrograming = $conn->prepare($sql_EventDrivenPrograming);
$stmt_EventDrivenPrograming->execute();
$result_EventDrivenPrograming = $stmt_EventDrivenPrograming->get_result();


$sql_SystemAnalysis = "SELECT  * FROM tasks WHERE module_name = 'System Analysis and Design' ORDER BY task_id DESC;";
$stmt_SystemAnalysis = $conn->prepare($sql_SystemAnalysis);
$stmt_SystemAnalysis->execute();
$result_SystemAnalysis = $stmt_SystemAnalysis->get_result();



if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_myuploads = "SELECT  * FROM tasks WHERE uploader_id = '$myid' ORDER BY task_id DESC ;";
    $stmt_myuploads = $conn->prepare($sql_myuploads);
    $stmt_myuploads->execute();
    $result_myuploads = $stmt_myuploads->get_result();
}



if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_user = "SELECT  * FROM users WHERE user_id = '$myid';";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
}
