<?php
	error_reporting(0);

	$p = $_GET['p'];

	switch($p) {
		case "home":
		$title = "Home";
		$content = "content/home_content.php";
		break;

		case "hours":
		$title = "Hours &amp; Directions";
		$content = "content/hours_content.php";
		break;
		
		case "consignors":
		$title = "Consignor Information";
		$content = "content/consignors_content.php";
		break;

		case "consign_clothes":
		$title = "Consigning Clothes";
		$content = "content/consign_clothes_content.php";
		break;

		case "consign_furniture":
		$title = "Consigning Furniture";
		$content = "content/consign_furniture_content.php";
		break;

		default:
		$title = "Home";
		$content = "content/home_content.php";
		break;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hint of Class Consignment, Marlboro, MA | <?php echo $title; ?></title>
	<link href='http://fonts.googleapis.com/css?family=Redressed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<div id="container">
		<header>
			<div class="header-left">
				<h1 id="logo"><a href="?p='home'">Hint of Class Consignment</a></h1>
			</div> <!-- end head-left-->
			<div class="header-right">
				<p>72 Hosmer St., </p>
				<p>Marlboro, MA 01752</p>
				<p>508-485-0040</p>
			</div> <!-- end head-right -->
			<div class="clear"></div>
		</header>
		<nav>
			<ul>
				<li><a href="?p=home">Home</a></li>
				<li><a href="?p=hours">Hours &amp; Directions</a></li>
				<li><a href="?p=consignors">Consignors</a>
					<ul>
						<li><a href="?p=consign_clothes">Clothes</a></li>
						<li><a href="?p=consign_furniture">Furniture</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="main">
			<?php require $content; ?>
			<div id="copyright">
				<p>&copy; Copyright 2013 Hint of Class Consignment</p>
			</div>
		</div><!-- end main -->
	</div><!-- end container -->
</body>
</html>