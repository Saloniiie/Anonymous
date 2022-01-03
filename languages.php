<?php
//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

// Start the session
session_start();

$topic = $_GET['language'];
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



  <title><?= $topic ?></title>
</head>

<body id="home">
  <header id="topheader">
    <?php include 'navbar.php'; ?>
  </header>

  <main>

    <!--***************************************** hero section *****************************************************-->

    <!-- ================================================ HERO VIDEO ================================== -->
    <style>

      .Languages {
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

      .wrapper h1 {
        color: white;
        font-weight: bold;
        text-align: center;
      }

      .wrapper h1 {
        font-size: 6rem;
        margin-top: 45vh;
      }

      @media (max-width:800px) {
        .wrapper h1 {
          font-size: 4rem;
        }
      }

      @media (max-width:500px) {
        .wrapper h1 {
          font-size: 2rem;
        }
      }

      .wrapper {
        text-align: center;
      }

      .wrapper h1 {
        color: #fff;
        text-transform: uppercase;
        font-weight: 700;
        font-family: "Josefin Sans", sans-serif;
        background: linear-gradient(to right, #095fab 10%, #25abe8 50%, #57d75b 60%);
        background-size: auto auto;
        background-clip: border-box;
        background-size: 200% auto;
        color: #fff;
        background-clip: text;
        text-fill-color: transparent;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: textclip 1.5s linear infinite;
        display: inline-block;
      }

      @keyframes textclip {
        to {
          background-position: 200% center;
        }
      }
    </style>

    <section class="hero">

      <video class="backgroundVideo" autoplay loop muted poster="assets/images/home/homee.png">
        <source src="assets/videos/homee.mp4" type="video/mp4">
      </video>

      <div class="video-overlay"></div>

      <div class="wrapper">
        <h1>GERMANY</h1>
      </div>
    </section>

    <!-- ************************************************************************************************************** -->

    <div style="background:white;margin-top:60vh;padding-top:5%;">

    <!-- =============================================== TURNING PAGES ======================================= -->
      <style>
        .imgLoader {
          position: fixed;
          -webkit-animation: preLoad 1s steps(1);
          animation: preLoad 1s steps(1);
          width: 1px;
          height: 1px;
        }

        @-webkit-keyframes preLoad {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
          }

          10% {
            background-image: url("https://picsum.photos/420/300?random=2");
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=3");
          }

          30% {
            background-image: url("https://picsum.photos/420/300?random=4");
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=5");
          }

          100% {
            display: none;
          }
        }

        @keyframes preLoad {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
          }

          10% {
            background-image: url("https://picsum.photos/420/300?random=2");
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=3");
          }

          30% {
            background-image: url("https://picsum.photos/420/300?random=4");
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=5");
          }

          100% {
            display: none;
          }
        }

        .container {
          position: relative;
          width: 420px;
          border: #fff solid 2px;
          border-radius: 4px;
          height: 420px;
        }

        .book {
          position: relative;
          perspective: 630px;
          perspective-origin: center 50px;
          transform: scale(1.2);
          filter: drop-shadow(0px 10px 5px rgba(0, 0, 0, 0.25));
        }

        .page {
          width: 210px;
          height: 300px;
          background-color: #bbb;
          position: absolute;
          top: 0px;
          right: 50%;
          transform-origin: 100% 100%;
          border: solid #555 2px;
          background-size: 420px 300px;
          background-position: center;
          transform-style: preserve-3d;
        }

        .page:nth-child(1) {
          transform: rotateX(60deg) rotateY(3deg);
        }

        .page:nth-child(2) {
          transform: rotateX(60deg) rotateY(4.5deg);
        }

        .page:nth-child(3) {
          transform: rotateX(60deg) rotateY(6deg);
          -webkit-animation: nextPage 25s infinite -24s steps(1);
          animation: nextPage 25s infinite -24s steps(1);
          background-size: 420px 300px;
          background-position: -2px -2px;
        }

        .page:nth-child(4) {
          transform: rotateX(60deg) rotateY(177deg);
        }

        .page:nth-child(5) {
          transform: rotateX(60deg) rotateY(175.5deg);
        }

        .page:nth-child(6) {
          transform: rotateX(60deg) rotateY(174deg);
          overflow: hidden;
        }

        .page:nth-child(6)::after {
          content: "";
          width: 210px;
          height: 300px;
          position: absolute;
          top: 0px;
          right: 0%;
          transform-origin: center;
          transform: rotateY(180deg);
          -webkit-animation: nextPage 25s -20s infinite steps(1);
          animation: nextPage 25s -20s infinite steps(1);
          background-size: 420px 300px;
          background-position: 100% -2px;
        }

        @-webkit-keyframes nextPage {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
          }
        }

        @keyframes nextPage {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
          }
        }

        .gap {
          width: 10px;
          height: 300px;
          background: none;
          transform: rotateX(60deg);
          transform-origin: bottom;
          position: absolute;
          top: 0px;
          left: calc(50% - 5px);
        }

        .gap::after {
          content: "";
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translate(-50%, 50%);
          background-color: #555;
          width: 10px;
          height: 5px;
          border-radius: 50%;
        }

        .pages,
        .flips {
          transform-style: preserve-3d;
        }

        .flip {
          width: 32px;
          height: 300px;
          position: absolute;
          top: 0px;
          transform-origin: 100% 100%;
          right: 100%;
          border: solid #555;
          border-width: 2px 0px;
          perspective: 4200px;
          perspective-origin: center;
          transform-style: preserve-3d;
          background-size: 420px 300px;
        }

        .flip::after {
          content: "";
          position: absolute;
          top: 0px;
          right: 0%;
          width: 100%;
          height: 100%;
          transform-origin: center;
          background-size: 420px 300px;
        }

        .flip.flip1 {
          right: 50%;
          -webkit-animation: flip1 5s infinite ease-in-out;
          animation: flip1 5s infinite ease-in-out;
          border-width: 2px 2px 2px 0;
        }

        .flip.flip1::after {
          -webkit-animation: nextFlip1 25s -20s infinite steps(1);
          animation: nextFlip1 25s -20s infinite steps(1);
        }

        .flip:not(.flip1) {
          right: calc(100% - 2px);
          top: -2px;
          transform-origin: right;
          -webkit-animation: flip2 5s ease-in-out infinite;
          animation: flip2 5s ease-in-out infinite;
        }

        .flip.flip2::after {
          -webkit-animation: nextFlip2 25s -20s infinite steps(1);
          animation: nextFlip2 25s -20s infinite steps(1);
        }

        .flip.flip3::after {
          -webkit-animation: nextFlip3 25s -20s infinite steps(1);
          animation: nextFlip3 25s -20s infinite steps(1);
        }

        .flip.flip4::after {
          -webkit-animation: nextFlip4 25s -20s infinite steps(1);
          animation: nextFlip4 25s -20s infinite steps(1);
        }

        .flip.flip5::after {
          -webkit-animation: nextFlip5 25s -20s infinite steps(1);
          animation: nextFlip5 25s -20s infinite steps(1);
        }

        .flip.flip6::after {
          -webkit-animation: nextFlip6 25s -20s infinite steps(1);
          animation: nextFlip6 25s -20s infinite steps(1);
        }

        .flip.flip7::after {
          -webkit-animation: nextFlip7 25s -20s infinite steps(1);
          animation: nextFlip7 25s -20s infinite steps(1);
        }

        .flip.flip7 {
          width: 30px;
          border-width: 2px 0px 2px 2px;
        }

        .flip.flip7::after {
          -webkit-animation: nextFlip7 25s -20s infinite steps(1);
          animation: nextFlip7 25s -20s infinite steps(1);
        }

        @-webkit-keyframes flip1 {

          0%,
          20% {
            transform: rotateX(60deg) rotateY(6deg);
          }

          80%,
          100% {
            transform: rotateX(60deg) rotateY(174deg);
          }
        }

        @keyframes flip1 {

          0%,
          20% {
            transform: rotateX(60deg) rotateY(6deg);
          }

          80%,
          100% {
            transform: rotateX(60deg) rotateY(174deg);
          }
        }

        @-webkit-keyframes flip2 {

          0%,
          20% {
            transform: rotateY(0deg) translateY(0px);
          }

          50% {
            transform: rotateY(-15deg) translateY(0px);
          }
        }

        @keyframes flip2 {

          0%,
          20% {
            transform: rotateY(0deg) translateY(0px);
          }

          50% {
            transform: rotateY(-15deg) translateY(0px);
          }
        }

        @-webkit-keyframes nextFlip1 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          10% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          30% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          50% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          70% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          90% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip1 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          10% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          30% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          50% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          70% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -178px -2px;
            transform: rotateY(0deg);
          }

          90% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -210px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip2 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          10.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          30.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          50.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          70.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          90.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip2 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          10.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          30.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          50.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          70.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -148px -2px;
            transform: rotateY(0deg);
          }

          90.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -238px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip3 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          11% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          31% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          51% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          71% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          91% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip3 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          11% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          31% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          51% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          71% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -118px -2px;
            transform: rotateY(0deg);
          }

          91% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -268px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip4 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          11.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          31.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          51.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          71.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          91.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip4 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          11.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          31.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          51.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          71.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -88px -2px;
            transform: rotateY(0deg);
          }

          91.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -298px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip5 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          12% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          32% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          52% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          72% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          92% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip5 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          12% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          32% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          52% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          72% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -58px -2px;
            transform: rotateY(0deg);
          }

          92% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -328px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip6 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          12.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          32.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          52.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          72.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          92.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip6 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          12.5% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          32.5% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          52.5% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          72.5% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -28px -2px;
            transform: rotateY(0deg);
          }

          92.5% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -358px -2px;
            transform: rotateY(180deg);
          }
        }

        @-webkit-keyframes nextFlip7 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          13% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          33% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          53% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          73% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          93% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }
        }

        @keyframes nextFlip7 {
          0% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          13% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          20% {
            background-image: url("https://picsum.photos/420/300?random=2");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          33% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          40% {
            background-image: url("https://picsum.photos/420/300?random=3");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          53% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          60% {
            background-image: url("https://picsum.photos/420/300?random=4");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          73% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }

          80% {
            background-image: url("https://picsum.photos/420/300?random=5");
            background-position: -2px -2px;
            transform: rotateY(0deg);
          }

          93% {
            background-image: url("https://picsum.photos/420/300?random=1");
            background-position: -388px -2px;
            transform: rotateY(180deg);
          }
        }
      </style>

      <div class="row">

        <div class="col-xl-4 order-xl-2">

          <div class="imgLoader"></div>

          <div class="container">

            <div class="book">
              <div class="gap"></div>
              <div class="pages">
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
                <div class="page"></div>
              </div>
              <div class="flips">
                <div class="flip flip1">
                  <div class="flip flip2">
                    <div class="flip flip3">
                      <div class="flip flip4">
                        <div class="flip flip5">
                          <div class="flip flip6">
                            <div class="flip flip7"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-8 p-5 order-xl-1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorum qui aut necessitatibus facilis in esse
          dolores doloribus quam, corporis quos, nam fuga aliquid perferendis aliquam sapiente. Repellendus animi quas
          omnis. Sint maiores esse aliquam debitis expedita exercitationem amet, illum, nemo sapiente distinctio
          architecto doloribus labore blanditiis soluta sit eaque. Ducimus porro qui optio libero accusantium nostrum id
          rerum voluptas assumenda aliquam reprehenderit incidunt labore blanditiis, repellendus, exercitationem sit
          obcaecati odio provident. Mollitia corrupti quidem distinctio dicta modi nisi ratione! Sequi repellat ducimus
          corporis, libero quasi amet accusantium provident eligendi minus, neque facilis. Eaque sit nam saepe magnam.
          Quia, fugiat culpa velit cupiditate dolores corporis cum corrupti doloribus, quae quos modi pariatur numquam
          sed nobis hic dicta architecto aut ad consequuntur. Corporis qui nisi error delectus maiores neque fuga earum
          perferendis blanditiis soluta fugit necessitatibus, repellat voluptatibus ea repellendus rem porro veritatis
          atque possimus nam, eum ipsam cum dolor. Officia, quos reprehenderit debitis consequatur, delectus molestiae
          sunt animi quas omnis necessitatibus, quis aliquid molestias architecto nulla tempora atque ducimus rerum
          veniam. Consequuntur unde quibusdam veritatis ad amet doloribus aperiam atque commodi ex repellat iste magnam,
          dolorum tempora nesciunt blanditiis voluptates ullam autem expedita nam similique veniam soluta sed est
          tempore?
        </div>
      </div>

      <!-- ******************************************************************************************************************* -->
      

      <?php include 'footer.php'; ?>
    </div>

  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>


</body>

</html>