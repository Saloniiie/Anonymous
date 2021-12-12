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
    <!-- Tab Icon -->
    <link rel="icon" href="assests/images/logo.png" type="image/icon type">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="assests/css/navbar.css">
    <link rel="stylesheet" href="assests/css/index.css">


    <title>BINOD</title>
</head>

<body id="home">
    <header id="topheader">
    <?php include 'navbar.php'; ?>
    </header>

 <main>

 <!--***************************************** hero section *****************************************************-->
    <section class="hero">

       <video class="backgroundVideo" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
         <source src="assests/videos/home.mp4" type="video/mp4">
       </video>

       <div class="video-overlay"></div>

       <h1>THIS IS A RIVER.</h1>
       <h2>How majestic.</h2>
       <h3><span><a href="pricing.php">EXPLORE</a></span></h3>
    </section>

    <section style="background:white;margin-top:80vh;">
        <div class="m-5 p-5 mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, facilis provident numquam atque saepe vitae deleniti eius veritatis quasi odit, at amet, veniam ad quos illum temporibus. Laudantium ducimus quidem porro velit nulla voluptate. Ipsum voluptas, eum, ex tempora, obcaecati vitae nam consectetur tenetur molestias ratione perferendis earum quaerat voluptatum.
        </div>
    </section>


    <?php include 'footer.php'; ?>
 </main>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="assests/js/main.js"></script>    

</body>

</html>