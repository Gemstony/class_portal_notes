<?php
include "config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $myid = $_POST['myid'];
    $user_name = $_POST['user_name'];
    $course = $_POST['course'];
    $phone_number = $_POST['phone_number'] ;
    $profileimage = $_FILES['profileimage'];

    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $myid);
    $stmt->execute();
    $result = $stmt->get_result();
    $row=$result->fetch_assoc();

    if(!$myid){
        die("Error: user not found");
    }

 

    if (isset($profileimage) && $profileimage['error'] === 0){
        $profileimagePath = 'profiles/' . basename($profileimage['name']);
        move_uploaded_file($profileimage['tmp_name'], $profileimagePath);

    }else{
        $profileimagePath = $row['profileimage'];
    }
    


   

    $sql="UPDATE users SET username = ?, course= ?, phone_number = ?, profileimage = ? WHERE user_id = ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ssiss", $user_name, $course, $phone_number, $profileimagePath, $myid  );
    


    if ($stmt->execute()){
        $result = $stmt->get_result();
        $_SESSION['updated'] ="Your profile has Updated Successfully!";
        header("Location: ../admin_secondyear_sem1.php");
        exit();
      
       

    }else{
        $_SESSION['updatedError'] ="Error Occured Profile Not updated!";
        header("Location: ../admin_secondyear_sem1.php");
    }

}



?>