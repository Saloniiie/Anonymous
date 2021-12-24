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

    <title>Contact Us</title>

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


<style>

        .contact {
            color: white !important;
            font-weight: bold !important;
        }

        
        /* clock thingy  */

        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  .containerr{
    height: fit-content;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
    padding-bottom: 15vh;
    flex-wrap: wrap;
    width: 100vw;
    padding-top : 20vh;
  }
  .clock{
    flex-shrink: 0;
    position: relative;
    height: clamp(180px, 30vw, 260px);
    width: clamp(180px, 30vw, 260px);
    border-radius: 50%;
    box-shadow: 1rem 1rem 2rem rgba(0, 0, 0, .1),
                -1rem -1rem 2rem rgba(24, 20, 20, 0.5);
    margin: 1vw;
    
    
  }
  #germany{
      /* background: url(usa.jpg); */
      background-image: url(assets/images/contact/germany.png);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
  }
  #india{
    background-image: url(assets/images/contact/indiaa.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  #france{
    background-image: url(assets/images/contact/france.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  #spanish{
    background-image: url(assets/images/contact/spain.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  #italy{
    background-image: url(assets/images/contact/italy.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  .clock__strokes,
  .clock__strokes-hours,
  .clock__strokes-minutes,
  .clock__pointers{
    position: absolute;
    height: 100%;
    width: 100%;
  }
  .clock__strokes-hours{
    z-index: 200;
  }
  .clock__strokes-hours span,
  .clock__strokes-minutes span{
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
  }
  
  .clock__strokes-hours span::before{
    content: "";
    background-color: #b6bbc5;
    background-color: #848484;
    height: 24px;
    height: clamp(14px, 4.23vw, 12px);
    width: 5px;
    border-radius: 10px;
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__strokes-minutes span:before{
    content: "";
    background-color: #b6bbc5;
    height: 12px;
    height: clamp(7.76px, 2.11vw, 12px);
    width: 2px;
    border-radius: 10px;
    display: inline-block;
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-hours,
  .clock__pointers-minutes,
  .clock__pointers-seconds,
  .clock__pointers-dot{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .clock__pointers-dot{
    height: clamp(13px, 3.53vw, 20px);
    width: clamp(13px, 3.53vw, 20px);
    border-radius: 50%;
    background-color: #202020;
    border: 2px solid #dae1eb;
    z-index: 600;
  }
  .clock__pointers-hours{
    z-index: 300;
  }
  .clock__pointers-minutes{
    z-index: 400;
  }
  .clock__pointers-seconds{
    z-index: 500;
  }
  
  .clock__pointers-hours::before{
    content: "";
    background-color: #848484;
    height: clamp(64px, 10.47vw, 84px);
    width: 8px;
    border-radius: 10px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-hours::after{
    content: "";
    background-color: #848484;
    height: clamp(13px, 3.53vw, 10px);
    width: 8px;
    border-radius: 10px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-minutes::before{
    content: "";
    background-color: #b6bbc5;
    height: clamp(88px, 12vw, 120px);
    width: 5px;
    border-radius: 10px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-minutes::after{
    content: "";
    background-color: #b6bbc5;
    height: clamp(15px, 4.41vw, 25px);
    width: 5px;
    border-radius: 10px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-seconds::before{
    content: "";
    background-color: #e57373;
    height: clamp(88px, 13vw, 120px);
    width: 3px;
    border-radius: 10px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
  }
  .clock__pointers-seconds::after{
    content: "";
    background-color: #e57373;
    height: clamp(19px, 5.29vw, 30px);
    width: 3px;
    border-radius: 10px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
  }

        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');

        body {
            background-color: white;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        /* navbar  */
        /* :root {
            --font: 'Ubuntu', sans-serif;
            --theme-color: rgb(215, 165, 29);
        } */
        
        #map {
            height: fit-content;
            width: fit-content;
            background: white;
            margin: auto;
            margin-top: 5vh;
            overflow-x: hidden !important;
            padding: 0;
        }

        iframe {
            overflow-x: hidden;
            width: 80vw;
        }

        
        .form .col-md-6 [type="email"], .form .col-md-6 [type="text"], .form .col-md-6 [type="tel"] {
            height: 50%;
            display: block;
            width: 100%;
            font-family: var(--font);
            color: white;
            background: black;
            padding-left: 3%;
            padding-right: 3%;
            border: none;
            outline: none;
            background: black;
            color: white;
        }

        
        .form .col-md-6 label {
            height: 50%;
            text-align: left;
            width: 100%;
            padding-left: 3%;
            padding-top: 2%;
            /* font-family: var(--font); */
            text-transform: uppercase;
        }

        

        .form .col-md-6 textarea {
            width: 100%;
            height: 83.333%;
            overflow: scroll;
            margin: 0;
            margin-bottom: -2px;
            overflow: hidden;
            /* font-family: var(--font); */
            border: none;
            outline: none;
            padding: 0 3% 3% 3%;
            background: black;
            color: white;
        }

        .help [type="submit"], .help [type="reset"] {
            padding: 10px;
            width: fit-content;
            height: 6vh;
            text-transform: uppercase;
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            color: black;
        }

        .help [type="submit"]:hover, .help [type="reset"]:hover {
            background: black;
            color: white;
            border: 2px solid white;
        } 

        @media (min-width:700px) {
          .form .row {
          margin: 0 5%;
          }
        }

        .contacts .col-md-4 div {
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            color: black;
            font-size: 15px;
            cursor: pointer;
        }

        .contacts .col-md-4 div a {
            color: black;
        }

        .contacts .col-md-4 div:hover {
            background: #112d32;
            color: white;
        }

        .contacts .col-md-4 div:hover a {
            color: white;
        }
        .join-link{
            width : 100vw;
            height : 13vh;
            background : #112d32;
            display : flex;
            align-items : center;
            justify-content : center;
            
        }
        .join-link p{
            font-size : 30px;
            margin-bottom : 0;
            
        }
        .join-link button{
            padding: 5px;
            width: fit-content;
            height: fit-content;
            text-transform: uppercase;
            font-size : 24px;
            background: radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);
            color: black;
            margin-left : 10px;
        }
        .join-link button:hover{
            background: #112d32;
            border : solid white 2px;
        }
        .join-link button:hover a{
            color : white;
        }
        .join-link a{
            color : black;
        }
        .join-link span{
            height: fit-content;
            width: fit-content;
        }
</style>

</head>

<body>

    <header id="topheader" style="background:black;">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- header section ends -->

    <main>

    <div class="containerr">
  <div class="clock" id="germany">
    <div class="clock__strokes">
      <div id="strokesHours" class="clock__strokes-hours"></div>
      <div id="strokesMinutes" class="clock__strokes-minutes"></div>
    </div>
    <div class="clock__pointers">
      <div class="clock__pointers-hours" id="hours"></div>
      <div class="clock__pointers-minutes" id="minutes"></div>
      <div class="clock__pointers-seconds" id="seconds"></div>
      <div class="clock__pointers-dot"></div>
    </div>
  </div>

  <div class="clock" id="india">
    <div class="clock__strokes">
      <div id="strokesHours2" class="clock__strokes-hours"></div>
      <div id="strokesMinutes2" class="clock__strokes-minutes"></div>
    </div>
    <div class="clock__pointers">
      <div class="clock__pointers-hours" id="hours2"></div>
      <div class="clock__pointers-minutes" id="minutes2"></div>
      <div class="clock__pointers-seconds" id="seconds2"></div>
      <div class="clock__pointers-dot"></div>
    </div>
  </div>

  <div class="clock" id="france">
    <div class="clock__strokes">
      <div id="strokesHours3" class="clock__strokes-hours"></div>
      <div id="strokesMinutes3" class="clock__strokes-minutes"></div>
    </div>
    <div class="clock__pointers">
      <div class="clock__pointers-hours" id="hours3"></div>
      <div class="clock__pointers-minutes" id="minutes3"></div>
      <div class="clock__pointers-seconds" id="seconds3"></div>
      <div class="clock__pointers-dot"></div>
    </div>
  </div>

  <div class="clock" id="spanish">
    <div class="clock__strokes">
      <div id="strokesHours4" class="clock__strokes-hours"></div>
      <div id="strokesMinutes4" class="clock__strokes-minutes"></div>
    </div>
    <div class="clock__pointers">
      <div class="clock__pointers-hours" id="hours4"></div>
      <div class="clock__pointers-minutes" id="minutes4"></div>
      <div class="clock__pointers-seconds" id="seconds4"></div>
      <div class="clock__pointers-dot"></div>
    </div>
  </div>

  <div class="clock" id="italy">
    <div class="clock__strokes">
      <div id="strokesHours5" class="clock__strokes-hours"></div>
      <div id="strokesMinutes5" class="clock__strokes-minutes"></div>
    </div>
    <div class="clock__pointers">
      <div class="clock__pointers-hours" id="hours5"></div>
      <div class="clock__pointers-minutes" id="minutes5"></div>
      <div class="clock__pointers-seconds" id="seconds5"></div>
      <div class="clock__pointers-dot"></div>
    </div>
  </div>
</div>
  <!---JS CDN Link--->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!---Custom CDN Link--->


    <!-- map  -->
    <div id="map" class="container-fluid" style="margin-top:-60px">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4470.820046056346!2d75.74254032841235!3d29.134771408134203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391233ced58502c5%3A0xc5468fa3ad518bc1!2sfit.bar!5e0!3m2!1sen!2sin!4v1633002117048!5m2!1sen!2sin"
            width="1150" height="400" style="border:0;" class="map" allowfullscreen="" loading="lazy"></iframe>
    </div> <br><br><br><br>

    <div class="contacts row mx-5">
            <div class="col-md-4">
                <div class="text-center p-4"><a href="tel:+91xxxxxxxxxx"><i class="fas fa-phone fa-2x"></i> &nbsp; +91 xxxxxxxxxx</a></div>
            </div>
            <div class="col-md-4">
                <div class="p-4 text-center"><i class="fas fa-map-marker-alt fa-2x"></i> &nbsp; University Enclave,New Delhi, Delhi 110007</div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4"><a href="mailto:sk27102002@gmail.com"><i class="fas fa-envelope fa-2x"></i> &nbsp; binod@gmail.com</a></div>
            </div>
        </div>  <br><br><br><br>

    <div class="join-link">
        <p class="text-white text-center px-5">Click here to join us : <button class="px-3"><a href="#">apply</a> </button></p>

    </div>
    <!-- help  -->
    <div class="help" id="help" style="background:black;">

        <br><br><br> <h3 class="text-white text-center">How Can We Help?</h3> <br>

        <div class="text-center"><div style="background:radial-gradient(circle, rgba(136, 189, 188, 1) 0%, rgba(62, 128, 146, 1) 100%);height:3px;width:30vw;margin:auto;"></div></div> <br>

        <p class="text-white text-center px-5">If you’ve got a question, a comment or just want to talk more about your learning goals <br> leave us a message and we’ll be sure to get in touch.</p>

        <form action="https://submit-form.com/AmwWcTC2" method="POST">
            <div class="form">
            <div class="row" style="padding:5%;">
                <div class="col-md-6 bg-black text-white p-0">
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="name">Your Name</label> <br>
                        <input type="text" id="name" name="Name" required>
                    </div>
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="mail">Your Email</label> <br>
                        <input type="email" id="mail" name="Email" required>
                    </div>
                    <div style="border: 1px solid white; height:12vh;">
                        <label for="website">Contact Number</label> <br>
                        <input type="tel" id="website" name="Contact Number" required>
                    </div>
                </div>
                <div class="col-md-6 bg-black text-white p-0" style="border: 1px solid white; height:36vh;">
                <label for="message" style="height:16.6%;">Message</label> <br>
                <textarea name="message" id="message" required></textarea>
                </div>
            </div>
            <div class="text-center d-flex justify-content-center"> 
               <div class="px-3"> <input type="submit" value="Send Message"> </div>
               <div class="px-3"> <input type="reset" value="Cancel"> </div>
            </div>   <br><br><br>
        </form>
    </div>

    <!-- footer section -->
    <?php include 'footer.php'; ?>

    </main>


    <script src="assets/js/main.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Tweenmax links for animation -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        const hero = document.querySelector('.hero');
        const slider = document.querySelector('.slider');
        const headline = document.querySelector('.headline');


        const mytimeline = new TimelineMax();

        mytimeline.fromTo(
            hero,
            1,
            { height: "0%" },
            { height: "80%", ease: Power2.easeInOut }
        )
            .fromTo(
                hero,
                1.2,
                { width: "100%" },
                { width: "80%", ease: Power2.easeInOut }
            )
            .fromTo(
                slider,
                1,
                { x: "-100%" },
                { x: "0%", ease: Power2.easeInOut },
                "-=1"
            )
            .fromTo(
                headline,
                1,
                { opacity: "0.4", x: "30%" },
                { opacity: "1", x: "0%", ease: Power2.easeInOut },
                "-=1"
            )

    </script>
     <!-- clock thingy  -->
    <script>
        const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');
const strokesHours = document.getElementById('strokesHours');
const strokesMinutes = document.getElementById('strokesMinutes');
const hours2 = document.getElementById('hours2');
const minutes2 = document.getElementById('minutes2');
const seconds2 = document.getElementById('seconds2');
const strokesHours2 = document.getElementById('strokesHours2');
const strokesMinutes2 = document.getElementById('strokesMinutes2');

const hours3 = document.getElementById('hours3');
const minutes3 = document.getElementById('minutes3');
const seconds3 = document.getElementById('seconds3');
const strokesHours3 = document.getElementById('strokesHours3');
const strokesMinutes3 = document.getElementById('strokesMinutes3');

const hours4 = document.getElementById('hours4');
const minutes4 = document.getElementById('minutes4');
const seconds4 = document.getElementById('seconds4');
const strokesHours4 = document.getElementById('strokesHours4');
const strokesMinutes4 = document.getElementById('strokesMinutes4');

const hours5 = document.getElementById('hours5');
const minutes5 = document.getElementById('minutes5');
const seconds5 = document.getElementById('seconds5');
const strokesHours5 = document.getElementById('strokesHours5');
const strokesMinutes5 = document.getElementById('strokesMinutes5');

function strokeClock(elementWrapper, deg, strokeTotal) {
  let degRotate = 0;
  for (let index = 0; index < strokeTotal; index++) {
    const span = document.createElement('span');
    degRotate += deg;
    span.style.transform = `rotateZ(${degRotate}deg)`;
    elementWrapper.append(span);
  }
}


strokeClock(strokesHours, 30, 12);
strokeClock(strokesMinutes, 6, 60);
strokeClock(strokesHours2, 30, 12);
strokeClock(strokesMinutes2, 6, 60);
strokeClock(strokesHours3, 30, 12);
strokeClock(strokesMinutes3, 6, 60);
strokeClock(strokesHours4, 30, 12);
strokeClock(strokesMinutes4, 6, 60);
strokeClock(strokesHours5, 30, 12);
strokeClock(strokesMinutes5, 6, 60);

function animate() {
  requestAnimationFrame(animate)
  const date = new Date();
  const hrs = date.getHours() * 30;
  const mins = date.getMinutes() * 6;
  const secs = date.getSeconds() * 6;
  
  hours.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
  minutes.style.transform = `rotateZ(${mins}deg)`;
  seconds.style.transform = `rotateZ(${secs}deg)`;
}
function animate2() {
    requestAnimationFrame(animate2)
    const date = new Date();
    const hrs = date.getHours() * 30;
    const mins = date.getMinutes() * 6;
    const secs = date.getSeconds() * 6;
    
    hours2.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
    minutes2.style.transform = `rotateZ(${mins}deg)`;
    seconds2.style.transform = `rotateZ(${secs}deg)`;
  }

  function animate3() {
    requestAnimationFrame(animate3)
    const date = new Date();
    const hrs = date.getHours() * 30;
    const mins = date.getMinutes() * 6;
    const secs = date.getSeconds() * 6;
    
    hours3.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
    minutes3.style.transform = `rotateZ(${mins}deg)`;
    seconds3.style.transform = `rotateZ(${secs}deg)`;
  }

  function animate4() {
    requestAnimationFrame(animate4)
    const date = new Date();
    const hrs = date.getHours() * 30;
    const mins = date.getMinutes() * 6;
    const secs = date.getSeconds() * 6;
    
    hours4.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
    minutes4.style.transform = `rotateZ(${mins}deg)`;
    seconds4.style.transform = `rotateZ(${secs}deg)`;
  }

  function animate5() {
    requestAnimationFrame(animate5)
    const date = new Date();
    const hrs = date.getHours() * 30;
    const mins = date.getMinutes() * 6;
    const secs = date.getSeconds() * 6;
    
    hours5.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
    minutes5.style.transform = `rotateZ(${mins}deg)`;
    seconds5.style.transform = `rotateZ(${secs}deg)`;
  }
animate();
animate2();
animate3();
animate4();
animate5();

    </script>
</body>

</html>