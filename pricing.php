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

	<title>Pricing</title>

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


<body>

	<header id="topheader" style="background:black;">
		<?php include 'navbar.php'; ?>
	</header>
	<!-- header section ends -->

	<main>


		<!-- ********************************************** HERO ************************************************************** -->


		<style>
			.hero {
				width: 100vw;
				height: 70vh;
				background-color: #141114;
				background-image: linear-gradient(335deg, black 23px, transparent 23px),
					linear-gradient(155deg, black 23px, transparent 23px),
					linear-gradient(335deg, black 23px, transparent 23px),
					linear-gradient(155deg, black 23px, transparent 23px);
				background-size: 58px 58px;
				background-position: 0px 2px, 4px 35px, 29px 31px, 34px 6px;
			}

			.sign {
				position: absolute;
				display: flex;
				justify-content: center;
				align-items: center;
				width: 50%;
				height: 50%;
				background-image: radial-gradient(ellipse 50% 35% at 50% 50%,
						#6b1839,
						transparent);
				transform: translate(-50%, -70%);
				letter-spacing: 2;
				left: 50%;
				top: 50%;
				font-family: "Clip";
				text-transform: uppercase;
				font-size: 6em;
				color: #ffe6ff;
				text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
					-0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
					0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
				animation: shine 2s forwards, flicker 3s infinite;
			}

			@media (max-width:700px) {
				.sign {
					font-size: 3rem;
				}
			}

			@keyframes blink {

				0%,
				22%,
				36%,
				75% {
					color: #ffe6ff;
					text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
						-0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
						0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
				}

				28%,
				33% {
					color: #ff65bd;
					text-shadow: none;
				}

				82%,
				97% {
					color: #ff2483;
					text-shadow: none;
				}
			}

			.flicker {
				animation: shine 2s forwards, blink 3s 2s infinite;
			}

			.fast-flicker {
				animation: shine 2s forwards, blink 10s 1s infinite;
			}

			@keyframes shine {
				0% {
					color: #6b1839;
					text-shadow: none;
				}

				100% {
					color: #ffe6ff;
					text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
						-0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
						0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
				}
			}

			@keyframes flicker {
				from {
					opacity: 1;
				}

				4% {
					opacity: 0.9;
				}

				6% {
					opacity: 0.85;
				}

				8% {
					opacity: 0.95;
				}

				10% {
					opacity: 0.9;
				}

				11% {
					opacity: 0.922;
				}

				12% {
					opacity: 0.9;
				}

				14% {
					opacity: 0.95;
				}

				16% {
					opacity: 0.98;
				}

				17% {
					opacity: 0.9;
				}

				19% {
					opacity: 0.93;
				}

				20% {
					opacity: 0.99;
				}

				24% {
					opacity: 1;
				}

				26% {
					opacity: 0.94;
				}

				28% {
					opacity: 0.98;
				}

				37% {
					opacity: 0.93;
				}

				38% {
					opacity: 0.5;
				}

				39% {
					opacity: 0.96;
				}

				42% {
					opacity: 1;
				}

				44% {
					opacity: 0.97;
				}

				46% {
					opacity: 0.94;
				}

				56% {
					opacity: 0.9;
				}

				58% {
					opacity: 0.9;
				}

				60% {
					opacity: 0.99;
				}

				68% {
					opacity: 1;
				}

				70% {
					opacity: 0.9;
				}

				72% {
					opacity: 0.95;
				}

				93% {
					opacity: 0.93;
				}

				95% {
					opacity: 0.95;
				}

				97% {
					opacity: 0.93;
				}

				to {
					opacity: 1;
				}
			}
		</style>

		<div class="hero">
			<div class="sign"><span class="fast-flicker">b</span>rea<span class="flicker">t</span>he</div>
		</div>





		<div class="bg-white">

			<!-- ==================================================== ABOUT PRICE =========================================================== -->

			<style>
				.pricing {
					color: white !important;
					font-weight: bold !important;
				}

				@media (min-width:1100px) {

					.container .row {
						margin: 5%;
					}

					.aboutprice {
						margin: 5%;
					}
				}
			</style>
			<div class="aboutprice px-5"> <br><br>
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio assumenda esse voluptatum tempore
				tempora sint sit non vel dolorum eos odio ipsam doloremque fuga quod nam libero voluptatibus quaerat
				laboriosam, fugit incidunt deleniti eius. Eos ipsum asperiores cupiditate officiis nobis corrupti
				corporis omnis ut tenetur. Voluptate, provident dignissimos optio voluptatibus eius quidem ipsum velit
				ab neque ex culpa esse amet nihil nesciunt quaerat, eos tempore doloremque quisquam cupiditate sequi
				enim corporis. Totam libero aspernatur, alias repellat omnis, autem iusto vero saepe expedita vel
				incidunt in suscipit hic repudiandae corporis laudantium numquam necessitatibus modi nisi quia optio,
				enim nam ducimus voluptatum. Explicabo harum consequatur repellat sint error mollitia modi sit, possimus
				cupiditate accusamus voluptatibus veritatis obcaecati nihil doloribus magnam adipisci voluptas ad
				tempore quia voluptatem dolorem necessitatibus numquam. Vero, possimus ullam error voluptatem facere
				quisquam, eos cumque nemo distinctio vitae ut libero, eligendi aperiam perferendis necessitatibus in
				repudiandae cupiditate perspiciatis excepturi!
			</div> <br><br><br>

			<!-- ********************************************** PRICE CARDS ****************************************************** -->

			<style>
				.read-more {
					color: #112d32;
					cursor: pointer;
					text-decoration: none;
				}

				.read-more:hover,
				.read-more:focus,
				.read-more:visited {
					color: black;
					text-decoration: none;
				}
			</style>

			<div class="container my-5">
				<div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
					<div class="col-lg-7"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
							style="margin-top:-10%;margin-right:0;padding:5%"></div>
					<div class="col-lg-5 p-5 position-relative">
						<h2 class="text-center"
							style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">
							German</h2>
						<br>
						<div style="height:3px;background:#112d32;"></div> <br>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga
							itaque at quisquam
							aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae
							doloribus. Iste
							reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt
							ducimus eum
							laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
						<div style="margin-right:-15%; margin-bottom:-20%; float:right;" class="read-more"><i
								class="fas fa-chevron-circle-down fa-4x"></i></div>
					</div>
				</div>
			</div> <br>

			<div class="container my-5">
				<div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
					<div class="col-lg-7 order-lg-2"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
							style="margin-top:-10%;margin-right:0;padding:5%"></div>
					<div class="col-lg-5 p-5 order-lg-1 position-relative">
						<h2 class="text-center"
							style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">
							German</h2>
						<br>
						<div style="height:3px;background:#112d32;"></div> <br>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga
							itaque at quisquam
							aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae
							doloribus. Iste
							reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt
							ducimus eum
							laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
						<div style="margin-left:-15%; margin-bottom:-20%; float:left;" class="read-more"><i
								class="fas fa-chevron-circle-down fa-4x"></i></div>
					</div>
				</div>
			</div> <br>

			<div class="container my-5">
				<div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
					<div class="col-lg-7"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
							style="margin-top:-10%;margin-right:0;padding:5%"></div>
					<div class="col-lg-5 p-5 position-relative">
						<h2 class="text-center"
							style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">
							German</h2>
						<br>
						<div style="height:3px;background:#112d32;"></div> <br>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga
							itaque at quisquam
							aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae
							doloribus. Iste
							reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt
							ducimus eum
							laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
						<div style="margin-right:-15%; margin-bottom:-20%; float:right;" class="read-more"><i
								class="fas fa-chevron-circle-down fa-4x"></i></div>
					</div>
				</div>
			</div> <br>

			<div class="container my-5">
				<div class="row bg-white" style="box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);">
					<div class="col-lg-7 order-lg-2"><img src="assets/images/home/pricing.jfif" alt="" class="img-fluid"
							style="margin-top:-10%;margin-right:0;padding:5%"></div>
					<div class="col-lg-5 p-5 order-lg-1 position-relative">
						<h2 class="text-center"
							style="font-size: 30px;font-family:Playfair Display SC;color: #252830;font-weight:400;">
							German</h2>
						<br>
						<div style="height:3px;background:#112d32;"></div> <br>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus laudantium fuga
							itaque at quisquam
							aliquam neque error harum. Vel eius veritatis voluptas quam, architecto obcaecati beatae
							doloribus. Iste
							reprehenderit explicabo optio nulla debitis, minus voluptates unde fuga cum magni nesciunt
							ducimus eum
							laudantium eos pariatur nisi aliquam quis quisquam.</p> <br>
						<div style="margin-left:-15%; margin-bottom:-20%; float:left;" class="read-more"><i
								class="fas fa-chevron-circle-down fa-4x"></i></div>
					</div>
				</div>
			</div> <br>
		</div>

		<!-- ************************************************************************************************************************ -->




		<!-- ************************************************************************************************************************ -->

		<?php include 'footer.php' ; ?>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>


</body>

</html>