<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="GTA Reno Guys - The best general contracting in the GTA.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRG | Contact Us</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v6.1.1/css/all.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gantari:wght@400;700&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

    <script src="js/main.js" defer></script>

<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="img/logo-notext.png" alt="GRG Logo" /></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.html" class="active-link">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="Tel:289-338-2025" class="phone-link"><i class="fa-solid fa-phone"></i> 289-338-2025</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content-container form-container">
            <div class="content-title contact-title">
                <h1>Email Sent</h1>
            </div>
            <div class="title form-title">
                <?php
                if (isset($_POST['description']) && isset($_POST['email']) && isset($_POST['fName']) && isset($_POST['lName'])) {
                    if ($_POST['subject']) {
                        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $fName = $_POST['fName'];
                            $lName = $_POST['lName'];
                            $subject = $_POST['subject'];
                            $description = $_POST['description'];
                            $email = $_POST['email'];
                            $fullName = $fName . $lName;
                            $body = "";

                            $body .= "From: " . $fullName . "\r\n";
                            $body .= "Email: " . $email . "\r\n";
                            $body .= "Message: " . $description . "\r\n";

                            mail("tylermiele10@gmail.com", $subject, $body);
                        }
                    }
                }
                ?>
            </div>
        </div>
    </main>
    <footer class="flex">
        <div class="logo">
            <a href="index.html"><img src="img/logo-notext.png" alt="GRG Logo" /></a>
            <p><small>Copyright © 2022 GTA Reno Guys</small></p>
        </div>
        <nav class="main-nav footer-nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <div class="social-container">
            <div class="socials-contact flex">
                <a href="Tel:289-338-2025"><i class="fa-solid fa-phone"></i> 289-338-2025</a>
                <a href="Tel:416-200-7474"><i class="fa-solid fa-envelope"></i> gtarenoguys@gmail.com</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> @gtarenoguys</a>
            </div>
        </div>
    </footer>
</body>

</html>