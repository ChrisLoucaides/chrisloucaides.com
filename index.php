<?php
    $sent = false;
    if(isset($_POST['email']) && $_POST['email'] != "") {

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

            //submit, set variables from post
            $name = $_POST["full-name"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            $to = "info@chrisloucaides.com";
            $body = "";

            $body .= "New message from: " . $name . "\r\n";
            $body .= "Email address: " . $email . "\r\n";
            $body .= "Content: " . $message . "\r\n";

            mail($to, "New contact form message", $body);
            $sent = true; //if true redirect

            $_SESSION["email"] = $email; //use email to start session
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script defer src="js/typewriter.js"></script>
    <script defer src="js/contactValidation.js"></script>
    <script defer src="js/contactValidationMobile.js"></script>
    <script defer src="js/timeline.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>Chris Loucaides' Portfolio</title>
</head>
<body>
<div id="home">
    <!--Nav-->
    <nav data-aos="fade-down" data-aos-duration="1000" class="navbar-large navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-4 py-lg-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills & Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://loucaides.hashnode.dev/">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav data-aos="fade-down" data-aos-duration="1000" class="navbar-small navbar-expand-lg navbar-dark bg-dark fixed-top py-4 py-lg-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-sm">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills-sm">Skills & Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience-sm">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service-sm">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-sm">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://loucaides.hashnode.dev/">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <!--Nav-->
    <!--Background-->
    <div id="hero">
        <video autoplay muted loop poster="" id="frappe">
            <source src="content/coding.mp4" type="video/mp4">
        </video>

        <div class="content d-flex align-items-center">
            <div data-aos="zoom-in" class="container text-center">
                <h1>Chris Loucaides</h1>
                <h1>I'm a
                    <span class="txt-type" data-wait="3000" data-words='["Developer", "Filmmaker", "Creator"]'></span>
                </h1>
            </div>
        </div>
    </div>
    <!--Background-->
</div>

<div class="large-screens">

    <!--About-->

    <div data-aos="fade-down" id="about" class="container mt-5 pt-5 pb-5">
        <div id="about-heading" class="post-heading text-center pt-5">
            <h3 class="display-4 font-weight-bold">About me</h3>
            <hr class="w-50 mx-auto">
        </div>
        <div class="row about-me">
            <!--IMAGE-->

            <div data-aos="fade-right" data-aos-duration="1000" class="support-content col-6">
                <img width="55%" id="afro" class="img-fluid"  src="content/ChrisStackedBackground.png" alt="Chris Loucaides">
            </div>

            <!--TEXT-->

            <div data-aos="fade-left" data-aos-duration="1000" class="main-content col-6">
                <h2>Hi there!</h2>
                <hr>
                <p class = "fs-5">My name is Christos Loucaides, and I am currently studying BSc (Hons) Computer Science with Management at Queen Mary, University of London. I graduated from The English School Nicosia in 2019, and then served in the Cypriot National Guard for 14 Months.</p>
                <p class="fs-5">This portfolio website highlights some of my key skills and projects I've worked on in the past. This site actually started as a piece of coursework for one of my university modules, but I've decided to rebuild it using the Bootstrap framework to also make it mobile friendly!</p>
                <p class="fs-5">I've worked on a variety of projects ranging from web development to short films, as well as running a
                    <a href="https://www.facebook.com/QuickEat.site" target="_blank">media-based startup</a> a few years ago. </p>
            </div>


        </div>
    </div>

    <!--About-->
    <br>
    <br>
    <!--Skills-->

    <div id="skills" class="container mt-5 pt-5 pb-5">
        <div data-aos="fade-down" class="post-heading text-center pt-5">
            <h3 class="display-4 font-weight-bold">Skills & Education</h3>
            <hr class="w-50 mx-auto">
        </div>
        <div class="row">
            <!--TEXT-->

            <div class="col-lg-6 col-md-6 col-12">
                <div data-aos="fade-right" data-aos-duration="1000" id="carouselExampleControls" class="support-content slide ms-lg-5" data-bs-ride="carousel">
                    <div class="car-size carousel-inner">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <img src="content/carousel/HTML5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/CSS.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/JS.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/php.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/mysql.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/python.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/Java.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="content/carousel/premiere.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <!--IMAGE-->
            <div data-aos="fade-left" class="main-content-2 col-lg-5 col-md-6 col-12">
                <br>
                <h2 class="text-right">What I've learned</h2>
                <hr>
                <p class="fs-5">I graduated from <a href="http://englishschool.ac.cy/" target="_blank">The English School, Nicosia</a> with A-Levels in Mathematics, Computer Science, Economics and Modern Greek. I have now completed the first year of my
                    <a href="https://www.qmul.ac.uk/undergraduate/coursefinder/courses/2021/computer-science-with-management-itmb/" target="_blank">BSc Computer Science with Management</a> course at
                    <a href="http://qmul.ac.uk/" target="_blank">Queen Mary</a>.</p>
                <p class="fs-5">Throughout school, university and my own free time I have gained a good understanding of the following technologies: Python, Java, HTML, CSS, Javascript, PHP, MySQL. As well as Adobe Premiere Pro which is my video editing software of choice.</p>
            </div>


        </div>
    </div>
    <!--Skills-->
    <!--Experience-->

    <div id="experience"  class="container-sm mt-3 mb-5 pt-4" data-aos="fade-down" data-aos-duration="1000">
        <div data-aos="fade-down" class="post-heading text-center pt-5">
            <h3 class="display-4 font-weight-bold">Experience</h3>
            <hr class="w-50 mx-auto">
        </div>
        <div class="timeline-container">
            <br>
            <div class="top-section">
                <h2 class="text-center">What I've worked on:</h2>
            </div>
            <br>
            <br>
            <div class="timeline" data-aos="">
                <div class="line"></div>

                <div class="section">
                    <div class="bead"></div>
                    <div class="content">
                        <h2>Lab Demonstrator</h2>
                        <h4 class="time-period">September 2021 - Present</h4>
                        <p>
                            Selected to <strong>assist at lab sessions and assessment
                            for Computer Science modules at Queen Mary</strong>,
                            which I scored highly in during my first year.
                            Helping first-year students with these modules
                            has allowed me to further understand some of the
                            concepts taught.
                        </p>
                    </div>
                </div>

                <div class="section">
                    <div class="bead"></div>
                    <div class="content">
                        <h2>Summer Intern</h2>
                        <h4 class="time-period">June 2021 - August 2021</h4>
                        <p>
                            Worked at <a href="https://socialwayeservices.com/" target="_blank">Socialway eServices</a> <strong>together with
                                the company's web team </strong>on various client websites.
                            This included managing and updating page content through
                            a CMS (Wordpress). I was also tasked with improving the
                            <strong>SEO of some client pages through JSON-LD Schema types. </strong>
                            By the end of my internship I had <strong>written a program
                                to do this automatically.</strong>
                        </p>
                    </div>
                </div>

                <div class="section">
                    <div class="bead"></div>
                    <div class="content">
                        <h2>Artillery Soldier</h2>
                        <h4 class="time-period">June 2019 - September 2020</h4>
                        <p>
                            As part of my national service, I served 14 months
                            as an artillery soldier. More specifically, I was a
                            <strong>Radio and Communications Specialist</strong>, and part of my duty
                            was contacting my battalion's brigade on a daily basis
                            using mil-spec radio equipment, as well as operating the
                            unit's communication center.
                        </p>
                    </div>
                </div>

                <div class="section">
                    <div class="bead"></div>
                    <div class="content">
                        <h2>CTO Quickeat</h2>
                        <h4 class="time-period">October 2016 - March 2017</h4>
                        <p>
                            Quickeat was a social media-based company under
                            the <a href="https://www.jaworldwide.org/" target="_blank">Junior Achievement Competition</a>. As the company's
                            CTO, my job was to <strong>film and edit short one minute videos </strong>
                            with a goal to promote healthy eating. As well as <strong>creating and maintaining the company's website.</strong>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--Experience-->

    <!--Services-->
    <div id="services" class="container-sm mt-3 mb-5 pt-4" data-aos="fade-down" data-aos-duration="1000">
        <div class="post-heading text-center pt-5">
            <h3 class="display-4 font-weight-bold">Services</h3>
            <hr class="w-50 mx-auto">
        </div>

        <br>

        <div class="row">
            <div class="web-card col-lg-4 col-md-6 col-12 pb-6">
                <div class="card-transparent border-secondary" data-aos="flip-left">
                    <img src="content/web-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h3 class="card-title">Web Design</h3>
                        <hr>
                        <p class="card-text fs-5">Responsive website using HTML/CSS/Bootstrap and Javascript.</p>
                        <a href="services/services.html#web-services" class="btn btn-primary fs-5">Learn more</a>
                    </div>
                </div>
            </div>


            <div class="film-card col-lg-4 col-md-6 col-12 pb-5">
                <div class="card-transparent border-secondary" data-aos="flip-up">
                    <img src="content/wfilm-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h3 class="card-title">Filming</h3>
                        <hr>
                        <p class="card-text fs-5">Cinematic shots (Up to 4K 25fps) for your product or service. Shot on Lumix G7</p>
                        <a href="services/services.html#film-services" class="btn btn-primary fs-5">Learn more</a>
                    </div>
                </div>
            </div>


            <div class="edit-card col-lg-4 col-md-6 col-12 pb-5">
                <div class="card-transparent border-secondary" data-aos="flip-right">
                    <img src="content/clip-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h3 class="card-title">Editing</h3>
                        <hr>
                        <p class="card-text fs-5">High quality video edits. This can include both live action and gameplay footage.</p>
                        <a href="services/services.html#editing-services" class="btn btn-primary fs-5">Learn more</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Services-->
    <!--Contact-->

    <?php

    if($sent == true){
        header("Location:email-sent.php", true, 301);
    }
    else{?>

    <div id="contact" class="container w-50 mx-auto mt-3 mb-5">
        <div class="post-heading text-center" data-aos="fade-down">
            <h3 class="display-4 font-weight-bold">Contact</h3>
            <hr class="w-50 mx-auto">
        </div>

        <form id="contact-form" method="POST" action="https://usebasin.com/f/a6dcbd690b2d">
            <div class="fs-5">
                <div class="form-group" data-aos="fade-down">
                    <label for="full-name">Full name:</label>
                    <input name="full-name" type="text" class="form-control" placeholder="Enter your full name:" id="full-name">
                </div>
                <br>
                <div class="form-group" data-aos="fade-down">
                    <label for="email">Email address:</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter email address:" id="email">
                </div>
                <br>
                <div class="form-group" data-aos="fade-down">
                    <label for="message">Your message:</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Enter your message:"></textarea>
                </div>
                <br>
                <input data-aos="fade-down" class="btn btn-primary fs-3" id="submit" type="submit" value="Submit">
            </div>
            <br>
            <div class="g-recaptcha" data-sitekey="6Lew3SMUAAAAAJ82QoS7gqOTkRI_dhYrFy1f7Sqy"></div>

        </form>

    </div>


    <?php } ?>

    <footer class="bg-dark text-center text-lg-start">

        <!-- Copyright -->
        <div class="footer-container pt-3">
            <ul class="footer-icons d-flex justify-content-center pe-3">
                <li><a href="https://www.linkedin.com/in/chrisloucaides/" target="_blank"><img width="55%" src="content/linkedin.png" alt=""></a></li>
                <li><a href="mailto:info@chrisloucaides.com" target="_blank"><img width="55%" src="content/mail.png" alt=""></a></li>
                <li><a href="https://github.com/ChrisLoucaides/" target="_blank"><img class="github" width="55%" src="content/github_100px.png" alt=""></a></li>
                <li class="twitter-icon"><a href="https://twitter.com/ChrisLoucaides/" target="_blank"><img width="52%" src="content/twitter.png" alt=""></a></li>
            </ul>
        </div>
        <div class="footer-text text-center pt-2 pb-1" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="d-flex justify-content-center p-1 fs-6">Powered by: HTML5, CSS, Bootstrap, JavaScript and PHP</p>
            <p class="d-flex justify-content-center fs-6">© <script>document.write(new Date().getFullYear())</script> Copyright Christos Loucaides | &nbsp; <a href="index.php">Home</a></p>
        </div>
        <!-- Copyright -->
    </footer>
</div>
<div class="small-screens">

    <!--About-->

    <div data-aos="fade-down" id="about-sm" class="container mt-5 pt-5 pb-5">
        <div id="about-heading-sm" class="post-heading text-center pt-5">
            <h2 class="display-1 font-weight-bold">About me</h2>
            <hr class="w-50 mx-auto">
        </div>
        <div class="about-me">
            <!--IMAGE-->

            <div data-aos="fade-right" data-aos-duration="1000" class="support-content col-6 d-flex justify-content-center">
                <img width="120%"  id="afro-sm" class="img-fluid"  src="content/ChrisStackedBackground.png" alt="Chris Loucaides">
            </div>

            <!--TEXT-->

            <div data-aos="fade-left" data-aos-duration="1000" class="main-content col-12">
                <h2 class="display-4">Hi there!</h2>
                <hr>
                <p class = "fs-1">My name is Christos Loucaides, and I am currently studying BSc (Hons) Computer Science with Management at Queen Mary, University of London. I graduated from The English School Nicosia in 2019, and then served in the Cypriot National Guard for 14 Months.</p>
                <p class="fs-1">This portfolio website highlights some of my key skills and projects I've worked on in the past. This site actually started as a piece of coursework for one of my university modules, but I've decided to rebuild it using the Bootstrap framework to also make it mobile friendly!</p>
                <p class="fs-1">I've worked on a variety of projects ranging from web development to short films, as well as running a
                    <a href="https://www.facebook.com/QuickEat.site" target="_blank">media-based startup</a> a few years ago. </p>
            </div>


        </div>
    </div>

    <!--About-->
    <br>
    <br>
    <!--Skills-->

    <div id="skills-sm" class="container mt-5 pt-5 pb-1">
        <div data-aos="fade-down" class="post-heading text-center pt-5">
            <h2 class="display-2 font-weight-bold">Skills & Education</h2>
            <hr class="w-50 mx-auto">
        </div>

        <!--TEXT-->

        <div class="col-12">
            <div data-aos="fade-right" data-aos-duration="1000" id="carouselExampleControls" class="carousel-sm slide" data-bs-ride="carousel">
                <div class="car-size carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="content/carousel/HTML5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/CSS.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/JS.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/php.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/mysql.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/python.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/Java.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="content/carousel/premiere.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <!--IMAGE-->
        <div data-aos="fade-left" class="main-content-2 col-12">
            <br>
            <h2 class="display-4 text-right">What I've learned</h2>
            <hr>
            <p class="fs-1">I graduated from <a href="http://englishschool.ac.cy/" target="_blank">The English School, Nicosia</a> with A-Levels in Mathematics, Computer Science, Economics and Modern Greek. I have now completed the first year of my
                <a href="https://www.qmul.ac.uk/undergraduate/coursefinder/courses/2021/computer-science-with-management-itmb/" target="_blank">BSc Computer Science with Management</a> course at
                <a href="http://qmul.ac.uk/" target="_blank">Queen Mary</a>.</p>
            <p class="fs-1">Throughout school, university and my own free time I have gained a good understanding of the following technologies: Python, Java, HTML, CSS, Javascript, PHP, MySQL. As well as Adobe Premiere Pro which is my video editing software of choice.</p>
        </div>

    </div>
    <!--Skills-->
    <!--experience-->
    <div id="experience-sm"  class="container-sm mt-3 mb-5 pt-4" data-aos="fade-down" data-aos-duration="1000">
        <div data-aos="fade-down" class="post-heading text-center pt-5">
            <h3 class="display-1 font-weight-bold"">Experience</h3>
            <hr class="w-50 mx-auto">
        </div>
        <div class="container">
            <br>
            <div class="top-section">
                <h2 class="display-4 text-center">What I've worked on:</h2>
                <div class="vl align-center" data-aos="flip-up"></div>
                <br>
                <div class="content-mobile pt-5 mt-5" data-aos="zoom-in">
                    <h2 class="display-5 text-center">Lab Demonstrator</h2>
                    <h4 class="time-period display-5 text-center">September 2021 - Present</h4>
                    <p class="fs-1 text-center">
                        Selected to <strong>assist at lab sessions and assessment
                            for Computer Science modules at Queen Mary</strong>,
                        which I scored highly in during my first year.
                        Helping first-year students with these modules
                        has allowed me to further understand some of the
                        concepts taught.
                    </p>
                </div>
                <div class="vl2 align-center" data-aos="flip-up"></div>
                <br>
                <div class="content-mobile pt-5 mt-5" data-aos="zoom-in">
                    <h2 class="display-5 text-center">Summer Intern</h2>
                    <h4 class="time-period display-5 text-center">June 2021 - August 2021</h4>
                    <p class="fs-1 text-center">
                        Worked at <a href="https://socialwayeservices.com/" target="_blank">Socialway eServices</a> <strong>together with
                            the company's web team </strong>on various client websites.
                        This included managing and updating page content through
                        a CMS (Wordpress). I was also tasked with improving the
                        <strong>SEO of some client pages through JSON-LD Schema types. </strong>
                        By the end of my internship I had <strong>written a program
                            to do this automatically.</strong>
                    </p>
                </div>
                <div class="vl3 align-center" data-aos="flip-up"></div>
                <br>
                <div class="content-mobile pt-5 mt-5" data-aos="zoom-in">
                    <h2 class="display-5 text-center">Artillery Soldier</h2>
                    <h4 class="time-period display-5 text-center">June 2019 - September 2020</h4>
                    <p class="fs-1 text-center">
                        As part of my national service, I served 14 months
                        as an artillery soldier. More specifically, I was a
                        <strong>Radio and Communications Specialist</strong>, and part of my duty
                        was contacting my battalion's brigade on a daily basis
                        using mil-spec radio equipment, as well as operating the
                        unit's communication center.
                    </p>
                </div>
                <div class="vl4 align-center" data-aos="flip-up"></div>
                <br>
                <div class="content-mobile pt-5 mt-5" data-aos="zoom-in">
                    <h2 class="display-5 text-center">CTO Quickeat</h2>
                    <h4 class="time-period display-5 text-center">October 2016 - March 2017</h4>
                    <p class="fs-1 text-center">
                        Quickeat was a social media-based company under
                        the <a href="https://www.jaworldwide.org/" target="_blank">Junior Achievement Competition</a>. As the company's
                        CTO, my job was to <strong>film and edit short one minute videos </strong>
                        with a goal to promote healthy eating. As well as <strong>creating and maintaining the company's website.</strong>
                    </p>
                </div>

            </div>
            <br>
        </div>
    </div>
    <!--experience-->
    <!--Services-->
    <div id="service-sm" class="container-sm mt-3 mb-5 pt-2" data-aos="fade-down" data-aos-duration="1000">
        <div class="post-heading text-center pt-5">
            <h2 class="display-1 font-weight-bold">Services</h2>
            <hr class="w-50 mx-auto">
        </div>

        <br>

        <div class="row">
            <div class="web-card col-lg-4 col-md-6 col-12 pb-6">
                <div class="card-transparent border-secondary" data-aos="flip-left">
                    <img src="content/web-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h2 class="display-4 card-title">Web Design</h2>
                        <hr>
                        <p class="card-text fs-2">Responsive website using HTML/CSS/Bootstrap and Javascript.</p>
                        <a href="services/services.html#web-services-sm" class="btn btn-primary fs-2">Learn more</a>
                    </div>
                </div>
            </div>


            <div class="film-card col-lg-4 col-md-6 pb-5">
                <div class="card-transparent border-secondary" data-aos="flip-up">
                    <img src="content/wfilm-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h3 class="card-title display-4">Filming</h3>
                        <hr>
                        <p class="card-text fs-2">Cinematic shots (Up to 4K 25fps) for your product or service. Shot on Lumix G7</p>
                        <a href="services/services.html#film-services-sm" class="btn btn-primary fs-2">Learn more</a>
                    </div>
                </div>
            </div>


            <div class="edit-card col-lg-4 col-md-6 col-12 pb-5">
                <div class="card-transparent border-secondary" data-aos="flip-right">
                    <img src="content/clip-logo.png" class="skill card-img-top bg-transparent" alt="...">
                    <div class="card-body text-white">
                        <h3 class="card-title display-3">Editing</h3>
                        <hr>
                        <p class="card-text fs-2">High quality video edits. This can include both live action and gameplay footage.</p>
                        <a href="services/services.html#editing-services-sm" class="btn btn-primary fs-2">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
        <!--Services-->
        <br>
        <br>

        <div id="contact-sm" class="container w-55 mx-auto mt-3 mb-5">
            <div class="post-heading text-center" data-aos="fade-down">
                <h2 class="display-1 font-weight-bold">Contact</h2>
                <hr class="w-50 mx-auto">
            </div>
            <form id="contact-form-sm" method="POST" action="https://usebasin.com/f/a6dcbd690b2d">
                <div class="display-4">
                    <div class="form-group form-group-lg" data-aos="fade-down">
                        <label for="full-name">Full name:</label>
                        <input name="full-name" type="text" class="form-control fs-3" placeholder="Enter your full name:" id="full-name-sm">
                    </div>
                    <br>
                    <div class="form-group" data-aos="fade-down">
                        <label for="email">Email address:</label>
                        <input name="email" type="email" class="form-control fs-3" placeholder="Enter email address:" id="email-sm">
                    </div>
                    <br>
                    <div class="form-group" data-aos="fade-down">
                        <label for="message">Your message:</label>
                        <textarea name="message" id="message-sm" class="form-control fs-3" placeholder="Enter your message:"></textarea>
                    </div>
                    <br>

                    <input data-aos="fade-down" class="btn btn-primary fs-3" id="submit-sm" type="submit" value="Submit">
                </div>
                <br>
                <br>
                <div class="g-recaptcha" data-sitekey="6Lew3SMUAAAAAJ82QoS7gqOTkRI_dhYrFy1f7Sqy"></div>

            </form>
        </div>
    </div>

    <footer class="bg-dark text-center text-lg-start">

        <!-- Copyright -->
        <div class="footer-container pt-3">
            <ul class="footer-icons d-flex justify-content-center pe-3">
                <li><a href="https://www.linkedin.com/in/chrisloucaides/" target="_blank"><img class="icon" width="55%" src="content/linkedin.png" alt=""></a></li>
                <li><a href="mailto:info@chrisloucaides.com" target="_blank"><img class="icon" width="55%" src="content/mail.png" alt=""></a></li>
                <li><a href="https://github.com/ChrisLoucaides/" target="_blank"><img class="icon" width=55%" src="content/github.png" alt=""></a></li>
                <li class="twitter-icon"><<a href="https://twitter.com/ChrisLoucaides/" target="_blank"><img class="icon_twitter" width="55%" src="content/twitter.png" alt=""></a></li>
            </ul>
        </div>
        <div class="footer-text text-center pt-2 pb-1 display-4" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="d-flex justify-content-center p-1">Powered by: HTML5, CSS, Bootstrap, JavaScript and PHP</p>
            <p class="d-flex justify-content-center">© <script>document.write(new Date().getFullYear())</script> Copyright Christos Loucaides | &nbsp; <a href="index.php">Home</a></p>
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!--END SMALL SCREENS-->

<script>
    AOS.init(); //initialise AOS
</script>


</body>
</html>
