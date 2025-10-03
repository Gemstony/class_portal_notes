<?php
include "php_secondyear_sem1/config.php";

include "php_secondyear_sem1/queries.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Year</title>
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
                        <li onclick="MathematicalStatisticsbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Mathematical Statistics</p>
                        </li>
                        <li onclick="OSAdminstrationbtn()"><span class="icon">&#128193;</span>&nbsp;<p>OS Adminstration</p>
                        </li>
                        <li onclick="DataCommunicationbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Data Communication</p>
                        </li>
                        <li onclick="DataStructurebtn()"><span class="icon">&#128193;</span>&nbsp;<p>Data Structure</p>
                        </li>
                        <li onclick="ElectronicCommercebtn()"><span class="icon">&#128193;</span>&nbsp;<p>Electronic Commerce</p>
                        </li>
                        <li onclick="DevelompmentStudiesbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Develompment Studies</p>
                        </li>
                        <li onclick="DatabaseSystembtn()"><span class="icon">&#128193;</span>&nbsp;<p>Database System</p>
                        </li>
                        <li onclick="ComputerizedAccountingbtn()"><span class="icon">&#128193;</span>&nbsp;<p>C/rized Accounting</p>
                        </li>
                        <li onclick="loginbtn()"><span class="icon">&#128228;</span>&nbsp;<p>Upload New</p>
                        </li>
                        <li><a href="../index.php"><span class="icon">&#127968;</span>&nbsp;<p>Home</p></a></li>
                    </ul>

                    <script src="scripts_secondyear_sem1.js"></script>
                </div>

                <!-------------------------END SIDE BAR  ----------------->



                <div class="contents">
                    <!-------------HEADER------------------>
                    <div class="header">

                        <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                        <h1>IT & CS PORTAL (2nd Year 1st Semister)</h1>
                        <div class="opensidebar">
                            <span class="menu" onclick="opensidebar()">&#9776;</span>
                        </div>
                    </div>
                    <!--------------END HEADER------------------>


                    <!-------------------------MAIN CONTENTS  ----------------->


                    <div class="contents2">

                        <!-----############################ FIRST YEAR (SEMISTER 1) ##########################--------------------------->
                        <!-----------------------MathematicalStatistics---------------------------------->
                        <div class="MathematicalStatistics" id="MathematicalStatistics">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Mathematical Statistics </h3>";

                                        if ($result_MathematicalStatistics->num_rows > 0) {
                                            while ($row_MathematicalStatistics = $result_MathematicalStatistics->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_MathematicalStatistics['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_MathematicalStatistics['task_name'] . "</h3>
            <p><span>" . $row_MathematicalStatistics['task_type'] . ":  </span> " . $row_MathematicalStatistics['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!----------------------- END MathematicalStatistics---------------------------------->



                        <!-----------------------OSAdminstration---------------------------------->

                        <div class="OSAdminstration" id="OSAdminstration" style="display: none;">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Operating System Adminstration </h3>";

                                        if ($result_OSAdminstration->num_rows > 0) {
                                            while ($row_OSAdminstration = $result_OSAdminstration->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_OSAdminstration['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_OSAdminstration['task_name'] . "</h3>
            <p><span>" . $row_OSAdminstration['task_type'] . ":  </span> " . $row_OSAdminstration['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <!----------------------- OSAdminstration---------------------------------->



                        <!-----------------------DataCommunication ---------------------------------->
                        <div class="DataCommunication " style="display:none;" id="DataCommunication">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Data Communication </h3>";

                                        if ($result_DataCommunication->num_rows > 0) {
                                            while ($row_DataCommunication = $result_DataCommunication->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_DataCommunication['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_DataCommunication['task_name'] . "</h3>
            <p><span>" . $row_DataCommunication['task_type'] . ":  </span> " . $row_DataCommunication['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END DataCommunication ---------------------------------->



                        <!-----------------------DataStructure---------------------------------->
                        <div class="DataStructure" style="display:none;" id="DataStructure">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Data Structure and Algorithims</h3>";

                                        if ($result_DataStructure->num_rows > 0) {
                                            while ($row_DataStructure = $result_DataStructure->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_DataStructure['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_DataStructure['task_name'] . "</h3>
            <p><span>" . $row_DataStructure['task_type'] . ":  </span> " . $row_DataStructure['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END DataStructure---------------------------------->





                        <!-----------------------ElectronicCommerce---------------------------------->
                        <div class="ElectronicCommerce" style="display:none;" id="ElectronicCommerce">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php
                                        echo  "<h3 style='color: #333;'>Electronic Commerce</h3>";

                                        if ($result_ElectronicCommerce->num_rows > 0) {
                                            while ($row_ElectronicCommerce = $result_ElectronicCommerce->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_ElectronicCommerce['fileDestination'];

                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ElectronicCommerce['task_name'] . "</h3>
            <p><span>" . $row_ElectronicCommerce['task_type'] . ":  </span> " . $row_ElectronicCommerce['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END ElectronicCommerce---------------------------------->





                        <!-----------------------DevelompmentStudies---------------------------------->
                        <div class="DevelompmentStudies" style="display:none;" id="DevelompmentStudies">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Develompment Studies</h3>";

                                        if ($result_DevelompmentStudies->num_rows > 0) {
                                            while ($row_DevelompmentStudies = $result_DevelompmentStudies->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_DevelompmentStudies['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_DevelompmentStudies['task_name'] . "</h3>
            <p><span>" . $row_DevelompmentStudies['task_type'] . ":  </span> " . $row_DevelompmentStudies['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END DevelompmentStudies---------------------------------->




                        <!-----------------------DatabaseSystem---------------------------------->
                        <div class="DatabaseSystem" style="display:none;" id="DatabaseSystem">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Database System</h3>";

                                        if ($result_DatabaseSystem->num_rows > 0) {
                                            while ($row_DatabaseSystem = $result_DatabaseSystem->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_DatabaseSystem['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_DatabaseSystem['task_name'] . "</h3>
            <p><span>" . $row_DatabaseSystem['task_type'] . ":  </span> " . $row_DatabaseSystem['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END DatabaseSystem---------------------------------->





                        <!-----------------------COMPUTERIZED ACCOUNTING--------------------------------->
                        <div class="ComputerizedAccounting" style="display:none;" id="ComputerizedAccounting">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Computerized Accounting</h3>";
                                        if ($result_ComputerizedAccounting->num_rows > 0) {
                                            while ($row_ComputerizedAccounting = $result_ComputerizedAccounting->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem1/" . $row_ComputerizedAccounting['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ComputerizedAccounting['task_name'] . "</h3>
            <p><span>" . $row_ComputerizedAccounting['task_type'] . ":  </span> " . $row_ComputerizedAccounting['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END COMPUTERIZED ACCOUNTING---------------------------------->



                        <div class="contents-holder" id="loginForm" style="display: none;">

                            <h2>CR's ONLY <span class="icon">&#128515;</span></h2>
                            <div class="login">
                                <form action="php_secondyear_sem1/login.php" method="post">
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
                    <p>Bravan Wandiba</p>
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


    <script src="scripts_secondyear_sem1.js"></script>
</body>

</html>