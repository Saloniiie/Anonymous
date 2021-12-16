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

    <title>Blog : <?= $roww['topic'] ?></title>

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

<body>

    <header id="topheader" style="background:black;">
        <?php include 'navbar.php'; ?>
    </header>
    <!-- header section ends -->

    <main>
        <div class="mt-5"><img src="<?=$roww['image']?>" alt="" style="width:100vw;background-attachment:fixed;position:absolute;z-index:-1;"></div>
        <div style="background:white;margin-top:60vh;padding:50px; padding-top:100px;" class="px-md-5 mx-md-5">
            <div><h1 class="px-md-5"><?= $roww['topic'] ?></h1></div>
            <p class="p-md-5 my-md-5"><?= $roww['ldesc'] ?></p>
            <hr style="height:5px;">
            <div class="p-md-5 mx-md-5"><i class="fas fa-user-circle" style="font-size:4rem"></i><span>WRITTEN BY <br> <?=$roww['wname']?></span></div>
        </div>

        <?php include 'footer.php' ; ?>
    </main>
    
</body>
</html>