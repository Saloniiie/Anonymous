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
  .divider {
    background: #112d32;
    height: 2px;
    margin: 25px auto;
    width: 40px;
  }
  .about{
    color: white !important;
    font-weight: bold !important;
  }
  .read-more {
    bottom: 25px;
    color: #112d32;
    cursor: pointer;
    left: 50%;
    padding: 5px;
    text-decoration: none;
  }

  .read-more:hover,
  .read-more:focus,
  .read-more:visited {
    color: black;
    text-decoration: none;
  }

  @media (min-width:1100px) {
    .container .row {
      margin: 5%;
    }
    .hero2 {
      margin: 5%;
    }
    .crew p {
      padding: 0 5%;
    }
  }

  .hero {
    width: 100%;
    height: 70vh;
    background: url("assets/images/home/about.png") top center;
    background-size: cover;
    background-attachment: fixed;
  }

  .hero .hero-container {
    position: relative;
    z-index: 2;
    min-width: 300px;
  }

  .hero .hello {
    margin: 0 0 10px 0;
    font-size: 300%;
    font-weight: 500;
    line-height: 56px;
    color: #fff;
  }

  .hero .name {
    font-size: 250%;
    font-weight: 500;
    line-height: 56px;
    color: #fff;
    font-family: "Poppins", sans-serif;
  }

  @media (max-width:768px) {
    .hero .hero-container {
      margin-left: 50px;
      font-size: 100%;
    }

    .hero {
      width: 100vw;
      height: 100vh;
    }
  }

  @media (max-width:500px) {

    .hero .hero-container {
      margin-left: 40px;
      font-size: 60%;
    }

    .hero {
      width: 100vw;
      height: 100vh;
    }
  }
</style>

