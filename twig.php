<?php
	require_once 'vendor/autoload.php';

	$loader = new Twig_Loader_Filesystem('views');
	$twig = new Twig_Environment($loader, array(
			'debug' => true
	));
	$twig->addExtension(new Twig_Extensions_Extension_Array());
	$twig->addExtension(new Twig_Extensions_Extension_Text());
	$twig->addExtension(new Twig_Extension_Debug());
?>
