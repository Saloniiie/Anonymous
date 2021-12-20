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

 .container p .btn {
   background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
 }

 .container p .btn a {
   color: black;
 }

 .container p .btn:hover {
   background: #112d32;
 }

 .container p .btn:hover a {
   color: white;
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
        </div>

        <?php include '_dbConnect.php';
              $sql = "select * from blog";
              $result = mysqli_query($conn,$sql);

              while($row = mysqli_fetch_assoc($result)) : ?>
        

        <div class="container">
            <div class="row" style="padding: 3%;">

               <div class="col-xs-12 col-sm-12 col-lg-6" style="padding-right: 6%;padding: 3%;  padding-top: 5%; "> 
                    <img src="<?= $row['image'] ?>" class="img-fluid" style="box-shadow: -5px 5px 8px rgba(0,0,0,.5); background:#112d32;">
               </div>
    
            <div class="col-xs-12 col-sm-12 col-lg-6" style="padding: 3%;">
                 <br><br><br><br>
                 <span style="padding: 10px;padding-left:0; font-size: 30px;font-family:Playfair Display SC;"><strong><?= strtoupper($row['topic']) ?></strong></span> <br><br>
      
              <p><br>
                 <span style="font-size: 18px; "> <?= $row['sdesc'] ?> </span>
      

                 <br><br><br><br>
                 <span class="btn"><a href="blogpage.php?topic=<?= $row['topic'] ?>">  &nbsp; Read more  &nbsp; </a></span>
                 <span style="float:right; font-size:1.5rem;"><i class="fas fa-share-alt"></i>&nbsp;&nbsp;</span>
                 <span class="text-muted" style="float:right; font-size:1.5rem;"><i class="fas fa-eye"></i>&nbsp; <?=$row['views']?>&nbsp;&nbsp;&nbsp;</span>
                 <br><br>
              </p>
            </div>
           </div>
         </div>

         <?php if($row2 = mysqli_fetch_assoc($result)) : ?>
         <div class="container">
            <div class="row" style="padding: 3%;">

               <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-2" style="padding-right: 6%;padding: 3%;  padding-top: 5%;"> 
                    <img src="<?= $row2['image'] ?>" class="img-fluid" style="box-shadow: 5px 5px 8px rgba(0,0,0,.5); background:#112d32;">
               </div>
    
            <div class="col-xs-12 col-sm-12 col-lg-6 order-lg-1" style="padding: 3%;">
                 <br><br><br><br>
                 <span style="padding: 10px;padding-left:0; font-size: 30px;font-family:Playfair Display SC;"> <strong><?= strtoupper($row2['topic']) ?></strong> </span> <br><br>
      
              <p><br>
                 <span style="font-size: 18px; "> <?= $row2['sdesc'] ?> </span>
      

                 <br><br><br><br>
                 <span class="btn"><a href="blogpage.php?topic=<?= $row2['topic'] ?>">  &nbsp; Read more  &nbsp; </a></span>
                 <span style="float:right; font-size:1.5rem;"><i class="fas fa-share-alt"></i>&nbsp;&nbsp;</span>
                 <span class="text-muted" style="float:right; font-size:1.5rem;"><i class="fas fa-eye"></i>&nbsp; <?=$row2['views']?>&nbsp;&nbsp;&nbsp;</span>
                 <br><br>
              </p>
            </div>
           </div>
         </div> 

         <?php endif; ?>
         <?php endwhile; ?>
        
         <br><br><br>

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