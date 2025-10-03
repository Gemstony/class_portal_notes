<?php
include "php_firstyear_sem2/config.php";

include "php_firstyear_sem2/queries.php";



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
                        <li onclick="OperatingSystembtn()"><span class="icon">&#128193;</span>&nbsp;<p>Operating System</p>
                        </li>
                        <li onclick="ComputerNetworkingbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Computer Networking</p>
                        </li>
                        <li onclick="DatabaseManagementbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Database Management</p>
                        </li>
                        <li onclick="WebDevelopmentbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Web Development</p>
                        </li>
                        <li onclick="FunctionVariablebtn()"><span class="icon">&#128193;</span>&nbsp;<p>Function /Variable</p>
                        </li>
                        <li onclick="EventDrivenbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Event Driven</p>
                        </li>
                        <li onclick="SystemAnalysisbtn()"><span class="icon">&#128193;</span>&nbsp;<p>System Analysis</p>
                        </li>
                        <li onclick="loginbtn()"><span class="icon">&#128228;</span>&nbsp;<p>Upload New</p>
                        </li>
                        <li><a href="../index.php"><span class="icon">&#127968;</span>&nbsp;<p>Home</p></a></li>
                    </ul>

                    <script src="scripts_firstyear_sem2.js"></script>
                </div>

                <!-------------------------END SIDE BAR  ----------------->



                <div class="contents">
                    <!-------------HEADER------------------>
                    <div class="header">

                        <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                        <h1>IT & CS PORTAL (1st Year 2nd Semister)</h1>
                        <div class="opensidebar">
                            <span class="menu" onclick="opensidebar()">&#9776;</span>
                        </div>
                    </div>
                    <!--------------END HEADER------------------>


                    <!-------------------------MAIN CONTENTS  ----------------->


                    <div class="contents2">

                        <!-----############################ FIRST YEAR (SEMISTER 1) ##########################--------------------------->
                        <!-----------------------OperatingSystem---------------------------------->
                        <div class="OperatingSystemcl" id="OperatingSystem">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Operating System </h3>";

                                        if ($result_OperatingSystem->num_rows > 0) {
                                            while ($row_OperatingSystem = $result_OperatingSystem->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_OperatingSystem['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_OperatingSystem['task_name'] . "</h3>
            <p><span>" . $row_OperatingSystem['task_type'] . ":  </span> " . $row_OperatingSystem['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!----------------------- END OperatingSystem---------------------------------->



                        <!-----------------------ComputerNetworking---------------------------------->

                        <div class="ComputerNetworkingcl" id="ComputerNetworking" style="display: none;">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Computer Networking</h3>";

                                        if ($result_ComputerNetworking->num_rows > 0) {
                                            while ($row_ComputerNetworking = $result_ComputerNetworking->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_ComputerNetworking['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ComputerNetworking['task_name'] . "</h3>
            <p><span>" . $row_ComputerNetworking['task_type'] . ":  </span> " . $row_ComputerNetworking['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <!----------------------- ComputerNetworking---------------------------------->



                        <!-----------------------DatabaseManagement---------------------------------->
                        <div class="DatabaseManagementcl" style="display:none;" id="DatabaseManagement">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Database Management </h3>";

                                        if ($result_DatabaseManagement->num_rows > 0) {
                                            while ($row_DatabaseManagement = $result_DatabaseManagement->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_DatabaseManagement['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_DatabaseManagement['task_name'] . "</h3>
            <p><span>" . $row_DatabaseManagement['task_type'] . ":  </span> " . $row_DatabaseManagement['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END DatabaseManagement---------------------------------->



                        <!-----------------------WebDevelopment---------------------------------->
                        <div class="WebDevelopmentcl" style="display:none;" id="WebDevelopment">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Web Development </h3>";

                                        if ($result_WebDevelopment->num_rows > 0) {
                                            while ($row_WebDevelopment = $result_WebDevelopment->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_WebDevelopment['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_WebDevelopment['task_name'] . "</h3>
            <p><span>" . $row_WebDevelopment['task_type'] . ":  </span> " . $row_WebDevelopment['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END WebDevelopment---------------------------------->





                        <!-----------------------FunctionVariable---------------------------------->
                        <div class="FunctionVariablecl" style="display:none;" id="FunctionVariable">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Function of single Variable</h3>";
                                        if ($result_FunctionVariable->num_rows > 0) {
                                            while ($row_FunctionVariable = $result_FunctionVariable->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_FunctionVariable['fileDestination'];

                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_FunctionVariable['task_name'] . "</h3>
            <p><span>" . $row_FunctionVariable['task_type'] . ":  </span> " . $row_FunctionVariable['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END FunctionVariable---------------------------------->





                        <!-----------------------EventDrivenPrograming---------------------------------->
                        <div class="EventDrivenProgramingcl" style="display:none;" id="EventDrivenPrograming">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>Event Driven Programing </h3>";

                                        if ($result_EventDrivenPrograming->num_rows > 0) {
                                            while ($row_EventDrivenPrograming = $result_EventDrivenPrograming->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_EventDrivenPrograming['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_EventDrivenPrograming['task_name'] . "</h3>
            <p><span>" . $row_EventDrivenPrograming['task_type'] . ":  </span> " . $row_EventDrivenPrograming['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END EventDrivenPrograming---------------------------------->




                        <!-----------------------SYSTEM ANALYSIS AND DESIGN---------------------------------->
                        <div class="SystemAnalysiscl" style="display:none;" id="SystemAnalysis">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php


                                        echo  "<h3 style='color: #333;'>System Analysis and Design </h3>";

                                        if ($result_SystemAnalysis->num_rows > 0) {
                                            while ($row_SystemAnalysis = $result_SystemAnalysis->fetch_assoc()) {
                                                $filePath = "php_firstyear_sem2/" . $row_SystemAnalysis['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_SystemAnalysis['task_name'] . "</h3>
            <p><span>" . $row_SystemAnalysis['task_type'] . ":  </span> " . $row_SystemAnalysis['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END SYSTEM ANALYSIS AND DESIGN---------------------------------->





                        <div class="contents-holder" id="loginForm" style="display: none;">

                            <h2>CR's ONLY <span class="icon">&#128515;</span></h2>
                            <div class="login">
                                <form action="php_firstyear_sem2/login.php" method="post">
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


    <script src="scripts_firstyear_sem2.js"></script>
</body>

</html>