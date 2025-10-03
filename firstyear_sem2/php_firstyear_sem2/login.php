<?php
include "config.php";



//to get user input from our login page
$user_name = $_POST["user_name"];
$pass_word = $_POST["pass_word"];


//preparing to bind the inputs
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password =? AND (year = 'FIRST' OR role = 'SUPER'); ");
$stmt->bind_param("ss", $user_name, $pass_word);

//making statement execute
$stmt->execute();

//to store the results
$stmt->store_result();


if ($user_name == "" or $pass_word == "") {
    die("<script>alert('username and passsword can not be empty');
    </script>;");
    header("Location: ../firstyear_sem2.php");
}
//checking if user exist
if ($stmt->num_rows > 0) {
    $user_name;
    $sql = "SELECT user_id FROM users WHERE username = '$user_name' AND (year = 'FIRST' OR role = 'SUPER');";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $sessionExpireTime = 900;
    if (!isset($_SESSION['myid'])) {
        $_SESSION["myid"] = $row['user_id'];
        $_SESSION["idExpireTime"] = time() + $sessionExpireTime;
    }



    $_SESSION["welcome"] = "Welcome, $user_name ";
    header("Location: ../admin_firstyear_sem2.php");
    exit();
} else {
    session_destroy();
    session_start();
    $_SESSION['invalidLogin'] = "Wrong Password Or Username<span class='icon'>&#128542;</span> ";
    header("Location: ../firstyear_sem2.php");
}

$stmt->close();
$conn->close();
