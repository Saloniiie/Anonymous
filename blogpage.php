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

.row h1 {
  font-weight: 200;
}
.blog{
      color: white !important;
    font-weight: bold !important;
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
        <div class="mt-5"><img src="<?=$roww['image']?>" alt=""
                style="width:100vw;background-attachment:fixed;position:absolute;z-index:-1;"></div>


        <div style="background:white;margin-top:60vh;padding:50px; padding-top:100px;" class="px-md-5 mx-md-5">
            <div>
                <h1 class="px-md-5" style="font-family:Playfair Display SC;">
                    <?= $roww['topic'] ?>
                </h1>
            </div>
            <p class="p-md-5 my-md-5">
                <?= $roww['ldesc'] ?>
            </p>
            <hr style="height:5px;">
            <div class="p-md-5 mx-md-5 d-flex">
                <div><i class="fas fa-user-circle" style="font-size:4rem"></i></div>
                <div class="flex-grow-1" style="margin-top:10px;"><span><span class="p-3"
                            style="font-size:.8rem;">WRITTEN BY</span> <br> <span class="p-3 text-primary"
                            style="font-size:1rem;">
                            <?=$roww['wname']?>
                        </span></span></div>
                <div style="font-size:1.2rem;"><i class="fas fa-eye"></i>
                    <?=$roww['views']?> &nbsp; &nbsp; <i class="fas fa-share-alt"></i>
                </div>
            </div>
        </div>


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
                                <span class="author"><?=$rowww['wname']?></span>
                                <span style="float:right;"><i class="fas fa-share-alt"></i></span> 
                                <span style="float:right;"><i class="fas fa-eye"></i> <?=$rowww['views']?> &nbsp; &nbsp;</span>
                                <h1 class="title"><a href="blogpage.php?topic=<?=$rowww['topic']?>"><?=$rowww['topic']?></a></h1>
                                <p class="text"><?=$rowww['sdesc']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            <?php endif; ?>
            <?php endwhile; ?>
        </div>

        <?php include 'footer.php' ; ?>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>