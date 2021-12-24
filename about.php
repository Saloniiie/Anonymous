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
  <link rel="icon" href="assets/images/logo.png" type="image/icon type">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>

<style>

  .about{
    color: white !important;
    font-weight: bold !important;
  }
  
  @media (min-width:700px) {
    .hero2 {
      margin: 5%;
    }
    .crew p {
      padding: 0 5%;
    }
  }

 /* ****************************** hero section ******************************  */
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
  fill: rgb(62,128,146);
  }

  .container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
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
  background: rgba(62,128,146,.3);
  }
  .container #content.active {
  z-index: 4;
  transform: translateY(0);
  opacity: 1;
  }
</style>

<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>


    <!--********** Hero Section **********-->

    <section id="my-section">
       <div class="active" id="wrap-cta">
          <button id="cta">Click here, please!</button>
       </div>
       <svg viewBox="0 0 215 110" preserveAspectRatio="none">
         <polygon class="polymorph" points="215,110 0,110 0,0 215,0"></polygon>
       </svg>
       <div class="container">
          <div id="content">
             <h1>Lorem ipsum dolor sit amet</h1>
             <p>Dolor sit amet et consectquo lorem ipsum dolor sit amet</p>
             <button id="close">Ok, close me</button>
          </div>
      </div>
    </section>
    <!--*** End Hero Section ***-->


    <!-- ************************************************************************************************************************************** -->
    <section class="my-5 hero2">
      <p class="p-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit commodi eveniet ducimus, quae corrupti consequatur deserunt error, esse consectetur eum quisquam earum modi eligendi nesciunt, quidem magnam itaque provident a fugiat. Minus assumenda aperiam quasi blanditiis. Obcaecati delectus aut amet quam. Accusamus obcaecati amet quidem odit porro, nemo nisi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quia placeat dolore obcaecati accusantium eligendi ipsa autem aspernatur similique, hic laboriosam sit, voluptate repellat, earum numquam deleniti rem tempore repudiandae? Minus sapiente deleniti, nisi eveniet id nam tenetur corporis a ex praesentium voluptates sunt harum recusandae asperiores reiciendis expedita laudantium! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis recusandae, consequuntur reprehenderit dolore velit sunt quos, voluptate veritatis impedit, fugit hic vel officiis ut? Dignissimos blanditiis provident, similique eveniet facere ipsum eius sit iusto reprehenderit dolorum veniam quia, enim, asperiores cumque? Voluptatem omnis provident, iusto veritatis vitae minus quasi. </p>
    </section>
    <!-- ************************************************************************************************************************************** -->

    

    <br><br><br><br>
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
  loop: false };



  // Show content
  btnCta.addEventListener('click', () => {
  // Elements apparence
  wrapCta.classList.remove('active');
  content.classList.add('active');

  // Morph SVG
  anime({
    ...common,
    points: [
    { value: '215,110 0,110 186,86 215,0' }] });


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
    { value: '215,110 0,110 0,0 215,0' }] });


  });
</script>

</body>

</html>