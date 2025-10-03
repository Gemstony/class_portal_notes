<?php
include "php_secondyear_sem2/config.php";

include "php_secondyear_sem2/queries.php";



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
                        <li onclick="WebApplicationDvtbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Web Application Dvt</p>
                        </li>
                        <li onclick="CyberlawandITbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Cyber law and IT</p>
                        </li>
                        <li onclick="OOProgramingbtn()"><span class="icon">&#128193;</span>&nbsp;<p>O.O Programing</p>
                        </li>
                        <li onclick="AlgorithimAnalysisbtn()"><span class="icon">&#128193;</span>&nbsp;<p>Algorithim Analysis</p>
                        </li>
                        <li onclick="ResearchMethodologybtn()"><span class="icon">&#128193;</span>&nbsp;<p>Research Methodology</p>
                        </li>
                        <li onclick="loginbtn()"><span class="icon">&#128228;</span>&nbsp;<p>Upload New</p>
                        </li>
                        <li><a href="../index.php"><span class="icon">&#127968;</span>&nbsp;<p>Home</p></a></li>
                    </ul>

                    <script src="scripts_secondyear_sem2.js"></script>
                </div>

                <!-------------------------END SIDE BAR  ----------------->



                <div class="contents">
                    <!-------------HEADER------------------>
                    <div class="header">

                        <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                        <h1>IT & CS PORTAL (2nd Year 2nd Semister)</h1>
                        <div class="opensidebar">
                            <span class="menu" onclick="opensidebar()">&#9776;</span>
                        </div>
                    </div>
                    <!--------------END HEADER------------------>


                    <!-------------------------MAIN CONTENTS  ----------------->


                    <div class="contents2">

                        <!-----############################ FIRST YEAR (SEMISTER 1) ##########################--------------------------->
                        <!-----------------------WebApplicationDevelompment---------------------------------->
                        <div class="WebApplicationDevelompment" id="WebApplicationDevelompment">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Web Application Develompment</h3>";

                                        if ($result_WebApplicationDevelompment->num_rows > 0) {
                                            while ($row_WebApplicationDevelompment = $result_WebApplicationDevelompment->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem2/" . $row_WebApplicationDevelompment['fileDestination'];
                                                echo " <tr><td>
                                                    <div class='notes'>
                                                    <a href='$filePath' download>
                                                    <img src='../ICONS/pdf2.png' alt=''>
                                                    </a> 
                                                    <div class='about-notes'>
                                                        <h3>" . $row_WebApplicationDevelompment['task_name'] . "</h3>
                                                        <p><span>" . $row_WebApplicationDevelompment['task_type'] . ":  </span> " . $row_WebApplicationDevelompment['date_aded'] . "</p>
                                                    </div>
                                                
                                                </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!----------------------- END WebApplicationDevelompment---------------------------------->



                        <!-----------------------CyberLawandIT---------------------------------->

                        <div class="CyberLawandIT" id="CyberLawandIT" style="display: none;">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Cyber Law and IT</h3>";

                                        if ($result_CyberLawandIT->num_rows > 0) {
                                            while ($row_CyberLawandIT = $result_CyberLawandIT->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem2/" . $row_CyberLawandIT['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_CyberLawandIT['task_name'] . "</h3>
            <p><span>" . $row_CyberLawandIT['task_type'] . ":  </span> " . $row_CyberLawandIT['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <!----------------------- CyberLawandIT---------------------------------->



                        <!-----------------------ObjectOrientedPrograming---------------------------------->
                        <div class="ObjectOrientedPrograming" style="display:none;" id="ObjectOrientedPrograming">
                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Object Oriented Programing</h3>";

                                        if ($result_ObjectOrientedPrograming->num_rows > 0) {
                                            while ($row_ObjectOrientedPrograming = $result_ObjectOrientedPrograming->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem2/" . $row_ObjectOrientedPrograming['fileDestination'];
                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ObjectOrientedPrograming['task_name'] . "</h3>
            <p><span>" . $row_ObjectOrientedPrograming['task_type'] . ":  </span> " . $row_ObjectOrientedPrograming['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END ObjectOrientedPrograming---------------------------------->



                        <!-----------------------AlgorithimAnalysisandDesign---------------------------------->
                        <div class="AlgorithimAnalysisandDesign" style="display:none;" id="AlgorithimAnalysisandDesign">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php

                                        echo  "<h3 style='color: #333;'>Algorithim Analysis and Design</h3>";

                                        if ($result_AlgorithimAnalysisandDesign->num_rows > 0) {
                                            while ($row_AlgorithimAnalysisandDesign = $result_AlgorithimAnalysisandDesign->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem2/" . $row_AlgorithimAnalysisandDesign['fileDestination'];
                                                echo " <tr><td>
                                            <div class='notes'>
                                            <a href='$filePath' download>
                                            <img src='../ICONS/pdf2.png' alt=''>
                                            </a> 
                                            <div class='about-notes'>
                                                <h3>" . $row_AlgorithimAnalysisandDesign['task_name'] . "</h3>
                                                <p><span>" . $row_AlgorithimAnalysisandDesign['task_type'] . ":  </span> " . $row_AlgorithimAnalysisandDesign['date_aded'] . "</p>
                                            </div>
                                        
                                        </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END AlgorithimAnalysisandDesign---------------------------------->





                        <!-----------------------ResearchMethodology---------------------------------->
                        <div class="ResearchMethodology" style="display:none;" id="ResearchMethodology">

                            <div class="contents-holder">

                                <table>
                                    <tbody>

                                        <?php
                                        echo  "<h3 style='color: #333;'>Research Methodology</h3>";
                                        if ($result_ResearchMethodology->num_rows > 0) {
                                            while ($row_ResearchMethodology = $result_ResearchMethodology->fetch_assoc()) {
                                                $filePath = "php_secondyear_sem2/" . $row_ResearchMethodology['fileDestination'];

                                                echo " <tr><td>
        <div class='notes'>
        <a href='$filePath' download>
        <img src='../ICONS/pdf2.png' alt=''>
         </a> 
        <div class='about-notes'>
            <h3>" . $row_ResearchMethodology['task_name'] . "</h3>
            <p><span>" . $row_ResearchMethodology['task_type'] . ":  </span> " . $row_ResearchMethodology['date_aded'] . "</p>
        </div>
       
       </td></tr> ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <!----------------------- END ResearchMethodology---------------------------------->





                        <div class="contents-holder" id="loginForm" style="display: none;">

                            <h2>CR's ONLY <span class="icon">&#128515;</span></h2>
                            <div class="login">
                                <form action="php_secondyear_sem2/login.php" method="post" id="formid">
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


    <script src="scripts_secondyear_sem2.js"></script>

</body>

</html>