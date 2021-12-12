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
  

<body>
<nav class="navbar navbar-expand-lg navbar-dark" aria-label="Ninth navbar example" id="navbar">
            <div class="container-xl">
                <img src="AntiqueGallery/assests/images/logo.png" alt="" class="image-fluid rounded-circle" style="width:8vh">
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
                    
                                    foreach ($result as $row) {
                                    echo'
                                <li><a class="dropdown-item text-dark" href="languages.php?language='.ucwords($row["cname"]).'">'.ucwords($row["cname"]).'</a></li>'; } ?>
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
</body>

</html>