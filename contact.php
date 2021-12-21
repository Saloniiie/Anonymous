<?php
//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

// Start the session
session_start();
?>

<!doctype html>
<html lang="en">



<head>

    <title>Contact Us</title>

    <!-- Tab Icon -->
    <link rel="icon" href="assets/images/logo.png" type="image/icon type">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


    <style>
        .contact {
            color: white !important;
            font-weight: bold !important;
        }

        .slider {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            margin-top: 5%;
            margin-bottom: 2%;
        }

        section {
            display: flex;
            height: 80vh;
            justify-content: center;
            align-items: center;
            margin-top: 5%;
            margin-bottom: 2%;
        }

        .hero {
            height: 60%;
            width: 100%;
            position: relative;
        }

        .hero img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .hero::after {
            content: "";
            background: black;
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0.3;
        }

        .headline {
            position: absolute;
            top: 70%;
            left: 10%;
            font-size: 4rem;
            color: white;
            transform: translate(-20%, -70%);
            z-index: 3;
            font-family: 'Birthstone', cursive !important;
            text-shadow: 0.2rem 0.2rem black;
        }

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        body {
            background-color: white;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /* navbar  */
        /* :root {
            --font: 'Ubuntu', sans-serif;
            --theme-color: rgb(215, 165, 29);
        } */
        
        #map {
            height: fit-content;
            width: fit-content;
            background: white;
            margin: auto;
            margin-top: 5vh;
            overflow-x: hidden !important;
            padding: 0;
        }

        iframe {
            overflow-x: hidden;
            width: 80vw;
        }

        
        .form .col-md-6 [type="email"], .form .col-md-6 [type="text"], .form .col-md-6 [type="tel"] {
            height: 50%;
            display: block;
            width: 100%;
            font-family: var(--font);
            color: white;
            background: black;
            padding-left: 3%;
            padding-right: 3%;
            border: none;
            outline: none;
            background: black;
            color: white;
        }

        
        .form .col-md-6 label {
            height: 50%;
            text-align: left;
            width: 100%;
            padding-left: 3%;
            padding-top: 2%;
            /* font-family: var(--font); */
            text-transform: uppercase;
        }

        

        .form .col-md-6 textarea {
            width: 100%;
            height: 83.333%;
            overflow: scroll;
            margin: 0;
            margin-bottom: -2px;
            overflow: hidden;
            /* font-family: var(--font); */
            border: none;
            outline: none;
            padding: 0 3% 3% 3%;
            background: black;
            color: white;
        }

        .help [type="submit"], .help [type="reset"] {
            padding: 10px;
            width: fit-content;
            height: 6vh;
            text-transform: uppercase;
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            color: black;
        }

        .help [type="submit"]:hover, .help [type="reset"]:hover {
            background: black;
            color: white;
            border: 2px solid white;
        } 

        @media (min-width:700px) {
          .form .row {
          margin: 0 5%;
          }
        }

        .contacts .col-md-4 div {
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            color: black;
            font-size: 15px;
            cursor: pointer;
        }

        .contacts .col-md-4 div a {
            color: black;
        }

        .contacts .col-md-4 div:hover {
            background: #112d32;
            color: white;
        }

        .contacts .col-md-4 div:hover a {
            color: white;
        }

    </style>

</head>

<body>

    <header id="topheader" style="background:black;">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- header section ends -->

    <main>

        <section>
            <div class="hero">
                <img src="assets/images/home/home.png">
                <h1 class="headline"><strong>Reach Us</strong></h1>
            </div>
        </section>
        <div class="slider"></div>


    <!-- map  -->
    <div id="map" class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4470.820046056346!2d75.74254032841235!3d29.134771408134203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391233ced58502c5%3A0xc5468fa3ad518bc1!2sfit.bar!5e0!3m2!1sen!2sin!4v1633002117048!5m2!1sen!2sin"
            width="1150" height="400" style="border:0;" class="map" allowfullscreen="" loading="lazy"></iframe>
    </div> <br><br><br><br>

    <div class="contacts row mx-5">
            <div class="col-md-4">
                <div class="text-center p-4"><a href="tel:+91xxxxxxxxxx"><i class="fas fa-phone fa-2x"></i> &nbsp; +91 xxxxxxxxxx</a></div>
            </div>
            <div class="col-md-4">
                <div class="p-4 text-center"><i class="fas fa-map-marker-alt fa-2x"></i> &nbsp; University Enclave,New Delhi, Delhi 110007</div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4"><a href="mailto:sk27102002@gmail.com"><i class="fas fa-envelope fa-2x"></i> &nbsp; binod@gmail.com</a></div>
            </div>
        </div>  <br><br><br><br>


    <!-- help  -->
    <div class="help" id="help" style="background:black;">

        <br><br><br> <h3 class="text-white text-center">How Can We Help?</h3> <br>

        <div class="text-center"><div style="background:radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);height:3px;width:30vw;margin:auto;"></div></div> <br>

        <p class="text-white text-center px-5">If you’ve got a question, a comment or just want to talk more about your learning goals <br> leave us a message and we’ll be sure to get in touch.</p>

        <form action="https://submit-form.com/AmwWcTC2" method="POST">
            <div class="form">
            <div class="row" style="padding:5%;">
                <div class="col-md-6 bg-black text-white p-0">
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="name">Your Name</label> <br>
                        <input type="text" id="name" name="Name" required>
                    </div>
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="mail">Your Email</label> <br>
                        <input type="email" id="mail" name="Email" required>
                    </div>
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="website">Contact Number</label> <br>
                        <input type="tel" id="website" name="Contact Number" required>
                    </div>
                </div>
                <div class="col-md-6 bg-black text-white p-0" style="border: 1px solid white; height:36vh;">
                <label for="message" style="height:16.6%;">Message</label> <br>
                <textarea name="message" id="message" required></textarea>
                </div>
            </div>
            <div class="text-center d-flex justify-content-center"> 
               <div class="px-3"> <input type="submit" value="Send Message"> </div>
               <div class="px-3"> <input type="reset" value="Cancel"> </div>
            </div>   <br><br><br>
        </form>
    </div>

    <!-- footer section -->
    <?php include 'footer.php'; ?>

    </main>


    <script src="assets/js/main.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Tweenmax links for animation -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        const hero = document.querySelector('.hero');
        const slider = document.querySelector('.slider');
        const headline = document.querySelector('.headline');


        const mytimeline = new TimelineMax();

        mytimeline.fromTo(
            hero,
            1,
            { height: "0%" },
            { height: "80%", ease: Power2.easeInOut }
        )
            .fromTo(
                hero,
                1.2,
                { width: "100%" },
                { width: "80%", ease: Power2.easeInOut }
            )
            .fromTo(
                slider,
                1,
                { x: "-100%" },
                { x: "0%", ease: Power2.easeInOut },
                "-=1"
            )
            .fromTo(
                headline,
                1,
                { opacity: "0.4", x: "30%" },
                { opacity: "1", x: "0%", ease: Power2.easeInOut },
                "-=1"
            )

    </script>


</body>

</html>