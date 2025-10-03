<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$sql_BusnessInformation = "SELECT  * FROM tasks WHERE module_name = 'B/Information System' ORDER BY task_id DESC;";
$stmt_BusnessInformation = $conn->prepare($sql_BusnessInformation);
$stmt_BusnessInformation->execute();
$result_BusnessInformation = $stmt_BusnessInformation->get_result();



$sql_programing = "SELECT  * FROM tasks WHERE module_name = 'programing (C)' ORDER BY task_id DESC;";
$stmt_programing = $conn->prepare($sql_programing);
$stmt_programing->execute();
$result_programing = $stmt_programing->get_result();


$sql_BusnessCommunication = "SELECT  * FROM tasks WHERE module_name = 'B/Communication Skills' ORDER BY task_id DESC;";
$stmt_BusnessCommunication = $conn->prepare($sql_BusnessCommunication);
$stmt_BusnessCommunication->execute();
$result_BusnessCommunication = $stmt_BusnessCommunication->get_result();



$sql_ComputerArchtecture = "SELECT  * FROM tasks WHERE module_name = 'C/Archtecture & Design' ORDER BY task_id DESC;";
$stmt_ComputerArchtecture = $conn->prepare($sql_ComputerArchtecture);
$stmt_ComputerArchtecture->execute();
$result_ComputerArchtecture = $stmt_ComputerArchtecture->get_result();



$sql_FundamentalMathematics = "SELECT  * FROM tasks WHERE module_name = 'Fundamental Mathematics' ORDER BY task_id DESC;";
$stmt_FundamentalMathematics = $conn->prepare($sql_FundamentalMathematics);
$stmt_FundamentalMathematics->execute();
$result_FundamentalMathematics = $stmt_FundamentalMathematics->get_result();



$sql_LinearAlgebra = "SELECT  * FROM tasks WHERE module_name = 'Linear Algebra'ORDER BY task_id DESC;";
$stmt_LinearAlgebra = $conn->prepare($sql_LinearAlgebra);
$stmt_LinearAlgebra->execute();
$result_LinearAlgebra = $stmt_LinearAlgebra->get_result();




if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_myuploads = "SELECT  * FROM tasks WHERE uploader_id = '$myid' ORDER BY task_id DESC;";
    $stmt_myuploads = $conn->prepare($sql_myuploads);
    $stmt_myuploads->execute();
    $result_myuploads = $stmt_myuploads->get_result();
}



if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_user = "SELECT * FROM users WHERE user_id = '$myid';";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
}
