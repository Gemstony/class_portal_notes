<?php 
session_start();
session_unset();
session_destroy();

header("Location: ../secondyear_sem1.php");
 ?>