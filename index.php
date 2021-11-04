<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/69e9df0914.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Assets/Logo.svg" type="image/x-icon">
    <title>Harniel Amuin | Personal Website</title>
</head>
<body>

<!-- Start of container -->
<div class="container">

<!-- first container wrapper -->
<div class="grids first-container">

<!-- Start of navigation container -->
<div class="main">
        <div class="logo-nav">
            <div class="image0">
                <img src="Assets/Logo.svg" alt="Logo">
            </div>

            <div class="contact">
                <div class="content">
                    <span><i class="far fa-comment-dots fa-2x"></i></span>
                </div>
            </div>

            <div class="navigation-btn">
                <div class="main-button">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                </div>
            </div>
        </div>

        <div class="nav-list">
            <div class="inner-list">
                <ul>
                    <li class="button"><a href="#"><button onclick="showAbout()">ABOUT</button></a></li>
                    <li class="button"><a href="porfolio.html"><button>PORFOLIO</button></a></li>
                    <li class="button"><a href="contact.php"><button>CONTACT</button></a></li>
                    <li class="button"><a href="#"><button>TOOLS</button></a></li>
                    <li class="button"><a href="#"><button>LANGUAGES</button></a></li>
                </ul>
            </div>
        </div>
</div>
<!-- end of navigation container -->

    <!-- This is text and image container -->
    <div class="inner-container1">
        <div class="text">
            <h1><span>WEL</span>COME</h1>
            <h2>I'M HARNIEL AMUIN</h2>
            <p>I am a anspiring future Web
                developer and Designing. Exploring 
                new tools for faster development.
            </p>
            </div>
            <div class="image">
            <!-- image profile -->
            <img src="Assets/Hero-logo.jpg" alt="Profile Picture">
        </div>
    </div>
    <!-- End of image and text container -->

</div>
<!-- End of first container wrapper -->

    <!-- footer -->
    <footer>
        <div class="inner-footer">
            <div class="accounts">
                <ul>
                    <li><a href=""><i class="fab fa-facebook fa-2x"></i></a></li>
                    <li><a href=""><i class="fab fa-github fa-2x"></i></a></li>
            </div>
            <div class="copyright">
                <span>Harniel M. Amuin | All rights reserved</span>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

</div>
<!-- End of container -->

<!-- Modal section -->
<div class="modal-about">
    <div class="about">
        <span class="closeBtn" onclick="remove()">&times;</span>
        <div class="image-icon">
            <img src="Assets/Hero-logo.jpg" alt="Profile Pic">
        </div>
        <div class="content">
             <h3>Hi, I am Harniel Amuin</h3>

        <p>I made this website to showcase my works
            about web development and also improve my skill
            when it comes to designing and developing
            website. This act as my practice as a junior developer
            and experience is one of the most important.
            <br><br>
            <span>This website is still under development <b>V1.0</b></span>
            <br><br>
            <span>Hope you like it!</span>
        </p>

        </div>
    </div>
</div>
<!-- End of modal section -->

<!-- Contact area container -->
<div class="contact-area">
    <div class="input">
        <form action="action.php" method="post">
            <textarea name="message" id="message" cols="50" rows="10" required></textarea>
            <br><button type="submit" name="submit">Send</button>
        </form>
    </div>
</div>
<!-- End of contact container -->

<script src="app.js"></script>
<script src="contact.js"></script>
</body>
</html>
