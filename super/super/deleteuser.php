<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $userid = $_POST['userid'];
    echo $userid;

    $sql = "DELETE FROM users WHERE user_id = '$userid';";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {

        $_SESSION['userdeleted'] = "Congraturations: User deleted successfuly";
    } else {
        $_SESSION['errordeluser'] = "Error: Occured while deleting user";
    }
    header("Location: ../super.php");
    $stmt->close();
    $conn->close();
}
