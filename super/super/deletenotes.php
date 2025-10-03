<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $notesid = $_POST['notesid'];

    $sql = "DELETE FROM tasks WHERE task_id = '$notesid';";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {

        $_SESSION['notesdeleted'] = "Congraturations: Notes deleted successfuly";
    } else {

        $_SESSION['errordelnotes'] = "Error: Occured while deleteting Notes";
    }

    $stmt->close();
    $conn->close();

    header("Location: ../super.php");
}
