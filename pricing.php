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
</style>


<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>
    <br><br><br><br><br>

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


    <?php include 'footer.php' ; ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>