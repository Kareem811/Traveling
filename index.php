<?php
require('conn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <section class="backgroundContainer">
        <div class="backgroundLayer">
            <div class="backgroundData">
                <h1>Greatness Egypt Tours</h1>
                <p>
                    Greatness Egypt Tours is a tour company in Giza , we are team of
                    qualified tour guides , tour operators and drivers , we organize
                    amazing holidays in Egypt .
                </p>
                <div class="buttons">
                    <a href="#about-section">Get Started</a>
                </div>
            </div>
        </div>
    </section>


    <section id="about-section" class="aboutSectionContainer">
        <h1>About Us</h1>
        <div class="about">
            <div class="aboutContent">
                <h1>Welcome To Our Website</h1>
                <p>
                    We are a team consisting of tour guides, drivers, and tour organizers. We work together to provide the best tours for tourists coming to Egypt from all over the world, to spend a wonderful time of fun, entertainment, history, and discovering life in Egypt.

                    We invite you to discover Egypt with us and spend the best times. Discover the history of ancient Egypt and the pyramids, as well as the Christian and Islamic history of Egypt, the Greco-Roman period and campaign in thedesert.
                    We organize daily tours in Egypt, and you can also book a package to enjoy the discount on all tours
                </p>
                <button>Learn More</button>
            </div>
            <div class="aboutImage">
                <img src="Images/Home/bg3.jpg" alt="" />
            </div>
        </div>
    </section>



    <section class="servicesContainer">
        <h1>Our Services</h1>
        <div class="services">
            <div class="serviceBox">
                <h2>01</h2>
                <h3>Service One</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not
                    only five centuries,
                </p>
            </div>
            <div class="serviceBox">
                <h2>02</h2>
                <h3>Service Two</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not
                    only five centuries,
                </p>
            </div>
            <div class="serviceBox">
                <h2>03</h2>
                <h3>Service Three</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not
                    only five centuries,
                </p>
            </div>
        </div>
    </section>







    <!-- <section class="featuredContainer">
        <h1>Places To Visit</h1>
        <div class="trips">
            <div class="featuredTrip">
                <img alt="" src=luxor" />
                <div class="featuredData">
                    <h2>Cairo</h2>
                    <a href="">Explore</a>
                </div>
            </div>
            <div class="featuredTrip">
                <img alt="" src=temple" />
                <div class="featuredData">
                    <h2>Cairo</h2>
                    <a href="">Explore</a>
                </div>
            </div>
            <div class="featuredTrip">
                <img alt="" src=pyramid" />
                <div class="featuredData">
                    <h2>Cairo</h2>
                    <a href="">Explore</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="contact-section" class="contactContainer">
        <div class="contactForm">
            <h1>Contact Us</h1>
            <form>
                <div class="contactField">
                    <input type="text" placeholder="First Name" />
                    <input type="text" placeholder="Last Name" />
                </div>
                <div class="contactField">
                    <input type="text" placeholder="Email" />
                    <input type="text" placeholder="Phone Number" />
                </div>
                <div class="contactField">
                    <textarea placeholder="Enter Your Message"></textarea>
                </div>
                <input type="submit" value="Send" name="contactbtn"/>
            </form>
        </div>
        <div class="contactSocial">
            <h2>Contact Info</h2>
            <div class="info">
                <div class="singleinfo">
                    <FaLocationDot />
                    <span>Location</span>
                </div>
                <div class="singleinfo">
                    <FaLocationDot />
                    <span>Location</span>
                </div>
                <div class="singleinfo">
                    <FaLocationDot />
                    <span>Location</span>
                </div>
            </div>
            <div class="icons">
                <FaFacebook />
                <FaFacebook />
                <FaFacebook />
                <FaFacebook />
            </div>
        </div>
    </section> -->
    <section id="contact-section" class="contact-section">
        <div class="contact">
            <img src="Images/Home/bg7.jpg" alt="">
            <div class="contact-form">
                <h1>Contact Us</h1>
                <form method="post">
                    <input type="text" placeholder="Full Name" name="fullname">
                    <input type="text" placeholder="Email" name="email">
                    <textarea placeholder="Enter Your Message" name="message"></textarea>
                    <input type="submit" value="Send" name="send">
                </form>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST['send'])) {
        $fullName = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $insertQuery = "INSERT INTO `contact` (`fullname` , `email` , `message` , `read`) VALUES ('$fullName' , '$email' , '$message' , '1')";
        $insertDone = mysqli_query($conn, $insertQuery);
        if ($insertDone) { ?>
            <div class="success-message">
                <div class="done">
                    <h1>Message was sent Successfully</h1>
                    <a href="index.php">Confirm</a>
                </div>
            </div>
    <?php }
    }
    ?>
    <?php
    include('footer.php');
    ?>
</body>

</html>