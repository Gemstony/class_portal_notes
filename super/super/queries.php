<?php
include "config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sql_users = "SELECT  * FROM users ORDER BY user_id DESC;";
$stmt_users = $conn->prepare($sql_users);
$stmt_users->execute();
$result_users = $stmt_users->get_result();


$sql_fistyear_sem1 = "SELECT  * FROM tasks WHERE year = 'FIRST' AND semister = 'ONE' ORDER BY task_id DESC;";
$stmt_fistyear_sem1 = $conn->prepare($sql_fistyear_sem1);
$stmt_fistyear_sem1->execute();
$result_fistyear_sem1 = $stmt_fistyear_sem1->get_result();





$sql_fistyear_sem2 = "SELECT  * FROM tasks WHERE year = 'FIRST' AND semister = 'TWO' ORDER BY task_id DESC;";
$stmt_fistyear_sem2 = $conn->prepare($sql_fistyear_sem2);
$stmt_fistyear_sem2->execute();
$result_fistyear_sem2 = $stmt_fistyear_sem2->get_result();



$sql_secondyear_sem1 = "SELECT  * FROM tasks WHERE year = 'SECOND' AND semister = 'ONE' ORDER BY task_id DESC;";
$stmt_secondyear_sem1 = $conn->prepare($sql_secondyear_sem1);
$stmt_secondyear_sem1->execute();
$result_secondyear_sem1 = $stmt_secondyear_sem1->get_result();




$sql_secondyear_sem2 = "SELECT  * FROM tasks WHERE year = 'SECOND' AND semister = 'TWO' ORDER BY task_id DESC;";
$stmt_secondyear_sem2 = $conn->prepare($sql_secondyear_sem2);
$stmt_secondyear_sem2->execute();
$result_secondyear_sem2 = $stmt_secondyear_sem2->get_result();


$sql_total_tasks = "SELECT COUNT(*) AS alltasks FROM tasks;";
$stmt_total_tasks = $conn->prepare($sql_total_tasks);
$stmt_total_tasks->execute();
$result_total_tasks = $stmt_total_tasks->get_result();
$row_total_tasks = $result_total_tasks->fetch_assoc();


$sql_total_users = "SELECT COUNT(*) AS allusers FROM users;";
$stmt_total_users = $conn->prepare($sql_total_users);
$stmt_total_users->execute();
$result_total_users = $stmt_total_users->get_result();
$row_total_users = $result_total_users->fetch_assoc();


$sql_fistyear_sem1_notes = "SELECT COUNT(*) AS fistyear_sem1_notes FROM tasks WHERE year = 'FIRST' AND semister = 'ONE' ;";
$stmt_fistyear_sem1_notes = $conn->prepare($sql_fistyear_sem1_notes);
$stmt_fistyear_sem1_notes->execute();
$result_fistyear_sem1_notes = $stmt_fistyear_sem1_notes->get_result();
$row_fistyear_sem1_notes = $result_fistyear_sem1_notes->fetch_assoc();


$sql_fistyear_semtwo_notes = "SELECT COUNT(*) AS fistyear_semtwo_notes FROM tasks WHERE year = 'FIRST' AND semister = 'TWO' ;";
$stmt_fistyear_semtwo_notes = $conn->prepare($sql_fistyear_semtwo_notes);
$stmt_fistyear_semtwo_notes->execute();
$result_fistyear_semtwo_notes = $stmt_fistyear_semtwo_notes->get_result();
$row_fistyear_semtwo_notes = $result_fistyear_semtwo_notes->fetch_assoc();


$sql_secondyear_sem1_notes = "SELECT COUNT(*) AS secondyear_sem1_notes FROM tasks WHERE year = 'SECOND' AND semister = 'ONE' ;";
$stmt_secondyear_sem1_notes = $conn->prepare($sql_secondyear_sem1_notes);
$stmt_secondyear_sem1_notes->execute();
$result_secondyear_sem1_notes = $stmt_secondyear_sem1_notes->get_result();
$row_secondyear_sem1_notes = $result_secondyear_sem1_notes->fetch_assoc();



$sql_secondyear_semtwo_notes = "SELECT COUNT(*) AS secondyear_semtwo_notes FROM tasks WHERE year = 'FIRST' AND semister = 'TWO' ;";
$stmt_secondyear_semtwo_notes = $conn->prepare($sql_secondyear_semtwo_notes);
$stmt_secondyear_semtwo_notes->execute();
$result_secondyear_semtwo_notes = $stmt_secondyear_semtwo_notes->get_result();
$row_secondyear_semtwo_notes = $result_secondyear_semtwo_notes->fetch_assoc();



if (!empty($_SESSION['myid'])) {
    $myid = $_SESSION["myid"];



    $sql_user = "SELECT  * FROM users WHERE user_id = '$myid' AND year = 'SECOND';";
    $stmt_user = $conn->prepare($sql_user);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();
}
