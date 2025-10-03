<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $notesid = $_POST['notesid'];

    $sql = "DELETE FROM tasks WHERE task_id = '$notesid';";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {

        $_SESSION['notesdeleted'] = "Notes deleted successfuly";
    } else {

        $_SESSION['notesdeleted'] = "Error: while deleting the notes";
    }

    header("Location: ../admin_secondyear_sem2.php");

    $stmt->close();
    $conn->close();
}