<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>


    <!--********** Hero Section **********-->

    <section class="hero d-flex flex-column justify-content-center align-items-center">
      <div class="hero-container">
        <div class="hello">Lorem, ipsum dolor.</div>
        <div class="name">Lorem ipsum dolor sit amet.</div>
      </div>
    </section> <!--*** End Hero Section ***-->


    <!-- ************************************************************************************************************************************** -->
    <section class="my-5 hero2">
      <p class="p-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit commodi eveniet ducimus, quae corrupti consequatur deserunt error, esse consectetur eum quisquam earum modi eligendi nesciunt, quidem magnam itaque provident a fugiat. Minus assumenda aperiam quasi blanditiis. Obcaecati delectus aut amet quam. Accusamus obcaecati amet quidem odit porro, nemo nisi facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quia placeat dolore obcaecati accusantium eligendi ipsa autem aspernatur similique, hic laboriosam sit, voluptate repellat, earum numquam deleniti rem tempore repudiandae? Minus sapiente deleniti, nisi eveniet id nam tenetur corporis a ex praesentium voluptates sunt harum recusandae asperiores reiciendis expedita laudantium! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga perferendis recusandae, consequuntur reprehenderit dolore velit sunt quos, voluptate veritatis impedit, fugit hic vel officiis ut? Dignissimos blanditiis provident, similique eveniet facere ipsum eius sit iusto reprehenderit dolorum veniam quia, enim, asperiores cumque? Voluptatem omnis provident, iusto veritatis vitae minus quasi. </p>
    </section>
    <!-- ************************************************************************************************************************************** -->


    <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 text-center text-justify p-0">
          <img src="assets/images/home/blog.jfif" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 p-5" style="box-shadow: 2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center">Spanish</div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">Lorem ipsum dolor sit amet
              consectetur, adipisicing elit. Quia consequuntur eum, sequi ea dolorum provident odio nihil sapiente neque
              voluptate laudantium blanditiis officiis. Velit quas, deserunt, libero placeat hic nulla quasi, veritatis
              mollitia iusto quam perspiciatis illo! Dicta, possimus assumenda. Natus itaque exercitationem velit libero
              nulla adipisci ea odit ullam? </span></p> <br><br>

          <div class="text-center"><a href="languages.php?lname=" class="read-more"><i
                class="fas fa-chevron-circle-down fa-3x"></i></a></div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-2 text-center text-justify p-0">
          <img src="assets/images/home/blog.jfif" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-1 p-5" style="box-shadow: -2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center">Spanish</div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">Lorem ipsum dolor sit amet
              consectetur, adipisicing elit. Quia consequuntur eum, sequi ea dolorum provident odio nihil sapiente neque
              voluptate laudantium blanditiis officiis. Velit quas, deserunt, libero placeat hic nulla quasi, veritatis
              mollitia iusto quam perspiciatis illo! Dicta, possimus assumenda. Natus itaque exercitationem velit libero
              nulla adipisci ea odit ullam? </span></p> <br><br>

          <div class="text-center"><a href="languages.php?lname=" class="read-more"><i
                class="fas fa-chevron-circle-down fa-3x"></i></a></div>

        </div>
      </div>
    </div>


    <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 text-center text-justify p-0">
          <img src="assets/images/home/blog.jfif" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 p-5" style="box-shadow: 2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center">Spanish</div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">Lorem ipsum dolor sit amet
              consectetur, adipisicing elit. Quia consequuntur eum, sequi ea dolorum provident odio nihil sapiente neque
              voluptate laudantium blanditiis officiis. Velit quas, deserunt, libero placeat hic nulla quasi, veritatis
              mollitia iusto quam perspiciatis illo! Dicta, possimus assumenda. Natus itaque exercitationem velit libero
              nulla adipisci ea odit ullam? </span></p> <br><br>

          <div class="text-center"><a href="languages.php?lname=" class="read-more"><i
                class="fas fa-chevron-circle-down fa-3x"></i></a></div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-2 text-center text-justify p-0">
          <img src="assets/images/home/blog.jfif" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-1 p-5" style="box-shadow: -2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center">Spanish</div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">Lorem ipsum dolor sit amet
              consectetur, adipisicing elit. Quia consequuntur eum, sequi ea dolorum provident odio nihil sapiente neque
              voluptate laudantium blanditiis officiis. Velit quas, deserunt, libero placeat hic nulla quasi, veritatis
              mollitia iusto quam perspiciatis illo! Dicta, possimus assumenda. Natus itaque exercitationem velit libero
              nulla adipisci ea odit ullam? </span></p> <br><br>

          <div class="text-center"><a href="languages.php?lname=" class="read-more"><i
                class="fas fa-chevron-circle-down fa-3x"></i></a></div>

        </div>
      </div>
    </div>

    <br><br><br><br>
    <!--****************************************************** crew section ***************************************************************-->

    <section class="crew" style="background:black;color:white;"> <br><br><br><br>

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

        <h2 class="text-center text-white">What make us different?</h2> <br>
        <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic modi, natus error fugiat rem neque libero dolorem quae molestias reprehenderit voluptatibus excepturi? Ratione quod asperiores repellat eos, reprehenderit, nesciunt ipsum exercitationem eaque totam, illum ipsam nemo impedit quos omnis distinctio maiores beatae quae mollitia molestias laudantium quas aliquid assumenda ut! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero veritatis itaque ipsa molestias sequi, culpa provident quas. Sapiente veritatis nulla doloribus praesentium quibusdam quos consequatur facere! Itaque, suscipit. Commodi ratione asperiores quos reiciendis, ullam aliquam explicabo labore velit quasi atque porro, laudantium, esse architecto rerum accusamus voluptatum dolorem similique ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil soluta mollitia numquam perferendis illo sunt, cum ipsam rem magni deserunt assumenda, delectus doloribus dolore dignissimos ad id! Qui, officiis modi fuga quae voluptatum in recusandae ipsum harum vero id, eius, perferendis cumque. Inventore cupiditate necessitatibus earum, autem enimm!</p> <br><br><br><br>
    </section>

    <!-- ************************************************************************************************************************************** -->

    <?php include 'footer.php' ; ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>