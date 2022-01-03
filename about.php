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

  <title>About Us</title>

  <!-- Tab Icon -->
  <link rel="icon" href="assets/images/logoo.png" type="image/icon type">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>


<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>


    <!--============================********** Hero Section **********======================-->


    <style>
      .about {
        color: white !important;
        font-weight: bold !important;
      }


      #my-section {
        position: relative;
      }

      #wrap-cta {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(0, -50%);
        opacity: 0;
      }

      #wrap-cta.active {
        z-index: 2;
        transform: translate(-50%, -50%);
        transition: transform 0.6s, opacity 0.6s;
        opacity: 1;
      }

      #wrap-cta #cta {
        padding: 1rem 2rem;
        text-transform: uppercase;
        color: #f2f2f2;
        background: transparent;
        border: 2px solid;
        border-radius: 5px;
        cursor: pointer;
        outline: none;
        -webkit-tap-highlight-color: transparent;
        transition: background 0.4s;
      }

      #wrap-cta #cta:hover {
        background: rgba(242, 242, 242, 0.1);
      }

      svg {
        display: block;
        width: 100%;
        height: 70vh;
      }

      svg .polymorph {
        fill: rgb(62, 128, 146);
      }

      .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      .container {
        color: #999;
        text-transform: uppercase;
        font-size: 30px;
        font-weight: bold;
        width: 100%;
        display: block;
      }

      #flip {
        height: 50px;
        overflow: hidden;
      }

      #flip>div>div {
        color: #fff;
        padding: 0px 12px;
        height: 45px;
        margin-bottom: 45px;
        display: inline-block;
      }

      #flip div:first-child {
        animation: show 5s linear infinite;
      }

      #flip div div {
        background: #42c58a;
      }

      #flip div:first-child div {
        background: #4ec7f3;
      }

      #flip div:last-child div {
        background: #DC143C;
      }

      @keyframes show {
        0% {
          margin-top: -270px;
        }

        5% {
          margin-top: -180px;
        }

        33% {
          margin-top: -180px;
        }

        38% {
          margin-top: -90px;
        }

        66% {
          margin-top: -90px;
        }

        71% {
          margin-top: 0px;
        }

        99.99% {
          margin-top: 0px;
        }

        100% {
          margin-top: -270px;
        }
      }

      .container #content {
        transform: translateY(-50px);
        opacity: 0;
        color: #112d32;
        transition: transform 0.6s 0.2s, opacity 0.6s 0.2s;
      }

      .container #content #close {
        display: inline-block;
        margin-top: 2rem;
        padding: 0.5rem 1rem;
        text-transform: uppercase;
        font-size: 0.9em;
        color: #112d32;
        background: transparent;
        border: 2px solid;
        border-radius: 5px;
        cursor: pointer;
        outline: none;
        -webkit-tap-highlight-color: transparent;
        transition: background 0.4s;
      }

      .container #content #close:hover {
        background: rgba(62, 128, 146, .3);
      }

      .container #content.active {
        z-index: 4;
        transform: translateY(0);
        opacity: 1;
      }

      @media (min-height:300px) and (max-height:600px) {
        svg {
          display: block;
          width: 100%;
          height: 100vh;
        }

        .container {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translateX(-50%);
          text-align: center;
        }
      }
    </style>

    <section id="my-section">
      <div class="active" id="wrap-cta">
        <button id="cta">Click here, please!</button>
      </div>
      <svg viewBox="0 0 215 110" preserveAspectRatio="none">
        <polygon class="polymorph" points="215,110 0,110 0,0 215,0"></polygon>
      </svg>
      <div class="container">
        <div id="content">
          Make
          <div id=flip>
            <div>
              <div>wOrK</div>
            </div>
            <div>
              <div>lifeStyle</div>
            </div>
            <div>
              <div>Everything</div>
            </div>
          </div>
          AweSoMe! <br>
          <button id="close">Ok, close me</button>
        </div>
      </div>
    </section>
    <!--*** End Hero Section ***-->


    <!-- ************************************************************************************************************************************** -->

    <style>
      @media (min-width:700px) {
        .hero2 {
          margin: 5%;
        }

        .crew p {
          padding: 0 5%;
        }
      }
    </style>

    <section class="my-5 hero2">
      <div class="row">

        <!-- =================================================== GLOBE ANIMATION ============================================= -->
        <style>
          .ball {
            display: inline-block;
            width: 100%;
            height: 100%;
            margin: 0;
            border-radius: 50%;
            position: relative;
            -webkit-transform-style: preserve-3d;
            background: url('http://hop.ie/balls/images/world-map-one-color.png') repeat-x;
            background-size: auto 100%;
            -webkit-animation: move-map 30s infinite linear;
            -moz-animation: move-map 30s infinite linear;
            -o-animation: move-map 30s infinite linear;
            -ms-animation: move-map 30s infinite linear;
            animation: move-map 30s infinite linear;
          }

          @media (max-width:1000px) {
            .ball {
              left: 50%;
            }
          }

          @media (max-width:600px) {
            .ball {
              left: 20%;
            }
          }

          @media (max-width:500px) {
            .ball {
              left: 10%;
            }
          }

          @media (max-width:400px) {
            .ball {
              left: 3%;
            }
          }

          .ball:before {
            content: "";
            position: absolute;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            box-shadow: -40px 10px 70px 10px rgba(0, 0, 0, 0.5) inset;
            z-index: 2;
          }

          .ball:after {
            content: "";
            position: absolute;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0%;
            -webkit-filter: blur(0);
            opacity: 0.3;
            background: radial-gradient(circle at 50% 80%, #81e8f6, #76deef 10%, #055194 66%, #062745 100%);
          }

          .ball .shadow {
            position: absolute;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1) 40%, rgba(0, 0, 0, 0) 50%);
            -webkit-transform: rotateX(90deg) translateZ(-150px);
            -moz-transform: rotateX(90deg) translateZ(-150px);
            -ms-transform: rotateX(90deg) translateZ(-150px);
            -o-transform: rotateX(90deg) translateZ(-150px);
            transform: rotateX(90deg) translateZ(-150px);
            z-index: -1;
          }

          .stage {
            width: 300px;
            height: 300px;
            display: inline-block;
            margin: 20px;
            -webkit-perspective: 1200px;
            -moz-perspective: 1200px;
            -ms-perspective: 1200px;
            -o-perspective: 1200px;
            perspective: 1200px;
            -webkit-perspective-origin: 50% 50%;
            -moz-perspective-origin: 50% 50%;
            -ms-perspective-origin: 50% 50%;
            -o-perspective-origin: 50% 50%;
            perspective-origin: 50% 50%;
          }

          @-moz-keyframes move-map {
            0% {
              background-position: -849px 0;
            }

            100% {
              background-position: 0 0;
            }
          }

          @-webkit-keyframes move-map {
            0% {
              background-position: 0 0;
            }

            100% {
              background-position: -849px 0;
            }
          }


          @-o-keyframes move-map {
            0% {
              background-position: -849px 0;
            }

            100% {
              background-position: 0 0;
            }
          }

          @-ms-keyframes move-map {
            0% {
              background-position: -849px 0;
            }

            100% {
              background-position: 0 0;
            }
          }

          @keyframes move-map {
            0% {
              background-position: -849px 0;
            }

            100% {
              background-position: 0 0;
            }
          }
        </style>

        <div class="col-lg-3">
          <div class="stage">
            <figure class="ball"><span class="shadow"></span></figure>
          </div>
        </div>
        <div class="col-lg-9">
          <p class="p-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit commodi eveniet ducimus, quae
            corrupti consequatur deserunt error, esse consectetur eum quisquam earum modi eligendi nesciunt, quidem
            magnam itaque provident a fugiat. Minus assumenda aperiam quasi blanditiis. Obcaecati delectus aut amet
            quam. Accusamus obcaecati amet quidem odit porro, nemo nisi facere. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Aliquid quia placeat dolore obcaecati accusantium eligendi ipsa autem aspernatur
            similique, hic laboriosam sit, voluptate repellat, earum numquam deleniti rem tempore repudiandae? Minus
            sapiente deleniti, nisi eveniet id nam tenetur corporis a ex praesentium voluptates sunt harum recusandae
            asperiores reiciendis expedita laudantium! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga
            perferendis recusandae, consequuntur reprehenderit dolore velit sunt quos, voluptate veritatis impedit,
            fugit hic vel officiis ut? Dignissimos blanditiis provident, similique eveniet facere ipsum eius sit iusto
            reprehenderit dolorum veniam quia, enim, asperiores cumque? Voluptatem omnis provident, iusto veritatis
            vitae minus quasi.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque culpa quisquam ut necessitatibus mollitia
            quasi est consequatur dolor aliquid soluta aliquam fuga doloremque esse, ipsa delectus quos vero facilis
            dignissimos voluptates nisi corrupti voluptas, quae ad maxime? Sequi, repudiandae nemo. Itaque aut laborum
            inventore quam molestias ipsam repudiandae dignissimos dicta. </p>
        </div>
      </div>
    </section>
    <!-- ************************************************************************************************************************************** -->



    <!-- <br><br><br><br> -->
    <!--****************************************************** crew section ***************************************************************-->

    <!-- <section class="crew" style="background:black;color:white;"> <br><br><br><br>

        <div class="d-flex text-center text-justify mx-5">
          <div class="flex-grow-1" style="background:white; height:3px;"></div>
          <div style="font-size:2rem;color:white;margin-top:-2%;" class="px-5">The Crew</div>
          <div class="flex-grow-1" style="background:white; height:3px;"></div>
        </div>  <br><br>

        <div class="row mx-5">
          <div class="col-md-1"></div>
          <div class="col-md-2"><img src="assets/images/home/pic2.jfif" alt="" class="img-fluid"></div>
          <div class="col-md-2"><img src="assets/images/home/pic2.jfif" alt="" class="img-fluid"></div>
          <div class="col-md-2"><img src="assets/images/home/pic2.jfif" alt="" class="img-fluid"></div>
          <div class="col-md-2"><img src="assets/images/home/pic2.jfif" alt="" class="img-fluid"></div>
          <div class="col-md-2"><img src="assets/images/home/pic2.jfif" alt="" class="img-fluid"></div>
          <div class="col-md-1"></div>
        </div>

        <br><br><br>  <div style="background:white; height:3px;" class="mx-5"></div>  <br><br><br>
    </section> -->

    <!-- ************************************************************************************************************************************** -->

    <?php include 'footer.php' ; ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

  <script>
    const wrapCta = document.querySelector('#wrap-cta'),
      btnCta = document.querySelector('#cta'),
      content = document.querySelector('#content'),
      btnClose = document.querySelector('#close');


    // Anime.js Commons Values for SVG Morph
    const common = {
      targets: '.polymorph',
      easing: 'easeOutQuad',
      duration: 600,
      loop: false
    };



    // Show content
    btnCta.addEventListener('click', () => {
      // Elements apparence
      wrapCta.classList.remove('active');
      content.classList.add('active');

      // Morph SVG
      anime({
        ...common,
        points: [
          { value: '215,110 0,110 186,86 215,0' }]
      });


    });


    // Hide content  
    btnClose.addEventListener('click', () => {
      // Elements apparence
      content.classList.remove('active');
      wrapCta.classList.add('active');

      // Morph SVG
      anime({
        ...common,
        points: [
          { value: '215,110 0,110 0,0 215,0' }]
      });


    });



  </script>

</body>

</html>