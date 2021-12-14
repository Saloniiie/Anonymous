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

    <title>Contact US</title>

    <!-- Tab Icon -->
    <link rel="icon" href="assests/images/logo.png" type="image/icon type">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


<style>
        
    .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        z-index: -1;
        background: linear-gradient(90deg, rgba(29,53,87,1) 0%, rgba(69,123,157,1) 53%, rgba(168,218,220,1) 100%);
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
        font-family: 'Birthstone', cursive!important;
        text-shadow: 0.2rem 0.2rem black;
    }
</style>

</head>

<body>

    <header id="topheader" style="background:#254e58;">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- header section ends -->

    <main>

        <section>
            <div class="hero">
                <img src="assests/images/home/home.png">
                <h1 class="headline"><strong>Reach Us</strong></h1>
            </div>
        </section>
        <div class="slider"></div>

        

        
    </main>

    <!-- footer section -->
    <?php //include 'footer.php'; ?>


    <script src="assests/js/main.js"></script>

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
        {   width: "80%", ease: Power2.easeInOut}
    )
    .fromTo(
        slider, 
        1,
        { x: "-100%" }, 
        { x: "0%", ease: Power2.easeInOut},
        "-=1"
    )
    .fromTo(
        headline, 
        1,
        { opacity: "0.4", x: "30%" }, 
        { opacity: "1", x: "0%", ease: Power2.easeInOut},
        "-=1"
    )

</script>


</body>

</html>