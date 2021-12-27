<?php
//Tell PHP to log errors
ini_set('log_errors', 'On');
//Tell PHP to not display errors
ini_set('display_errors', 'Off');
//Set error_reporting to E_ALL
ini_set('error_reporting', E_ALL );

include '_dbConnect.php';

// Start the session
session_start();

$topic = $_GET['topic'];

$sqll = "SELECT * FROM `blog` WHERE `topic`='$topic'";
$resultt = mysqli_query($conn,$sqll);
$roww = mysqli_fetch_assoc($resultt);

$views = $roww['views'];
$views = $views + 1;

$id = $roww['id'];


$sqlll = "UPDATE `blog` SET `views`='$views' WHERE `id`='$id'";
$resultt = mysqli_query($conn,$sqlll);

?>

<!doctype html>
<html lang="en">



<head>

  <title>Blog :
    <?= $roww['topic'] ?>
  </title>

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


<style>
  .row h1 {
    font-weight: 200;
  }

  .blog {
    color: white !important;
    font-weight: bold !important;
  }

  .share i {
    color: black;
    font-size: 1.5rem;
  }

  .share:hover i {
    color: rgb(62, 128, 146);
  }

  .views {
    font-size: 1.3rem;
  }

  .icon {
    font-size: 4rem;
  }

  .writtenby {
    font-size: .8rem;
  }

  .wname {
    font-size: 1rem;
  }

  @media (max-width:500px) {
    .share i {
      font-size: 1rem;
    }

    .views {
      font-size: 1rem;
    }

    .icon {
      font-size: 3rem;
    }

    .writtenby {
      font-size: .5rem;
    }

    .wname {
      font-size: .8rem;
    }
  }

  @media (min-width:700px) {
    .wbwname {
      margin-top: 10px;
    }
  }

  .card .wrapper {
    background-color: #fff;
    min-height: 500px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.2);
  }

  .card .wrapper:hover .data {
    transform: translateY(0);
    top: 50%;
    background: white;
  }

  .card .data {
    position: absolute;
    bottom: 0;
    width: 100%;
    transform: translateY(calc(70px + 1em));
    transition: transform 0.3s;
  }

  .card .data .content {
    padding: 1em;
    position: relative;
    z-index: 1;
  }

  .card .author {
    font-size: 12px;
  }

  .card .title {
    margin-top: 10px;
  }

  .card .text {
    height: 70px;
    margin: 0;
  }

  .card .content {
    background-color: #fff;
    box-shadow: 0 5px 30px 10px rgba(0, 0, 0, 0.3);
  }

  .card .title a {
    color: #112d32;
  }

</style>

<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>

    <!-- ************************************************************************************************************************** -->

    <div class="mt-5"><img src="<?=$roww['image']?>" alt=""
        style="width:100vw;background-attachment:fixed;position:absolute;z-index:-1;"></div>


    <!-- ************************************************************************************************************************** -->

    <div style="background:white;margin-top:60vh;padding:50px; padding-top:100px;" class="px-md-5 mx-md-5">
      <div>
        <h1 class="px-md-5 main-title" style="font-family:Playfair Display SC;">
          <?= $roww['topic'] ?>
        </h1>
      </div>
      <p class="p-md-5 my-md-5">
        <?= $roww['ldesc'] ?>
      </p>
      <div style="height:3px; background:radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);">
      </div> <br><br>
      <div class="px-md-5 mx-md-5 d-flex">
        <div><i class="fas fa-user-circle icon"></i></div>
        <div class="flex-grow-1 wbwname"><span><span class="p-3 writtenby">WRITTEN BY</span> <br> <span
              class="p-3 text-primary wname">
              <?=$roww['wname']?>
            </span></span></div>
        <div class="views text-muted"><i class="fas fa-eye"></i>&nbsp;
          <?=$roww['views']?>&nbsp;&nbsp;&nbsp;
        </div>
        <div class="share"><i class="fas fa-share-alt"></i></div>
      </div> <br><br>
    </div>

    <!-- ************************************************************************************************************************** -->

    <h1 class="text-center mt-5" style="color:#112d32;font-family:Playfair Display SC;">lorem</h1>
    <div class="row mb-5">

      <?php 
        $sqlll = "select * from blog";
        $resulttt = mysqli_query($conn,$sqlll);
        $i = 0;
        while($i < 3) : ?>

      <?php
        $rowww = mysqli_fetch_assoc($resulttt);
        if($roww['id'] != $rowww['id']) : ?>
      <div class="col-lg-4 p-5">
        <div class="card card">
          <div class="wrapper" style="background: url(<?=$rowww['image']?>) 20% 1%/cover no-repeat;">
            <div class="data">
              <div class="content">
                <div class="d-flex">
                  <div class="author flex-grow-1">
                    <?=$rowww['wname']?>
                  </div>
                  <div><i class="fas fa-eye"></i>&nbsp;
                    <?=$rowww['views']?> &nbsp;&nbsp;
                  </div>
                </div>
                <h1 class="title"><a href="blogpage.php?topic=<?=$rowww['topic']?>">
                    <?=$rowww['topic']?>
                  </a></h1>
                <p class="text">
                  <?=$rowww['sdesc']?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $i++; ?>
      <?php endif; ?>
      <?php endwhile; ?>
    </div>

    <!-- ************************************************************************************************************************** -->

    <?php include 'modal.php' ; ?>
    <?php include 'footer.php' ; ?>
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script>

    let share1 = document.querySelector('.share');
    share1.addEventListener('click', () => {
          modal1.classList.add('active');
    });

    var $url = $(location).attr('href');
    $(".body1").text($url);

    function copyurl1() {
      copyToClipboard($url);
    }


    function copyToClipboard(value) {
      navigator.clipboard.writeText(value);
      $(".clipboard").text("URL Copied !");
    }

  </script>

</body>

</html>