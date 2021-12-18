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

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Festive&family=Fredericka+the+Great&family=Niconne&family=Oleo+Script&family=Pinyon+Script&family=Rye&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}
html {
    scroll-behavior: smooth;
    overflow: scroll;
    overflow-x: hidden;
}
main {
    overflow-x: hidden;
}
a{
    text-decoration: none;
}


header{
    position: fixed;
    top:0; left: 0; right:0;
    z-index: 1000;
}
.navbar {
    padding: 1% 5%;
}

.navbar .brand{
    font-size: 2rem;
}

header ul li a{
    font-size: 20px;
}

header .dropdown-menu li a {
    color: black;
    text-decoration: none;
}

header .dropdown-menu li:hover a {
    color: black;
    text-decoration: none;
}

header .contact {
    background: radial-gradient(circle, rgba(136,189,188,1) 0%, rgba(62,128,146,1) 100%);
    border-radius: 10px;
}

header .contact a {
    color: black;
    font-weight: bold;
}

header .contact:hover {
    background:none;
    border: 3px solid white;
}

header .contact:hover a{
    color: white;
}


@media (max-width:1024px){
    .navbar {
        padding: 5%;
    }
    .navbar .brand {
        font-size: 1.5rem;
    }
}

@media (max-width:500px){
    .navbar .brand {
        font-size: 1rem;
    }
}

.footer .icon-box div {
    background: none;
    border-radius: 50%;
}

.footer .icon-box div i {
    color: white;
}

.footer .icon-box div:hover {
    background: #88bdbc;
}

.footer .icon-box div:hover i {
    color: black;
}

.footer .contact p i {
    color: white;
}

.footer .contact p:hover i {
    color: #88bdbc;
}
</style>
  

<body>
<nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example" id="navbar">
            <div class="container-xl">
                <img src="assets/images/logo.png" alt="" class="image-fluid rounded-circle" style="width:10vh">
                <a class="navbar-brand brand" href="#">&nbspBINOD&nbsp&nbsp</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarsExample07XL">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown07XL" data-bs-toggle="dropdown"
                                aria-expanded="false">Languages</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown07XL">
                                <?php
                                include '_dbConnect.php';
                                $sql = "select * from category";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                    
                                    foreach ($result as $row) : ?>
                                    
                                <li><a class="dropdown-item text-dark" id="myBtn" href="languages.php?language=<?=ucwords($row["cname"])?>"><?=ucwords($row["cname"])?></a></li>
                    
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                    </ul>
                    <div class="contact"><a class="nav-link" href="contact.php">Contact Us</a></div>
                </div>
            </div>
        </nav>


<script>
let navvv = document.getElementById("navbar");

window.onscroll = () => {
    if (window.pageYOffset > 200) {

        navvv.style.background = "#112d32";
        navvv.style.boxShadow = "0px 4px 8px rgba(0,0,0,.5)";
    }
    else {
        navvv.style.background = "transparent";
        navvv.style.boxShadow = "none";
    }
}
</script>

</body>

</html>