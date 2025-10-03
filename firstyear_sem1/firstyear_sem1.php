<?php
include "php_firstyear_sem1/config.php";

include "php_firstyear_sem1/queries.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Year</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <div class="ModuleContainer" id="modulesection">
            <div class="module-section">
                <!-------------------------SIDE BAR  ----------------->
                <div class="sidebar" id="sidebar">
                    <div class="tittle">
                        <h1>Modules</h1>
                    </div>



                    <ul>
                        <li onclick="programingbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Programing (C)</p>
                        </li>
                        <li onclick="BusnessCommunicationbtn()"><span class="icon">&#128193;</span>&nbsp;<p>B/Communication Skills</p>
                        </li>
                        <li onclick="ComputerArchtecturebtn()"><span class="icon">&#128193;</span>&nbsp;<p>C/Archtecture & Design</p>
                        </li>
                        <li onclick="BusnessInformationbtn()"><span class="icon">&#128193;</span>&nbsp;<p>B/Information System</p>
                        </li>
                        <li onclick="FundamentalMathematicsbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Fundamental Math</p>
                        </li>
                        <li onclick="LinearAlgebrabtn()"><span class="icon">&#128193;</span>&nbsp;<p>Linear Algebra</p>
                        </li>
                        <li onclick="loginbtn()"><span class="icon">&#128228;</span>&nbsp;<p>Upload New</p>
                        </li>
                        <li><a href="../index.php"><span class="icon">&#127968;</span>&nbsp;<p>Home</p></a></li>
                    </ul>

                    <script src="scripts_firstyear_sem1.js"></script>
                </div>

                <!-------------------------END SIDE BAR  ----------------->



                <div class="contents">
                    <!-------------HEADER------------------>
                    <div class="header">

                        <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                        <h1>IT & CS PORTAL (1st Year 1st Semister)</h1>
                        <div class="opensidebar">
                            <span class="menu" onclick="opensidebar()">&#9776;</span>
                        </div>
                    </div>
                    <!--------------END HEADER------------------>


                    <!-------------------------MAIN CONTENTS  ----------------->


                    <div class="contents2">

                        <!-----############################ FIRST YEAR (SEMISTER 1) ##########################--------------------------->
                        <!-----------------------BusnessInformation---------------------------------->
                        <div class="BusinessInformation" id="BusnessInformation" style="display:none;">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>B/Information System </h3>";

                                        if ($result_BusnessInformation->num_rows > 0) {
                                            while ($row_BusnessInformation = $result_BusnessInformation->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_BusnessInformation['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_BusnessInformation['task_name'] . "</h3>
            <p><span>" . $row_BusnessInformation['task_type'] . ":  </span> " . $row_BusnessInformation['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!----------------------- END BusnessInformation---------------------------------->



                        <!-----------------------programing---------------------------------->

                        <div class="programing" id="programing">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Programing (C) </h3>";

                                        if ($result_programing->num_rows > 0) {
                                            while ($row_programing = $result_programing->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_programing['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_programing['task_name'] . "</h3>
            <p><span>" . $row_programing['task_type'] . ":  </span> " . $row_programing['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <!----------------------- programing---------------------------------->



                        <!-----------------------BusnessCommunication---------------------------------->
                        <div class="BusnessCommunication" style="display:none;" id="BusnessCommunication">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>B/Communication Skills </h3>";

                                        if ($result_BusnessCommunication->num_rows > 0) {
                                            while ($row_BusnessCommunication = $result_BusnessCommunication->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_BusnessCommunication['fileDestination'];
                                                echo " <tr><td>
                                                        <div class='notes'>
                                                        <a href='$filePath' download>
                                                        <img src='../ICONS/pdf2.png' alt=''>
                                                        </a> 
                                                        <div class='about-notes'>
                                                            <h3>" . $row_BusnessCommunication['task_name'] . "</h3>
                                                            <p><span>" . $row_BusnessCommunication['task_type'] . ":  </span> " . $row_BusnessCommunication['date_aded'] . "</p>
                                                        </div>
                                                    
                                                    </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END BusnessCommunication---------------------------------->



                        <!-----------------------ComputerArchtecture---------------------------------->
                        <div class="ComputerArchtecture" style="display:none;" id="ComputerArchtecture">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>C/Archtecture & Design </h3>";

                                        if ($result_ComputerArchtecture->num_rows > 0) {
                                            while ($row_ComputerArchtecture = $result_ComputerArchtecture->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_ComputerArchtecture['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ComputerArchtecture['task_name'] . "</h3>
            <p><span>" . $row_ComputerArchtecture['task_type'] . ":  </span> " . $row_ComputerArchtecture['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END ComputerArchtecture---------------------------------->





                        <!-----------------------FundamentalMathematics---------------------------------->
                        <div class="FundamentalMathematics" style="display:none;" id="FundamentalMathematics">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Fundamental Mathematics</h3>";
                                        if ($result_FundamentalMathematics->num_rows > 0) {
                                            while ($row_FundamentalMathematics = $result_FundamentalMathematics->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_FundamentalMathematics['fileDestination'];

                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_FundamentalMathematics['task_name'] . "</h3>
            <p><span>" . $row_FundamentalMathematics['task_type'] . ":  </span> " . $row_FundamentalMathematics['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END FundamentalMathematics---------------------------------->





                        <!-----------------------LinearAlgebra---------------------------------->
                        <div class="LinearAlgebra" style="display:none;" id="LinearAlgebra">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Linear Algebra </h3>";

                                        if ($result_LinearAlgebra->num_rows > 0) {
                                            while ($row_LinearAlgebra = $result_LinearAlgebra->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem1/" . $row_LinearAlgebra['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_LinearAlgebra['task_name'] . "</h3>
            <p><span>" . $row_LinearAlgebra['task_type'] . ":  </span> " . $row_LinearAlgebra['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END LinearAlgebra---------------------------------->




                        <div class="contents-holder" id="loginForm" style="display: none;">

                            <h2>CR's ONLY <span class="icon">&#128515;</span></h2>
                            <div class="login">
                                <form action="php_firstyear_sem1/login.php" method="post">
                                    <input type="text" name="user_name" required placeholder="Enter Username...">
                                    <input type="password" name="pass_word" required placeholder="Enter Password...">
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

                        </div>
                        <!-----############################ FIRST YEAR (SEMISTER 1) ##########################--------------------------->


                    </div>



                    <!-------------------------END MAIN CONTENTS  ----------------->

                </div>
            </div>


        </div>
    </div>


    <footer>


        <div class="child-footer">
            <div class="images">
                <img src="../ICONS/scar.png" alt="">
                <div class="informations">
                    <h4>Developed By </h4>
                    <p style="font-size:1.1em;">Scar</p>
                    <a class="needhelp" href="https://wa.me/255615419810" target="_blank">Powered By @ScarTechWorks</a>
                </div>

            </div>

            <div class="social">
                <div class="social-icons">
                    <a href="https://www.facebook.com/jamex.marwa" target="_blank">
                        <img src="../ICONS/FACEB.png" alt="Facebook">
                    </a>
                    <a href="https://instagram.com/scartechworks?igsh=YzIjYTK10Dg3Zg==" target="_blank">
                        <img src="../ICONS/INSTA.png" alt="Instagram">
                    </a>
                    <a href="https://wa.me/255653709810" target="_blank">
                        <img src="../ICONS/WHATSAPP.png" alt="WhatsApp">
                    </a>

                </div>
            </div>
        </div>


        <div class="child2-footer">
            <div class="images">
                <img src="../ICONS/wandiba.jpg" alt="">
                <div class="informations">
                    <h4>Designed By</h4>
                    <p> Bravan Wandiba</p>
                    <a class="needhelp" href="https://wa.me/255755626428" target="_blank">Need Help?</a>

                </div>
            </div>
            <div class="social">
                <div class="social-icons">
                    <a href="https://www.facebook.com/bravan.wandiba.7" target="_blank">
                        <img src="../ICONS/FACEB.png" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/ict.bravan?igsh=MXBwYm5vdGZ6dWR2aQ==" target="_blank">
                        <img src="../ICONS/INSTA.png" alt="Instagram">
                    </a>
                    <a href="https://wa.me/255755626428" target="_blank">
                        <img src="../ICONS/WHATSAPP.png" alt="WhatsApp">
                    </a>

                </div>
            </div>
        </div>

    </footer>

    <script src="scripts_firstyear_sem1.js"></script>
</body>

</html>