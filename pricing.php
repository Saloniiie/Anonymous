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

  <title>Pricing</title>

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
  @media (min-width:1100px) {
    .container .row {
      margin: 5%;
    }
    .aboutprice {
      margin: 5%;
      padding-top: 5%;
    }
    .comparison {
      margin-left: 5%;
      margin-right: 5%;
    }
    .whyus {
      margin-left: 8%;
      margin-right: 8%;
    }
  }
  .pricing{
    color: white !important;
    font-weight: bold !important;
  }
  .read-more {
    color: #112d32;
    cursor: pointer;
    text-decoration: none;
  }

  .read-more:hover,
  .read-more:focus,
  .read-more:visited {
    color: black;
    text-decoration: none;
  }

  .aboutprice {
    margin-top: 70vh;
  }
  @media (min-width:500px) and (max-width:1100px) {
     .aboutprice {
       margin-top: 55vh;
     }
  }
  @media (max-width:500px) {
     .aboutprice {
       margin-top: 40vh;
     }
  }

  .comparison .col-lg-4 p {
    background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
    color: black;
    border-radius: 30px;
  }

</style>


<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>
    

  <!-- ************************************************************************************************************************ -->
    
    <img src="assets/images/price.jfif" alt="" style="width:100vw;position:absolute;top:0;left:0;background-attachment:fixed;z-index:-1;">

    <div class="bg-white">
    <div class="aboutprice px-5"> <br><br>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda esse voluptatum tempore tempora sint sit non vel dolorum eos odio ipsam doloremque fuga quod nam libero voluptatibus quaerat laboriosam, fugit incidunt deleniti eius. Eos ipsum asperiores cupiditate officiis nobis corrupti corporis omnis ut tenetur. Voluptate, provident dignissimos optio voluptatibus eius quidem ipsum velit ab neque ex culpa esse amet nihil nesciunt quaerat, eos tempore doloremque quisquam cupiditate sequi enim corporis. Totam libero aspernatur, alias repellat omnis, autem iusto vero saepe expedita vel incidunt in suscipit hic repudiandae corporis laudantium numquam necessitatibus modi nisi quia optio, enim nam ducimus voluptatum. Explicabo harum consequatur repellat sint error mollitia modi sit, possimus cupiditate accusamus voluptatibus veritatis obcaecati nihil doloribus magnam adipisci voluptas ad tempore quia voluptatem dolorem necessitatibus numquam. Vero, possimus ullam error voluptatem facere quisquam, eos cumque nemo distinctio vitae ut libero, eligendi aperiam perferendis necessitatibus in repudiandae cupiditate perspiciatis excepturi!
    </div> <br><br><br>

    <!-- ************************************************************************************************************************ -->

    <div class="container my-5">
      <div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
        <div class="col-lg-7"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
            style="margin-top:-10%;margin-right:0;padding:5%"></div>
        <div class="col-lg-5 p-5 position-relative">
          <h2 class="text-center"
            style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">German</h2>
          <br>
          <div style="height:3px;background:#112d32;"></div> <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga itaque at quisquam
            aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae doloribus. Iste
            reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt ducimus eum
            laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
          <div style="margin-right:-15%; margin-bottom:-20%; float:right;" class="read-more"><i
              class="fas fa-chevron-circle-down fa-4x"></i></div>
        </div>
      </div>
    </div> <br>

    <div class="container my-5">
      <div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
        <div class="col-lg-7 order-lg-2"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
            style="margin-top:-10%;margin-right:0;padding:5%"></div>
        <div class="col-lg-5 p-5 order-lg-1 position-relative">
          <h2 class="text-center"
            style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">German</h2>
          <br>
          <div style="height:3px;background:#112d32;"></div> <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga itaque at quisquam
            aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae doloribus. Iste
            reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt ducimus eum
            laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
          <div style="margin-left:-15%; margin-bottom:-20%; float:left;" class="read-more"><i
              class="fas fa-chevron-circle-down fa-4x"></i></div>
        </div>
      </div>
    </div> <br>

    <div class="container my-5">
      <div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
        <div class="col-lg-7"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
            style="margin-top:-10%;margin-right:0;padding:5%"></div>
        <div class="col-lg-5 p-5 position-relative">
          <h2 class="text-center"
            style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">German</h2>
          <br>
          <div style="height:3px;background:#112d32;"></div> <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga itaque at quisquam
            aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae doloribus. Iste
            reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt ducimus eum
            laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
          <div style="margin-right:-15%; margin-bottom:-20%; float:right;" class="read-more"><i
              class="fas fa-chevron-circle-down fa-4x"></i></div>
        </div>
      </div>
    </div> <br>

    <div class="container my-5">
      <div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
        <div class="col-lg-7 order-lg-2"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
            style="margin-top:-10%;margin-right:0;padding:5%"></div>
        <div class="col-lg-5 p-5 order-lg-1 position-relative">
          <h2 class="text-center"
            style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">German</h2>
          <br>
          <div style="height:3px;background:#112d32;"></div> <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga itaque at quisquam
            aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae doloribus. Iste
            reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt ducimus eum
            laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
          <div style="margin-left:-15%; margin-bottom:-20%; float:left;" class="read-more"><i
              class="fas fa-chevron-circle-down fa-4x"></i></div>
        </div>
      </div>
    </div> <br>
    </div>

