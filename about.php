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

    .image {
        background: url("assets/images/home/home.png");
        z-index: -1;
        background-attachment: fixed;
    }
    
.blog-card {
  background-color: white;
  border-radius: 1px;
  box-shadow: 2px 2px 2px -1px rgba(0, 0, 0, 0.75);
  height: 450px;
  margin: 0 auto;
  max-width: 70vw;
  overflow: hidden;
}
.blog-card-2 {
    box-shadow: -2px 2px 2px -1px rgba(0, 0, 0, 0.75);
}
@media (max-width: 580px) {
  .blog-card {
    height: 350px;
    overflow: visible;
  }
}
.media {
  background-position: center;
  background-size: cover;
  height: 100%;
}
.card-body {
  color: #7A7A7A;
  height: 100%;
  padding: 30px 20px 50px;
}
@media (max-width: 530px) {
  .card-body {
    background-color: white;
  }
}
.title {
  color: #252830;
  font-family: "Playfair Display SC";
  font-size: 30px;
  font-weight: 400;
}
.divider {
  background: #112d32;
  height: 2px;
  margin: 25px auto;
  width: 40px;
}
.paragraph {
  font-weight: 300;
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
</style>

<body>

    <header id="topheader" style="background:black;">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- header section ends -->

    <main>


    <div class="image">
        <h1>Lorem, ipsum dolor.</h1>
        <h3>Lorem ipsum dolor sit amet.</h3>
    </div>

    <div class="container-fluid m-5">
        <div class="blog-card row">
            <div class="media col-lg-6" style="background-image: url(assets/images/home/blog.jfif)"></div>
            <div class="card-body col-lg-6 mt-5">
                <h3 class="title text-center">Blue Ocean Waves Crash</h3>
                <div class="divider"></div>
                <p class="paragraph text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia consequuntur eum, sequi ea dolorum provident odio nihil sapiente neque voluptate laudantium blanditiis officiis. Velit quas, deserunt, libero placeat hic nulla quasi, veritatis mollitia iusto quam perspiciatis illo! Dicta, possimus assumenda. Natus itaque exercitationem velit libero nulla adipisci ea odit ullam?</p>
                <div class="text-center"><a href="languages.php?lname=" class="read-more" style="font-size:2rem;"><i class="fas fa-chevron-circle-down"></i></a></div>
            </div>
        </div>
    </div>

    <div class="container-fluid m-5">
        <div class="blog-card blog-card-2 row">
            <div class="media col-lg-6 order-lg-2" style="background-image: url(assets/images/home/blog.jfif)"></div>
            <div class="card-body col-lg-6 order-lg-1 mt-5">
                <h3 class="title text-center">Blue Ocean Waves Crash</h3>
                <div class="divider"></div>
                <p class="paragraph text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quasi magni tempore a nobis soluta excepturi nostrum est alias dolorum dolorem eligendi iusto provident repellendus maiores optio ratione ex necessitatibus, consectetur nulla illo laborum qui. Accusantium soluta fugit tempora doloribus odit amet earum. Ipsam quas, atque commodi unde magni officiis!</p>
                <div class="text-center"><a href="languages.php?lname=" class="read-more" style="font-size:2rem;"><i class="fas fa-chevron-circle-down"></i></a></div>
            </div>
        </div>
    </div>

       <?php include 'footer.php' ; ?>
    </main>

</body>
</html>