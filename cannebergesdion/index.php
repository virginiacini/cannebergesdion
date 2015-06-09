<?php
	//include('system/bootstrap.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <meta name="keywords" content="">
	    <meta name="description" content="">
	    <meta name="robots" content="" />

	    <title>Canneberges Dion</title>

	    <!-- Fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond' rel='stylesheet' type='text/css'>
	    
	    <!-- Favicon -->
	    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

	    <!-- Bootstrap -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/bootstrap-theme.css" rel="stylesheet">

	    <!-- Reset -->
	    <link href="css/normalize.css" rel="stylesheet">

	    <!-- Main Stylesheet -->
	    <link href="css/style.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	</head>
	
	<body>
		
		<?php include('pages/accueil.php'); ?>
		<?php include('widget_templates/menu.php'); ?>
		<?php include('pages/a_propos.php'); ?>
		<?php include('pages/produits.php'); ?>
		<?php include('pages/contact.php'); ?>
		<?php include('widget_templates/footer.php'); ?>

	</body>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<!-- This script contains: Scroll to anchor effect, Sticky menu function -->
	<script src="js/script.js"></script>

</html>