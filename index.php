<?php 

require 'twig.php';
require 'array-espanol.php';


$params = array(
	'title' => 'Dictionary',
	'nav' => $nav,
	
);


$template = $twig->load('index.twig');
echo $template->render($params);

?>