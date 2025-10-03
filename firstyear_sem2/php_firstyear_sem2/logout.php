<?php 
session_start();
session_unset();
session_destroy();

header("Location: ../firstyear_sem2.php");
 ?>