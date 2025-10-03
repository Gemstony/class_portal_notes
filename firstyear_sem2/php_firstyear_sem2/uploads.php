<?php
include "config.php";

if (isset($_POST['submit_f1'])) {
    $task_name = $_POST['task_name'];
    $task_type = $_POST['task_type'];
    $task_module = $_POST['task_module'];
    $myid = $_SESSION["myid"];
    $file = $_FILES['file'];


    $fileName = basename($file['name']);
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $allowed = ['pdf', 'doc', 'docx'];

    $maxFilesize = 3 * 1024 * 1024;

    if (in_array($fileExt, $allowed)) {
        if ($fileError === 0) {

            if ($fileSize > $maxFilesize) {
                $_SESSION['largefile'] = "Error: The file size exceed 2MB limit";
                header("Location: ../admin_firstyear_sem2.php");
                die();
            }
            $fileDestination = "../uploads/" . $fileName;


            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                $sql = "INSERT INTO tasks (task_name, task_type, module_name, file, fileDestination, year, semister, uploader_id)
                VALUES ('$task_name', '$task_type', '$task_module', '$fileName', '$fileDestination', 'FIRST', 'TWO', '$myid')";
                if ($conn->query($sql) === TRUE) {

                    $_SESSION["message"] = "file Uploaded Successfuly";
                    header("Location: ../admin_firstyear_sem2.php");
                } else {
                    "ERROR: " . $conn->error;
                }
            } else {
                die("<script>alert('Sorry there was some Error during file uploading, please try again!');
                window.location.href='../admin_firstyear_sem2.php';
                </script>;");
            }
        } else {
            die("<script>alert('invalid file format only PDF and DOC are allowed');
            window.location.href='../admin_firstyear_sem2.php';
            </script>;");
        }
    }else {
        $_SESSION['invalidfile'] = "invalid file, Ony PDF or DOC allowed";
        header("Location: ../admin_secondyear_sem1.php");
        die();
    }
}

$conn->close();