<!-- ************************************************************************************************************************ -->


    <div style="background:black; color:white;">
    <br><br><br>
    <h1 class="text-center">Comparison with Competitors</h1> <br>
    <div class="text-center"><div style="background:radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);height:3px;width:30vw;margin:auto;"></div></div> <br>
    <br><br>
    <div class="row comparison px-5">
      <div class="col-lg-4 p-2">
        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero id harum expedita tenetur cum perspiciatis enim omnis modi blanditiis ab ratione nam velit, doloremque suscipit quibusdam maxime totam illum obcaecati placeat asperiores distinctio deserunt voluptatibus? Atque dolorem voluptate magnam veritatis, culpa repudiandae necessitatibus illo reiciendis quam soluta quasi vel optio.</p>
      </div>
      <div class="col-lg-4 p-2">
        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero id harum expedita tenetur cum perspiciatis enim omnis modi blanditiis ab ratione nam velit, doloremque suscipit quibusdam maxime totam illum obcaecati placeat asperiores distinctio deserunt voluptatibus? Atque dolorem voluptate magnam veritatis, culpa repudiandae necessitatibus illo reiciendis quam soluta quasi vel optio.</p>
      </div>
      <div class="col-lg-4 p-2">
        <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero id harum expedita tenetur cum perspiciatis enim omnis modi blanditiis ab ratione nam velit, doloremque suscipit quibusdam maxime totam illum obcaecati placeat asperiores distinctio deserunt voluptatibus? Atque dolorem voluptate magnam veritatis, culpa repudiandae necessitatibus illo reiciendis quam soluta quasi vel optio.</p>
      </div>
    </div>  <br><br><br><br>

    <!-- ************************************************************************************************************************ -->

    <h2 class="text-center">Why Us?</h2> <br>
    <div class="text-center"><div style="background:radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);height:3px;width:30vw;margin:auto;"></div></div> <br><br><br>
    <div class="whyus">
      <p class="p-5" style="border:3px solid white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, odio tempora rem accusantium eum exercitationem quam blanditiis aliquam, excepturi placeat accusamus a optio itaque quis ab ipsum in ipsam perspiciatis repudiandae magnam esse odit. Quod dicta voluptatibus fugiat soluta labore, voluptas quae praesentium odio molestias, corporis nihil, accusamus architecto modi excepturi omnis eius similique. Tenetur at aspernatur libero officiis adipisci labore eius, expedita neque reprehenderit dolorum ipsa veritatis doloremque velit numquam esse rerum eligendi porro totam ea a, quas dicta similique quae iure! Debitis, sequi suscipit deleniti, voluptates error blanditiis cupiditate voluptas illo iure rem nobis autem at iste, architecto officiis? Illum reiciendis rerum placeat, possimus repellendus, tenetur provident repellat nemo reprehenderit culpa obcaecati corrupti quis odit. Quisquam ex laudantium, vel debitis ratione nisi ea porro atque explicabo voluptates nulla iste odit ipsa consequuntur numquam impedit enim vitae quae molestias aperiam delectus! Optio in neque corporis inventore nisi blanditiis dolore?</p> <br><br><br><br>
    </div>
    </div>

    <!-- ************************************************************************************************************************ -->

    <?php include 'footer.php' ; ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>