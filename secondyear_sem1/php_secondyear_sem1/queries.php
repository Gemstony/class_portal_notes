<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




$sql_MathematicalStatistics = "SELECT  * FROM tasks WHERE module_name = 'Mathematical Statistics' ORDER BY task_id DESC;";
$stmt_MathematicalStatistics = $conn->prepare($sql_MathematicalStatistics);
$stmt_MathematicalStatistics->execute();
$result_MathematicalStatistics = $stmt_MathematicalStatistics->get_result();



$sql_OSAdminstration = "SELECT  * FROM tasks WHERE module_name = 'Operating System Adminstration' ORDER BY task_id DESC;";
$stmt_OSAdminstration = $conn->prepare($sql_OSAdminstration);
$stmt_OSAdminstration->execute();
$result_OSAdminstration  = $stmt_OSAdminstration->get_result();


$sql_DataCommunication = "SELECT  * FROM tasks WHERE module_name = 'Data Communication' ORDER BY task_id DESC;";
$stmt_DataCommunication = $conn->prepare($sql_DataCommunication);
$stmt_DataCommunication->execute();
$result_DataCommunication = $stmt_DataCommunication->get_result();



$sql_DataStructure = "SELECT  * FROM tasks WHERE module_name = 'Data Structure and Algorithims' ORDER BY task_id DESC;";
$stmt_DataStructure = $conn->prepare($sql_DataStructure);
$stmt_DataStructure->execute();
$result_DataStructure = $stmt_DataStructure->get_result();



$sql_ElectronicCommerce = "SELECT  * FROM tasks WHERE module_name = 'Electronic Commerce' ORDER BY task_id DESC;";
$stmt_ElectronicCommerce = $conn->prepare($sql_ElectronicCommerce);
$stmt_ElectronicCommerce->execute();
$result_ElectronicCommerce = $stmt_ElectronicCommerce->get_result();



$sql_DevelompmentStudies = "SELECT  * FROM tasks WHERE module_name = 'Develompment Studies' ORDER BY task_id DESC;";
$stmt_DevelompmentStudies = $conn->prepare($sql_DevelompmentStudies);
$stmt_DevelompmentStudies->execute();
$result_DevelompmentStudies = $stmt_DevelompmentStudies->get_result();


$sql_DatabaseSystem = "SELECT  * FROM tasks WHERE module_name = 'Database System' ORDER BY task_id DESC;";
$stmt_DatabaseSystem = $conn->prepare($sql_DatabaseSystem);
$stmt_DatabaseSystem->execute();
$result_DatabaseSystem = $stmt_DatabaseSystem->get_result();

$sql_ComputerizedAccounting = "SELECT  * FROM tasks WHERE module_name = 'Computerized Accounting' ORDER BY task_id DESC;";
$stmt_ComputerizedAccounting = $conn->prepare($sql_ComputerizedAccounting);
$stmt_ComputerizedAccounting->execute();
$result_ComputerizedAccounting = $stmt_ComputerizedAccounting->get_result();


if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_myuploads = "SELECT  * FROM tasks WHERE uploader_id = '$myid' ORDER BY task_id DESC;";
    $stmt_myuploads = $conn->prepare($sql_myuploads);
    $stmt_myuploads->execute();
    $result_myuploads = $stmt_myuploads->get_result();
}



if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_user = "SELECT  * FROM users WHERE user_id = '$myid' ;";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
}
