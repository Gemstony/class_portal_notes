<?php
include "php_firstyear_sem2/config.php";
include "php_firstyear_sem2/queries.php";


if (time() > $_SESSION["idExpireTime"]) {
    unset($_SESSION["myid"]);
    unset($_SESSION["idExpireTime"]);
} else {
    $_SESSION["idExpireTime"] = time() + 900;
}

$myid = $_SESSION["myid"];

if (!$myid) {
    header("Location: firstyear_sem2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nitlearning.co.tz</title>
    <link rel="icon" href="ICONS/FAVICON.png">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="container">
        <div class="module-section">
            <!-------------------------SIDE BAR  ----------------->
            <div class="sidebar" id="sidebar">
                <div class="tittle">
                    <h1>Admin(CR)</h1>
                </div>

                <ul>
                    <li onclick="openhome()"><span class="icon">&#127968;</span>&nbsp;<p>Home</p>
                    </li>
                    <li onclick="openprofile()"><span class="icon">&#128100;</span>&nbsp;<p>Me</p>
                    </li>
                    <li onclick="myuploadsbtn()"><span class="icon">&#128218;</span>&nbsp;<p>My Uploads</p>
                    </li>
                    <li onclick="openchangepassword()"><span class="icon">&#9881;</span>&nbsp;<p>Change Password</p>
                    </li>
                    <li><a href="php_firstyear_sem2/logout.php"><span class="icon">&#10162;</span>&nbsp;<p>Logout</p></a></li>
                </ul>


            </div>

            <!-------------------------END SIDE BAR  ----------------->



            <div class="contents">
                <!-------------HEADER------------------>
                <div class="header">

                    <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                    <h1>BIT & BCS PORTAL <span>ADMIN PANEL</span></h1>
                    <div class="opensidebar">
                        <span class="menu" onclick="opensidebar()">&#9776;</span>
                    </div>
                </div>
                <!--------------END HEADER------------------>


                <!-------------------------MAIN CONTENTS  ----------------->


                <div class="contents2">
                    <div class="contents-holder" id="admin_home">

                        <p style="color: #155724; font-style: italic; font-size: larger;">
                            <?php if (!empty($_SESSION['passwordChanged'])) {
                                echo $_SESSION["passwordChanged"];
                                unset($_SESSION["passwordChanged"]);
                            } elseif (!empty($_SESSION['updated'])) {
                                echo $_SESSION['updated'];
                                unset($_SESSION['updated']);
                            } elseif (!empty($_SESSION['notesdeleted'])) {
                                echo $_SESSION['notesdeleted'];
                                unset($_SESSION['notesdeleted']);
                            }

                            ?>
                        </p>

                        <p style="color: #E74C3C; font-style: italic; font-size: larger;">
                            <?php if (!empty($_SESSION["verifyingError"])) {
                                echo $_SESSION["verifyingError"];
                                unset($_SESSION["verifyingError"]);
                            } elseif (!empty($_SESSION['wrongOldPassword'])) {
                                echo $_SESSION['wrongOldPassword'];
                                unset($_SESSION['wrongOldPassword']);
                            } elseif (!empty($_SESSION['updatedError'])) {
                                echo $_SESSION['updatedError'];
                                unset($_SESSION['updatedError']);
                            } elseif (!empty($_SESSION['largefile'])) {
                                echo $_SESSION['largefile'];
                                unset($_SESSION['largefile']);
                            } elseif (!empty($_SESSION['notesdeleted'])) {
                                echo $_SESSION['notesdeleted'];
                                unset($_SESSION['notesdeleted']);
                            }elseif (!empty($_SESSION['invalidfile'])) {
                                echo $_SESSION['invalidfile'];
                                unset($_SESSION['invalidfile']);
                            }



                            ?>
                        </p>
                        <p> <?php if (!empty($_SESSION['welcome'])) {
                                echo $_SESSION['welcome'];
                                unset($_SESSION['welcome']);
                            }


                            ?></p>
                        <h2>Upload New Document</h2>
                        <p style="color: #155724; font-style: italic; font-size: larger;">
                            <?php if (!empty($_SESSION['message'])) {
                                echo $_SESSION["message"];
                                unset($_SESSION["message"]);
                            }


                            ?>
                        </p>


                        <!-------------------------FIRST YEAR FIRST SEMISTER----------------------->
                        <form action="php_firstyear_sem2/uploads.php" method="post" enctype="multipart/form-data" required>
                            <div class="inputs">
                                <label for="task_name">Task Name:</label>
                                <input type="text" name="task_name" required>
                            </div>

                            <div class="inputs">
                                <label for="task_type">Task Type:</label>
                                <select name="task_type" id="" required>
                                    <option value="Indiviadul">INDIVIDUAL</option>
                                    <option value="Group">GROUP</option>
                                    <option value="Past Papers">PAST PAPERS</option>
                                    <option value="Others">OTHERS</option>
                                </select>
                            </div>

                            <div class="inputs">
                                <label for="task_module">Task Module:</label>
                                <select name="task_module" id="" required>
                                    <option value="Operating System">Operating System</option>
                                    <option value="Computer Networking">Computer Networking</option>
                                    <option value="Database Management">Database Management</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Function of single Variable">Function of single Variable</option>
                                    <option value="Event Driven Programing">Event Driven Programing</option>
                                    <option value="System Analysis and Design">System Analysis and Design</option>

                                </select>
                            </div>


                            <div class="inputs">
                                <label for="name">Select File (PDF/DOC):</label>
                                <input type="file" name="file" accept=".pdf,.doc,.docx" required>
                            </div>

                            <div class="inputs">
                                <input type="submit" name="submit_f1" value="Upload">

                            </div>


                        </form>
                        <!------------------------- END FIRST YEAR FIRST SEMISTER----------------------->
                    </div>



                    <div class="contents-holder" id="ChangePassword" style="display: none;">
                        <div class="form-holder">
                            <h1>Change Password</h1>

                            <form action="php_firstyear_sem2/change_password.php" method="post">
                                <div class="inputs">
                                    <input type="hidden" name="myid" value="<?php echo $myid;  ?>">
                                    <input type="password" name="old_password" placeholder="Enter Old pasword...">
                                </div>

                                <div class="inputs">
                                    <input type="password" name="new_password" placeholder="Enter New pasword...">
                                </div>

                                <div class="inputs">
                                    <input type="password" name="verify_new_password" placeholder="Verify New pasword...">
                                </div>

                                <div class="inputs">
                                    <input type="submit" name="submit" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="contents-holder" id="profile" style="display: none;">
                        <div class="form-holder">
                            <h1>My profile</h1>
                            <?php if ($result_user->num_rows > 0) {
                                $row_user = $result_user->fetch_assoc();
                            ?>
                                <div class="profile-img">
                                    <img src="php_firstyear_sem2/<?php echo $row_user['profileimage']; ?>" alt="">

                                </div>
                                <form action="php_firstyear_sem2/update_profile.php" method="post" enctype="multipart/form-data">

                                    <div class="inputs">
                                        <input type="hidden" name="myid" value="<?php echo $row_user['user_id']; ?>">
                                        <label for="">User Name:</label>
                                        <input type="text" name="user_name" value="<?php echo $row_user['username']; ?>" required>
                                    </div>

                                    <div class="inputs">
                                        <label for="">Course:</label>
                                        <input type="text" name="course" value="<?php echo $row_user['course']; ?>" required>
                                    </div>

                                    <div class="inputs">
                                        <label for="">Phone Number:</label>
                                        <input type="number" name="phone_number" value="<?php echo $row_user['phone_number']; ?>" required>
                                    </div>

                                    <div class="inputs">
                                        <label for="">Profile Image:</label>
                                        <input type="file" name="profileimage" value="<?php echo $row_user['profileimage']; ?>" accept=".jpg,.png,.jpeg,.webp" required>
                                    </div>

                                    <div class="inputs">
                                        <input type="submit" name="submit" value="Save">
                                    </div>
                                <?php } ?>
                                </form>
                        </div>
                    </div>


                    <div class="contents-holder" id="myuploads" style="display: none;">

                        <div class="table-responsive">
                            <h3>My uploads</h3>
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr class="table-active">
                                        <th>#</th>
                                        <th>Taksk name</th>
                                        <th>Task Type</th>
                                        <th>Module </th>
                                        <th>Date Aded</th>
                                        <th>File Name</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    if ($result_myuploads->num_rows > 0) {
                                        while ($row_myuploads  = $result_myuploads->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row_myuploads['task_id']; ?></td>
                                                <td><?php echo $row_myuploads['task_name']; ?></td>
                                                <td><?php echo $row_myuploads['task_type']; ?></td>
                                                <td><?php echo $row_myuploads['module_name']; ?></td>
                                                <td><?php echo $row_myuploads['date_aded']; ?></td>
                                                <td><?php echo $row_myuploads['file']; ?></td>
                                                <td>
                                                    <form action="php_firstyear_sem2/deletenotes.php" method="post">
                                                        <input type="hidden" name="notesid" value="<?php echo $row_myuploads['task_id']; ?>">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>




                    </div>
                    <!--------------END myuploads-------->




                </div>



                <!-------------------------END MAIN CONTENTS  ----------------->



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
                    <p>Baraka Wandiba</p>
                    <a class="needhelp" href="https://wa.me/255755626428" target="_blank">Need Help?</a>

                </div>
            </div>
            <div class="social">
                <div class="social-icons">
                    <a href="https://www.facebook.com/bravan.wandiba.7" target="_blank">
                        <img src="../ICONS/FACEB.png" alt="Facebook">
                    </a>
                    <a href="https://instagram.com/ict_bravan?" target="_blank">
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