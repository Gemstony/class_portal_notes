<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_name = $_POST['user_name'];
    $course = $_POST['course'];
    $phone_number = $_POST['phone_number'];
    $year = $_POST['year'];
    $role = $_POST['role'];


    $sql = "INSERT INTO users(username, password, course, year, profileimage,  phone_number,  role)
            VALUES ('$user_name', 'newadmin', '$course', '$year', 'profiles/profile.png', '$phone_number', '$role');";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $_SESSION['useraded'] = "Congraturations: User aded Successflly";
    } else {
        $_SESSION['usererror'] = "Error: Failed to add New user";
    }

    header("Location: ../super.php");
}
