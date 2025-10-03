<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="container">


        <h2>Super<span class="icon">&#128515;</span></h2>

        <form action="super/login.php" method="post">
            <input type="text" name="user_name" required placeholder="Super Username...">
            <input type="password" name="pass_word" required placeholder="My Secret...">
            <input type="submit" name="submit" value="Login">

        </form>
        <p style="color: #E74C3C;">
            <?php if (!empty($_SESSION['invalidLogin'])) {
                echo $_SESSION["invalidLogin"];
                unset($_SESSION["invalidLogin"]);
            }

            ?>
        </p>


    </div>

</body>

</html>