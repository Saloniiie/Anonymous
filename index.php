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
  <link rel="icon" href="assets/images/logoo.png" type="image/icon type">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



  <title>BINOD</title>
</head>



<body id="home">
  <header id="topheader">
    <?php include 'navbar.php'; ?>
  </header>

  <main>

    <!--***************************************** hero section *****************************************************-->

    <!-- ========================================= HERO VIDEO =============================================== -->
    <style>
      .home {
        color: white !important;
        font-weight: bold !important;
      }

      .hero .backgroundVideo {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        background-attachment: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -5;
      }

      .hero .video-overlay {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        background-attachment: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
        background: rgba(0, 0, 0, .4);
      }

      .hero h1,
      h2 {
        color: white;
        font-weight: bold;
        text-align: center;
      }

      .hero h1 {
        font-size: 6rem;
        margin-top: 35vh;
      }

      .hero h2 {
        margin-top: 2%;
        font-size: 1.8rem;
        -webkit-perspective: 1000;
        -webkit-transform: translate3d(0, 0, 0);
      }

      .hero h2 div {
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
      }

      .hero h2 div:first-of-type {
        animation: showup 7s infinite;
      }

      .hero h2 div:last-of-type {
        width: 0px;
        animation: reveal 7s infinite;
      }

      .hero h2 div:last-of-type span {
        margin-left: -355px;
        animation: slidein 7s infinite;
      }

      @keyframes showup {
        0% {
          opacity: 0;
        }

        20% {
          opacity: 1;
        }

        80% {
          opacity: 1;
        }

        100% {
          opacity: 0;
        }
      }

      @keyframes slidein {
        0% {
          margin-left: -800px;
        }

        20% {
          margin-left: -800px;
        }

        35% {
          margin-left: 0px;
        }

        100% {
          margin-left: 0px;
        }
      }

      @keyframes reveal {
        0% {
          opacity: 0;
          width: 0px;
        }

        20% {
          opacity: 1;
          width: 0px;
        }

        30% {
          width: 355px;
        }

        80% {
          opacity: 1;
        }

        100% {
          opacity: 0;
          width: 355px;
        }
      }


      .hero h3 {
        color: white;
        text-align: center;
        font-weight: lighter;
        margin-top: 5rem;
      }

      .hero h3 span {
        border: 3px solid white;
        border-radius: 10px;
        font-size: 2rem;
      }

      .hero h3 span a {
        margin: 20px;
        color: white;
      }

      .hero h3 span:hover a {
        color: black;
      }

      .hero h3 span:hover {
        background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
        border: none;
      }

      @media (max-width:800px) {
        .hero h1 {
          font-size: 4rem;
        }
      }

      @media (max-width:500px) {
        .hero h1 {
          font-size: 2rem;
        }

        .hero h2 {
          font-size: 1rem;
        }

        .hero h3 span {
          font-size: 1rem;
        }
      }
    </style>
    <section class="hero">

      <video class="backgroundVideo" autoplay loop muted poster="assets/images/home/homee.png">
        <source src="assets/videos/homee.mp4" type="video/mp4">
      </video>

      <div class="video-overlay"></div>

      <h1>THIS IS A RIVER</h1>
      <h2>
        <div>Escape&nbsp;</div>
        <div> <span>into amazing experiences</span></div>
      </h2>
      <h3><span><a href="about.php">EXPLORE</a></span></h3>
    </section>

    <!-- *********************************************************************************************************************** -->


    <style>
      .read {
        display: inline-block;
        position: relative;
        color: black;
        text-decoration: none;
        padding: 1rem;
        font-weight: 900;
      }

      .read:before,
      .read:after {
        will-change: transform;
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
      }

      .read:before {
        transition: 100ms ease-out 50ms;
        transform-origin: 0 49px;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: white;
      }

      .read:after {
        transition: 50ms ease-out;
        transform: scaleX(0);
        transform-origin: left center;
        bottom: 2px;
        right: -12px;
        border: 8px solid transparent;
        border-left-color: white;
      }

      .read:hover {
        color: black;
      }

      .read:hover:before {
        transition: 100ms ease-out;
        transform: scaleY(0.15);
        background: white;
      }

      .read:hover:after {
        transition: 50ms ease-out 100ms;
        transform: none;
      }

      .read:active:before {
        transition: 100ms ease-in;
        background: white;
      }

      .read:active:after {
        transition: 100ms ease-in;
        border-left-color: white;
      }
    </style>

    <div style="background:white;">

      <section style="margin-top:60vh;padding-top:50px;">
        <div class="m-5"></div>
      </section>

      <section style="position:relative;margin-top:100px;">
        <img src="assets/images/home/aaa.png" alt="">
        <div style="position: absolute;top:55%; left: 3rem;right:3rem;transform:translateY(-55%);">
          <div class="row">
            <div class="col-md-6">
              <h1 class="mb-5 text-uppercase">Opportunities</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt minus repudiandae
                eius impedit numquam qui sapiente magnam vitae dolorem, laboriosam expedita provident deserunt ipsa?
                Porro dolorem amet quo illum?Lorem ipsum dolor sit amet...</p>
              <a href="blogpage.php?topic=Spanish" class="read">Read more</a>
            </div>
          </div>
        </div>
      </section>

      <section style="position:relative;margin-top:100px;">
        <img src="assets/images/home/ggg.png" alt="">
        <div style="position: absolute;top:55%; left: 3rem;right:3rem;transform:translateY(-55%);">
          <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6" style="float:right;">
              <h1 class="mb-5 text-uppercase">Opportunities</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt minus repudiandae
                eius impedit numquam qui sapiente magnam vitae dolorem, laboriosam expedita provident deserunt ipsa?
                Porro dolorem amet quo illum?Lorem ipsum dolor sit amet...</p>
              <a href="blogpage.php?topic=Spanish" class="read">Read more</a>
            </div>
          </div>
        </div>
      </section>

      <section style="position:relative;margin-top:100px;padding-bottom:100px;">
        <img src="assets/images/home/sss.png" alt="">
        <div style="position: absolute;top:55%; left: 3rem;right:3rem;transform:translateY(-55%);">
          <div class="row">
            <div class="col-md-6">
              <h1 class="mb-5 text-uppercase">Opportunities</h1>
              <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod incidunt minus repudiandae
                eius impedit numquam qui sapiente magnam vitae dolorem, laboriosam expedita provident deserunt ipsa?
                Porro dolorem amet quo illum?Lorem ipsum dolor sit amet...</p>
              <a href="blogpage.php?topic=Spanish" class="read">Read more</a>
            </div>
          </div>
        </div>
      </section>

      <!-- *********************************************************************************************************** -->

      <?php include 'footer.php'; ?>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>