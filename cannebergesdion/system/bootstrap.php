<?php

if (isset($_GET['page'])) {
	
	$pagesAvailable = array('accueil','apropos','produits','contact');

	if ( in_array($_GET['page'],$pagesAvailable) ) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}
} else {
	$page = 'home';
}
