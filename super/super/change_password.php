<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $myid = $_SESSION['superid'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $verify_new_password = $_POST['verify_new_password'];

    $sql = "SELECT * FROM users WHERE user_id = '$myid' AND password = '$old_password' ;";
    $results = $conn->query($sql);




    if ($results->num_rows > 0) {
        if ($new_password == $verify_new_password) {

            $stmt2 = $conn->prepare("UPDATE users SET password = ? WHERE user_id = '$myid';");
            $stmt2->bind_param("s", $verify_new_password);
            $stmt2->execute();
            $stmt2->store_result();


            $_SESSION['passwordchanged'] = "Congraturations: password changed Successfully";
        } else {


            $_SESSION['passverifyerror'] = "Errors: Incorrect Verifying password ";
        }
    } else {
        echo "";
        $_SESSION['wrongoldpass'] = "Errors: Wrong Old password please Try again ";
    }
}

header("Location: ../super.php");
exit();
