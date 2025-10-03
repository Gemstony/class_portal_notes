<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$sql_WebApplicationDevelompment = "SELECT  * FROM tasks WHERE module_name = 'Web Application Develompment' ORDER BY task_id DESC;";
$stmt_WebApplicationDevelompment = $conn->prepare($sql_WebApplicationDevelompment);
$stmt_WebApplicationDevelompment->execute();
$result_WebApplicationDevelompment = $stmt_WebApplicationDevelompment->get_result();



$sql_CyberLawandIT = "SELECT  * FROM tasks WHERE module_name = 'Cyber Law and IT' ORDER BY task_id DESC;";
$stmt_CyberLawandIT = $conn->prepare($sql_CyberLawandIT);
$stmt_CyberLawandIT->execute();
$result_CyberLawandIT  = $stmt_CyberLawandIT->get_result();


$sql_ObjectOrientedPrograming = "SELECT  * FROM tasks WHERE module_name = 'Object Oriented Programing' ORDER BY task_id DESC;";
$stmt_ObjectOrientedPrograming = $conn->prepare($sql_ObjectOrientedPrograming);
$stmt_ObjectOrientedPrograming->execute();
$result_ObjectOrientedPrograming = $stmt_ObjectOrientedPrograming->get_result();



$sql_AlgorithimAnalysisandDesign = "SELECT  * FROM tasks WHERE module_name = 'Algorithim Analysis and Design' ORDER BY task_id DESC;";
$stmt_AlgorithimAnalysisandDesign = $conn->prepare($sql_AlgorithimAnalysisandDesign);
$stmt_AlgorithimAnalysisandDesign->execute();
$result_AlgorithimAnalysisandDesign = $stmt_AlgorithimAnalysisandDesign->get_result();



$sql_ResearchMethodology = "SELECT  * FROM tasks WHERE module_name = 'Research Methodology' ORDER BY task_id DESC;";
$stmt_ResearchMethodology = $conn->prepare($sql_ResearchMethodology);
$stmt_ResearchMethodology->execute();
$result_ResearchMethodology  = $stmt_ResearchMethodology->get_result();


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
