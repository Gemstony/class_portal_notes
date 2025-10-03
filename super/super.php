<?php
include "super/config.php";
include "super/queries.php";


if (time() > $_SESSION["idExpireTime"]) {
    unset($_SESSION["myid"]);
    unset($_SESSION["idExpireTime"]);
} else {
    $_SESSION["idExpireTime"] = time() + 900;
}

$superid = $_SESSION["superid"];

if (!$superid) {
    header("Location: login.php");
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
    <script src="jquery-3.7.1.js"></script>

</head>

<body>
    <div class="container">
        <div class="module-section">
            <!-------------------------SIDE BAR  ----------------->
            <div class="sidebar" id="sidebar">
                <div class="tittle">
                    <h1>SUPER</h1>
                </div>

                <ul>
                    <li onclick="homebtn()"><span class="icon">&#127968;</span>&nbsp;<p>Home</p>
                    </li>

                    <li onclick="firstyearsemOnebtn()"><span class="icon">&#128218;</span>&nbsp;<p>First Year SEM 1</p>
                    </li>
                    <li onclick="firstyearsemTwobtn()"><span class="icon">&#128218;</span>&nbsp;<p>First Year SEM 2</p>
                    </li>
                    <li onclick="secondyearsemOnebtn()"><span class="icon">&#128218;</span>&nbsp;<p>Second Year SEM 1</p>
                    </li>
                    <li onclick="secondyearsemTwobtn()"><span class="icon">&#128218;</span>&nbsp;<p>Second Year SEM 2</p>
                    </li>
                    <li onclick="adduser()"><span class="icon">&#128100;</span>&nbsp;<p>Add New users</p>
                    </li>
                    <li onclick="openchangepassword()"><span class="icon">&#9881;</span>&nbsp;<p>Change Password</p>
                    </li>
                    <li><a href="super/logout.php"><span class="icon">&#10162;</span>&nbsp;<p>Logout</p></a></li>
                </ul>
                <script src="super.js"></script>

            </div>

            <!-------------------------END SIDE BAR  ----------------->



            <div class="contents">
                <!-------------HEADER------------------>
                <div class="header">

                    <img src="../ICONS/logo.png" alt="Logo" class="logo" alt="">
                    <h1>BIT & BCS PORTAL <span>SUPER ADMIN</span></h1>
                    <div class="opensidebar">
                        <span class="menu" onclick="opensidebar()">&#9776;</span>
                    </div>
                </div>
                <!--------------END HEADER------------------>


                <!-------------------------MAIN CONTENTS  ----------------->


                <div class="contents2">




                    <div class="contents-holder" id="home">
                        <div class="min-container">
                            <p style="color: #155724; font-style: italic; font-size: larger;">
                                <?php if (!empty($_SESSION['useraded'])) {
                                    echo $_SESSION['useraded'];
                                    unset($_SESSION['useraded']);
                                } elseif (!empty($_SESSION['passwordchanged'])) {
                                    echo $_SESSION['passwordchanged'];
                                    unset($_SESSION['passwordchanged']);
                                } elseif (!empty($_SESSION['notesdeleted'])) {
                                    echo $_SESSION['notesdeleted'];
                                    unset($_SESSION['notesdeleted']);
                                } elseif (!empty($_SESSION['userdeleted'])) {
                                    echo $_SESSION['userdeleted'];
                                    unset($_SESSION['userdeleted']);
                                }

                                ?>
                            </p>

                            <p style="color: #E74C3C; font-style: italic; font-size: larger;">
                                <?php if (!empty($_SESSION['errordeluser'])) {
                                    echo  $_SESSION['errordeluser'];
                                    unset($_SESSION['errordeluser']);
                                } elseif (!empty($_SESSION['errordelnotes'])) {
                                    echo $_SESSION['errordelnotes'];
                                    unset($_SESSION['errordelnotes']);
                                } elseif (!empty($_SESSION['passverifyerror'])) {
                                    echo $_SESSION['passverifyerror'];
                                    unset($_SESSION['passverifyerror']);
                                } elseif (!empty($_SESSION['wrongoldpass'])) {
                                    echo $_SESSION['wrongoldpass'];
                                    unset($_SESSION['wrongoldpass']);
                                } elseif (!empty($_SESSION['usererror'])) {
                                    echo $_SESSION['usererror'];
                                    unset($_SESSION['usererror']);
                                }


                                ?>
                            </p>
                            <div class="card-container">
                                <div class="card">
                                    <h3>Total Notes Uploaded</h3>
                                    <p><?php echo $row_total_tasks['alltasks'];  ?></p>
                                </div>

                                <div class="card">
                                    <h3>Registered CR's</h3>
                                    <p><?php echo $row_total_users['allusers'];  ?></p>
                                </div>

                                <div class="card">
                                    <h3>First year SEM 1 Notes</h3>
                                    <p><?php echo $row_fistyear_sem1_notes['fistyear_sem1_notes'];  ?></p>
                                </div>

                                <div class="card">
                                    <h3>First year SEM 2 Notes</h3>
                                    <p><?php echo $row_fistyear_semtwo_notes['fistyear_semtwo_notes'];  ?></p>
                                </div>

                                <div class="card">
                                    <h3>Second year SEM 1 Notes</h3>
                                    <p><?php echo $row_secondyear_sem1_notes['secondyear_sem1_notes'];  ?></p>
                                </div>

                                <div class="card">
                                    <h3>Second year SEM 2 Notes</h3>
                                    <p><?php echo $row_secondyear_semtwo_notes['secondyear_semtwo_notes'];  ?></p>
                                </div>
                            </div>

                            <div class="main-container">

                                <div class="table-responsive">
                                    <h3>Registered CR's</h3>
                                    <table class="table table-bordered table-dark">
                                        <thead>
                                            <tr class="table-active">
                                                <th>#</th>
                                                <th>User name</th>
                                                <th>Couser</th>
                                                <th>Year</th>
                                                <th>Contacts</th>
                                                <th>Role</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            if ($result_users->num_rows > 0) {
                                                while ($row_users  = $result_users->fetch_assoc()) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $row_users['user_id']; ?></td>
                                                        <td><?php echo $row_users['username']; ?></td>
                                                        <td><?php echo $row_users['course']; ?></td>
                                                        <td><?php echo $row_users['year']; ?></td>
                                                        <td><?php echo $row_users['phone_number']; ?></td>
                                                        <td><?php echo $row_users['role']; ?></td>

                                                        <td>
                                                            <form action="super/deleteuser.php" method="post">
                                                                <input type="hidden" name="userid" value="<?php echo $row_users['user_id']; ?>">
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
                        </div>
                    </div>



                    <div class="contents-holder" style="display: none;" id="firstyearsemOneId">

                        <div class="table-responsive">
                            <h3>First Year 1st Semister</h3>
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

                                    if ($result_fistyear_sem1->num_rows > 0) {
                                        while ($row_fistyear_sem1  = $result_fistyear_sem1->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row_fistyear_sem1['task_id']; ?></td>
                                                <td><?php echo $row_fistyear_sem1['task_name']; ?></td>
                                                <td><?php echo $row_fistyear_sem1['task_type']; ?></td>
                                                <td><?php echo $row_fistyear_sem1['module_name']; ?></td>
                                                <td><?php echo $row_fistyear_sem1['date_aded']; ?></td>
                                                <td><?php echo $row_fistyear_sem1['file']; ?></td>
                                                <td>
                                                    <form action="super/deletenotes.php" method="post">
                                                        <input type="hidden" name="notesid" value="<?php echo $row_fistyear_sem1['task_id']; ?>">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>



                        <!--------------END FIRST YEAR SEMISTER 1-------->
                    </div>

                    <div class="contents-holder" style="display: none;" id="firstyearsemTwoId">

                        <!-------------- FIRST YEAR SEMISTER 2-------->



                        <div class="table-responsive">
                            <h3>First Year 2nd Semister</h3>
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

                                    if ($result_fistyear_sem2->num_rows > 0) {
                                        while ($row_fistyear_sem2  = $result_fistyear_sem2->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row_fistyear_sem2['task_id']; ?></td>
                                                <td><?php echo $row_fistyear_sem2['task_name']; ?></td>
                                                <td><?php echo $row_fistyear_sem2['task_type']; ?></td>
                                                <td><?php echo $row_fistyear_sem2['module_name']; ?></td>
                                                <td><?php echo $row_fistyear_sem2['date_aded']; ?></td>
                                                <td><?php echo $row_fistyear_sem2['file']; ?></td>
                                                <td>
                                                    <form action="super/deletenotes.php" method="post">
                                                        <input type="hidden" name="notesid" value="<?php echo $row_fistyear_sem2['task_id']; ?>">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>


                        <!--------------END FIRST YEAR SEMISTER 2-------->

                    </div>

                    <div class="contents-holder" style="display: none;" id="secondyearsemOneId">


                        <!-------------- SECOND YEAR SEMISTER 1-------->

                        <div class="table-responsive">
                            <h3>Second Year 1st Semister</h3>
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

                                    if ($result_secondyear_sem1->num_rows > 0) {
                                        while ($row_secondyear_sem1  = $result_secondyear_sem1->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row_secondyear_sem1['task_id']; ?></td>
                                                <td><?php echo $row_secondyear_sem1['task_name']; ?></td>
                                                <td><?php echo $row_secondyear_sem1['task_type']; ?></td>
                                                <td><?php echo $row_secondyear_sem1['module_name']; ?></td>
                                                <td><?php echo $row_secondyear_sem1['date_aded']; ?></td>
                                                <td><?php echo $row_secondyear_sem1['file']; ?></td>
                                                <td>
                                                    <form action="super/deletenotes.php" method="post">
                                                        <input type="hidden" name="notesid" value="<?php echo $row_secondyear_sem1['task_id']; ?>">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-------------- END SECOND YEAR SEMISTER 1-------->

                    </div>


                    <div class="contents-holder" style="display: none;" id="secondyearsemTwoId">

                        <!-------------- SECOND YEAR SEMISTER 2-------->


                        <div class="table-responsive">
                            <h3>Second Year 2nd Semister</h3>
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

                                    if ($result_secondyear_sem2->num_rows > 0) {
                                        while ($row_secondyear_sem2  = $result_secondyear_sem2->fetch_assoc()) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row_secondyear_sem2['task_id']; ?></td>
                                                <td><?php echo $row_secondyear_sem2['task_name']; ?></td>
                                                <td><?php echo $row_secondyear_sem2['task_type']; ?></td>
                                                <td><?php echo $row_secondyear_sem2['module_name']; ?></td>
                                                <td><?php echo $row_secondyear_sem2['date_aded']; ?></td>
                                                <td><?php echo $row_secondyear_sem2['file']; ?></td>
                                                <td>
                                                    <form action="super/deletenotes.php" method="post">
                                                        <input type="hidden" value="<?php echo $row_secondyear_sem2['task_id']; ?>">
                                                        <input type="submit" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                        <!-------------- END SECOND YEAR SEMISTER 2-------->



                    </div>


                    <div class="contents-holder" id="ChangePassword" style="display: none;">
                        <div class="form-holder">
                            <h1>Change Password</h1>

                            <form action="super/change_password.php" method="post">
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



                    <div class="contents-holder" id="newuser" style="display: none;">
                        <h3> Add New User</h3>
                        <form action="super/adduser.php" method="post" required>
                            <div class="inputs">
                                <label for="user_name">User Name:</label>
                                <input type="text" name="user_name" required>
                            </div>

                            <div class="inputs">
                                <label for="phone_number">Phone Number:</label>
                                <input type="number" name="phone_number" required>
                            </div>

                            <div class="inputs">
                                <label for="course">Course:</label>
                                <select name="course" id="" required>
                                    <option value="BIT">BIT</option>
                                    <option value="BCS">BCS</option>

                                </select>
                            </div>

                            <div class="inputs">
                                <label for="year">Year:</label>
                                <select name="year" id="" required>
                                    <option value="FIRST">FIRST</option>
                                    <option value="SECOND">SECOND</option>
                                    <option value="SUPER">SUPER</option>
                                </select>
                            </div>


                            <div class="inputs">
                                <label for="role">Role:</label>
                                <select name="role" id="" required>
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="SUPER">SUPER</option>
                                </select>
                            </div>


                            <div class="inputs">
                                <input type="submit" name="submit" value="Add">

                            </div>


                        </form>
                    </div>








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
                    <a href="https://www.facebook.com/bravan.wandiba" target="_blank">
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

    <script src="super.js"></script>
    <script src="ajax.js"></script>
</body>

</html>