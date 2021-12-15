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
    .header2{
    padding: 15%;
    width: 100%;
	  height: 65vh;
	  color: white;
    background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
	  background-size: cover;
	  background-position: center;
	  background-attachment: fixed;
    font-family: 'Birthstone', cursive  !important;
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
    0%  { background-color: #ccc; }
    49% { background-color: #ccc; }
    50% { background-color: transparent; }
    99% { background-color: transparent; }
    100%  { background-color: #ccc; }  
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
                <h2>For the love of Antiques!</h2>
                <br>
            </div>
        </div>
        


        <div class="card m-5">
          <div class="row g-0">
            <div class="col-md-5">
               <img src="assets/images/home/ggg.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
               <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
          </div>
        </div>

        <div class="card m-5">
          <div class="row g-0">
          <div class="col-md-5 order-md-2">
               <img src="assets/images/home/sss.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7 order-md-1">
               <div class="card-body">
                   <h5 class="card-title">Card title</h5>
                   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                   <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
          </div>
        </div>


        <div style="background:radial-gradient(circle, rgba(101,105,112,1) 0%, rgba(0,0,0,1) 100%);" class="m-5">
        <div class="p-5 my-5 text-white">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, libero molestiae minus tempore dignissimos dicta veritatis quia saepe fugiat reprehenderit animi unde iste earum nisi sed omnis nostrum, quas, quisquam impedit quasi quis maiores. Amet delectus similique quaerat dolor accusamus velit consequatur harum repellat, veniam aliquam! Numquam molestias nostrum debitis quidem. Neque, quo quam! Amet numquam fuga facere est consectetur possimus provident explicabo omnis dignissimos illum voluptate esse, earum, ullam vel sit
        </div> </div>

        <?php include 'footer.php' ; ?>


    </main>




    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Something can be old, but it can be timeless.", "An antique is anything old with class.", "I collect antiques. Why? Because they're beautiful."];
        const typingDelay = 100;
        const erasingDelay = 100;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
          if (charIndex < textArray[textArrayIndex].length) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
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
           if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
           typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
           charIndex--;
           setTimeout(erase, erasingDelay);
         } 
         else {
           cursorSpan.classList.remove("typing");
           textArrayIndex++;
           if(textArrayIndex>=textArray.length) textArrayIndex=0;
           setTimeout(type, typingDelay + 1100);
         }
       }

       document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
         if(textArray.length) setTimeout(type, newTextDelay + 250);
       });
    </script>

</body>

</html>    