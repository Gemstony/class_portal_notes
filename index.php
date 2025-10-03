<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nitlearning.co.tz</title>
    <link rel="icon" href="ICONS/FAVICON.png">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="super">
            <a href="super/login.php"><button>super</button></a>
        </div>
        <div class="home" id="home">



            <img src="ICONS/logo.png" alt="Logo" class="logo">
            <h1>Welcome to IT & CS Class Portal</h1>

            <div id="search-section">
                <input type="text" id="search-input" placeholder="Search for documents...">
                <button onclick="searchDocuments()">Search</button>
            </div>

            <div id="class-selection">
                <h2>Select Your Class</h2>
                <a href="firstyear_sem1/firstyear_sem1.php"><button onclick="chooseClassIT71()">IT-71-SEM1</button></a>
                <a href="firstyear_sem2/firstyear_sem2.php"><button onclick="chooseClassIT71()">IT-71-SEM2</button></a>
                <a href="secondyear_sem1/secondyear_sem1.php"><button onclick="chooseClass('IT-73')">IT-72-SEM1</button></a>
                <a href="secondyear_sem2/secondyear_sem2.php"><button onclick="chooseClass('IT-73')">IT-72-SEM2</button></a>
                <button class="unavailable">IT-8-SEM1</button>
                <button class="unavailable">IT-8-SEM2</button>
            </div>
        </div>

        <footer>


            <div class="child-footer">
                <div class="images">
                    <img src="ICONS/scar.png" alt="">
                    <div class="informations">
                        <h4>Developed By </h4>
                        <p style="font-size:1.1em;">Scar</p>
                        <a class="needhelp" href="https://wa.me/255615419810" target="_blank">Powered By @ScarTechWorks</a>
                    </div>

                </div>

                <div class="social">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/jamex.marwa" target="_blank">
                            <img src="ICONS/FACEB.png" alt="Facebook">
                        </a>
                        <a href="https://instagram.com/scartechworks?igsh=YzIjYTK10Dg3Zg==" target="_blank">
                            <img src="ICONS/INSTA.png" alt="Instagram">
                        </a>
                        <a href="https://wa.me/255653709810" target="_blank">
                            <img src="ICONS/WHATSAPP.png" alt="WhatsApp">
                        </a>

                    </div>
                </div>
            </div>


            <div class="child2-footer">
                <div class="images">
                    <img src="ICONS/wandiba.jpg" alt="">
                    <div class="informations">
                        <h4>Designed By</h4>
                        <p>Bravan Wandiba</p>
                        <a class="needhelp" href="https://wa.me/255755626428" target="_blank">Need Help?</a>

                    </div>
                </div>
                <div class="social">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/bravan.wandiba.7" target="_blank">
                            <img src="ICONS/FACEB.png" alt="Facebook">
                        </a>
                        <a href="https://www.instagram.com/ict.bravan?igsh=MXBwYm5vdGZ6dWR2aQ==" target="_blank">
                            <img src="ICONS/INSTA.png" alt="Instagram">
                        </a>
                        <a href="https://wa.me/255755626428" target="_blank">
                            <img src="ICONS/WHATSAPP.png" alt="WhatsApp">
                        </a>

                    </div>
                </div>
            </div>

        </footer>

</body>

</html>