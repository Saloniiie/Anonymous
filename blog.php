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

  <title>Blog</title>

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
  .blog {
    color: white !important;
    font-weight: bold !important;
  }

  .header2 {
    padding: 15%;
    width: 100%;
    height: 65vh;
    color: white;
    background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    font-family: 'Birthstone', cursive !important;
  }

  .header2 span.cursor {
    display: inline-block;
    background-color: #ccc;
    margin-left: 0.1rem;
    width: 3px;
    animation: blink 1s infinite;
  }

  .header2 span.cursor.typing {
    animation: none;
  }

  @keyframes blink {
    0% {
      background-color: #ccc;
    }

    49% {
      background-color: #ccc;
    }

    50% {
      background-color: transparent;
    }

    99% {
      background-color: transparent;
    }

    100% {
      background-color: #ccc;
    }
  }

  @media (max-width:1100px) {
    .header2-info {
      margin-top: 150px;
    }
  }

  @media (max-width:600px) {
    .header2-info {
      margin-top: 100px;
    }
  }

  .divider {
    background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
    height: 3px;
    margin: 25px auto;
    width: 50px;
  }

  @media (min-width:700px) {
    .container .row {
      margin: 5%;
    }
  }

  .container .share i, .container .share2 i {
    color: black;
    font-size: 1.5rem;
  }

  .container .share:hover i, .container .share2:hover i {
    color: rgb(62, 128, 146);
  }

  .container .views {
    font-size: 1.5rem;
  }

  @media (max-width:500px) {
  .container .share i, .container .share2 i {
      font-size: 1rem;
  }
  .container .views {
    font-size: 1rem;
  }
  }

  .cta {
    position: relative;
    margin: auto;
    padding: 19px 22px;
    transition: all 0.2s ease;
    color: #112d32;
  }
  .cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 28px;
  background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
  width: 56px;
  height: 56px;
  transition: all 0.3s ease;
  }
  .cta span {
  position: relative;
  font-size: 16px;
  font-weight: 900;
  vertical-align: middle;
  }
  .cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #111;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
  }
  .cta:hover {
  color: #112d32;
  }
  .cta:hover:before {
  width: 100%;
  background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
  }
  .cta:hover svg {
  transform: translateX(0);
  }
  .cta:active {
  transform: scale(0.96);
  }

</style>


<body>

  <header id="topheader" style="background:black;">
    <?php include 'navbar.php'; ?>
  </header>
  <!-- header section ends -->

  <main>

    <div class="header2 mt-5" style="background-attachment:fixed;">
      <div class="header2-info text-center">
        <h1><b><span class="typed-text"></span><span class="cursor text-white">&nbsp;</span></b></h1>
        <br>
        <h2>Lorem ipsum dolor sit amet!</h2>
        <br>
      </div>
    </div> <br><br><br>

    <?php include '_dbConnect.php';
              $sql = "select * from blog";
              $result = mysqli_query($conn,$sql);

              while($row = mysqli_fetch_assoc($result)) : ?>


    <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 text-center text-justify p-0">
          <img src="<?=$row['image']?>" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 p-5" style="box-shadow: 2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center title">
            <?=$row['topic']?>
          </div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">
              <?=$row['sdesc']?>
            </span></p>

          <br><br>
          <div class="d-flex">
          <div class="flex-grow-1"><a href="blogpage.php?topic=<?= $row['topic'] ?>" class="cta">
          <span> Read more </span>
          <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
          </svg>
          </a></div>
          <div class="text-muted views"><i class="fas fa-eye"></i>&nbsp;<?=$row['views']?>&nbsp;&nbsp;&nbsp;</div>
          <div class="share"><i class="fas fa-share-alt"></i></div>
          </div>
          <br><br>

        </div>
      </div>
    </div> <br>

    <?php if($row2 = mysqli_fetch_assoc($result)) : ?>
      <div class="container">
      <div class="row my-5">

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-2 text-center text-justify p-0">
          <img src="<?=$row2['image']?>" class="img-fluid" style="background:#112d32;">
        </div>

        <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-1 p-5" style="box-shadow: -2px 2px 2px -1px rgba(0, 0, 0, 0.75);"> <br>
          <div style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;"
            class="text-center title2">
            <?=$row2['topic']?>
          </div>
          <div class="divider"></div>

          <p><span style="font-weight:300; font-size:18px;" class="text-muted text-justify">
              <?=$row2['sdesc']?>
            </span></p>

          <br><br>
          <div class="d-flex">
          <div class="flex-grow-1"><a href="blogpage.php?topic=<?= $row2['topic'] ?>" class="cta">
          <span> Read more </span>
          <svg width="13px" height="10px" viewBox="0 0 13 10">
            <path d="M1,5 L11,5"></path>
            <polyline points="8 1 12 5 8 9"></polyline>
          </svg>
          </a></div>
          <div class="text-muted views"><i class="fas fa-eye"></i>&nbsp;<?=$row2['views']?>&nbsp;&nbsp;&nbsp;</div>
          <div class="share2"><i class="fas fa-share-alt"></i></div>
          </div>
          <br><br>

        </div>
      </div>
    </div> <br>

    <?php endif; ?>
    <?php endwhile; ?>

    <br><br><br>

    <?php include 'modal.php' ; ?>
    <?php include 'footer.php' ; ?>


  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    


  <script>
    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Something can be old, but it can be timeless.", "An antique is anything old with class.", "I collect antiques. Why? Because they're beautiful."];
    const typingDelay = 100;
    const erasingDelay = 100;
    const newTextDelay = 2000;
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
      if (charIndex < textArray[textArrayIndex].length) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
      }
      else {
        cursorSpan.classList.remove("typing");
        setTimeout(erase, newTextDelay);
      }
    }

    function erase() {
      if (charIndex > 0) {
        if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
        typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(erase, erasingDelay);
      }
      else {
        cursorSpan.classList.remove("typing");
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) textArrayIndex = 0;
        setTimeout(type, typingDelay + 1100);
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      if (textArray.length) setTimeout(type, newTextDelay + 250);
    });

// *********************************************************************************************

    var $url = $(location).attr('href');


    let share = document.querySelector('.share');
    share.addEventListener('click', () => {
          modal1.classList.add('active');
          var title = $(this).closest('.col-lg-6').find('.title').text();
          var $url1 = $url.substr(0,$url.indexOf("b"));
          $url1 = $url1 + "blogpage.php?topic=" + title; 
          $(".body1").text($url1);
    });

    function copyurl1() {
      copyToClipboard($url1);
    }


    let share2 = document.querySelector('.share2');
    share2.addEventListener('click', () => {
          modal2.classList.add('active');
          var title2 = $(this).closest('.row').find('.title2').text();
          var $url2 = $url.substr(0,$url.indexOf("b"));
          $url2 = $url2 + "blogpage.php?topic=" + title2;
          $(".body2").text($url2);
    });

    function copyurl2() {
      copyToClipboard($url2);
    }



    function copyToClipboard(value) {
      navigator.clipboard.writeText(value);
      $(".clipboard").text("URL Copied !");
    }

  </script>

</body>

</html>