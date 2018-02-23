<?php 

require 'twig.php';
require 'array-espanol.php';
$B  = array(

	'verbs' => array(
		[
			'action' => array(
				[
					'titles'=>'Run',
					'cont'=>'Move at a regular and fairly slow pace by lifting and setting down each foot in turn, never having both feet off the ground at once.',
					'img'=>'run.png',
					'present'=>'',
					'past'=>'',
					'participle'=>'',
					


				],
				[
					'titles'=>'Sing',
					'cont'=>'To utter words or sounds in succession with musical modulations of the voice; vocalize melodically.',
					'img'=>'sing2.png',
				],
				[
					'titles'=>'Dance',
					'cont'=>'To utter words or sounds in succession with musical modulations of the voice; vocalize melodically.',
					'img'=>'dances.png',
				],
			),
		],
		 
	),
	
 );
$params = array(
	'title' => 'Dictionary',
	'nav' => $nav,
	'A'=> $B
);


$template = $twig->load('principal.twig');
echo $template->render($params);

?>