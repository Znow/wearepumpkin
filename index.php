<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>We Are Pumpkin</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php include('menu.php'); ?>

		<?php include('home.php'); ?>

		<?php include('sustainability.php'); ?>

		<?php include('architecture.php'); ?>

		<?php include('interiors.php'); ?>

		<?php include('events.php'); ?>

		<?php include('contact.php'); ?>

		<div id="pumpkin_medium"></div>

		<script type="text/javascript">
			function goToByScroll(id){
				$('html,body').animate({
					scrollLeft: $("#"+id).offset().left
				}, 600);
			};
		</script>
	</body>
</html>