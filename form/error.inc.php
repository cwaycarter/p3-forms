


	<!-- ===================================================

	univeral styling



	=======================================================-->

	<style>

		* {
			margin: 0;
			padding: 0;
			border: 0;
		}

		body {
			background-color: black;
			font-family: 'Roboto', sans-serif;
			color: white;
		}

		h2 {
			font-size: 16px;
		}

		h1 {
			font-family: 'Archivo Black', sans-serif;
			font-size: 40px;
			color: #f2c063;
			text-align: center;
			text-shadow: 2px 2px 8px black;
			letter-spacing: 1px;
			margin: 80px 0;
			padding-top: 80px;
			text-transform: uppercase;
		}

		h1::after {
			content: url(../images/glasses.png);
			padding: 18px;
		}

		h1::before {
			content: url(../images/maskicon.png);
			padding: 18px;
		}

		

		/* ==========================================

		Header


		==============================================*/

		header {
			background: #f5e1a9;
			height: 80px;
			position: fixed;
			width: 100%;
			top: 0px;
			z-index: 99;
		}

		header ul li {
			display: inline-block;
			width: 15%;
			text-align: center;
			background: #3b82bf;
			padding: 11px;
			border-radius: 10px;
			margin: 20px 6px;
			box-shadow: 3px 2px 3px #7d7d7d;
			letter-spacing: 1px;
		}

		nav {
			width: 900px;
			margin: 0 auto;
			text-align: right;
			height: 80px;
			position: relative;
		}

		nav ul {
			list-style-type: none;
		}

		header ul li:hover {
			background: #499feb;
			transition: 0.2s;
		}

		nav ul li a {
			color: #f2f2f2;
			text-decoration: none;
		}

		header img {
			float: left;
			margin: 2px 0;
		}

		.covidbutton {
			font-size: 12.5px;
			padding: 14px 11px 12px;
		}

		.animate {
			position: absolute;
			top: 0px;
			right: 825px;
			animation: wink 0.9s 1s infinite;
		}

			
		/* ===========================================


		Footer Styling


		=============================================*/

		footer {
			background-color: #f5e1a9;
		}

		footer nav {
			padding: 0 10px;
			width: 681px;
		}

		footer nav ul {
			margin-right: 50px;
		}

		footer ul li {
			float: right;
			display: inline;
			padding: 23px;
			margin-right: 10px;
		}

		.follow {
			float: left;
			margin: 24px 0 24px 60px;
		}

		.fab {
			color: #3b82bf;
			font-size: 35px;
		}

		.fab:hover {
			color: #499feb;
		}

		::selection {
			background: #499feb;
		}

    /* Form Styling */

		.container {
			max-width: 900px;
			margin: 80px auto;
			text-align: center;
			line-height: 36px;
		}

		.container p {
			font-size: 20px;
		}

		.container a {
			color: #499feb;
		}
		/* ===========================================

		Animation Styling

		=============================================*/

		@keyframes wink {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}
	</style>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Error</title>

		<!-- favicon -->
		<link rel="icon" type="image/ico" href="images/favicon.png" />

		<!-- google fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto&display=swap" rel="stylesheet">

		<!-- font awesome -->
		<script src="https://kit.fontawesome.com/63623a02ad.js" crossorigin="anonymous"></script>
	</head>

	<header>
		<nav>
			<a href="index.html"><img src="images/nav-logo.svg" alt="Logo" title="Logo" width="75"></a>

			<a href="index.html"><img class="animate" src="images/nav-logo-open.svg" alt="Logo" title="Logo" width="75"></a>

			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li class="covidbutton"><a href="covid.html">COVID-19 Resources</a></li>
			</ul>
		</nav>
	</header>

	<div class="container"><h1>Missing fields</h1>
		<p>Sorry, you have not completed all of the required fields.</p>
		<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields:</p>

		<ul>
		<?php
			for($i=0; $i<count($this->missing_required_fields); $i++){
				echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
			}
		?>
		</ul>

		<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
	</div>

	<footer>
        <nav>
            <img class="follow" src="images/follow.svg" alt="follow us logo" title="follow the campaign" width="260">

            <ul>
                <li>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </nav>
    </footer>
</html>