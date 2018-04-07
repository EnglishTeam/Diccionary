<?php 

require 'twig.php';
require 'array-espanol.php';


$A  = array(

	'verbs' => array(
		[
			'action' => array(
				[
					'titles'=>'Run',
					'cont'=>'Move at a regular and fairly slow pace by lifting and setting down each foot in turn, never having both feet off the ground at once.',
					'img'=>'run.png',
					'present'=>'Run',
					'past'=>'Ran',
					'participle'=>'Run',
					'sentecesPresentSimple'=>'I run in the moornig (Present Simple)',
					'sentencesPastSimeple'=>'I ran in the moorning (Past Simple)',
					'sentecesPresentParticiple'=>'I have run in the moorning (Present Participle)',
					'sentecesPastParticiple'=>'I had run in the moorning (Past Participle)',

				],
				[
					'titles'=>'Sing',
					'cont'=>'To utter words or sounds in succession with musical modulations of the voice; vocalize melodically.',
					'img'=>'sing2.png',
					'present'=>'Run',
					'past'=>'Ran',
					'participle'=>'Run',
					'sentecesPresentSimple'=>'I run in the moornig (Present Simple)',
					'sentencesPastSimeple'=>'I ran in the moorning (Past Simple)',
					'sentecesPresentParticiple'=>'I have run in the moorning (Present Participle)',
					'sentecesPastParticiple'=>'I had run in the moorning (Past Participle)',
				],
				[
					'titles'=>'Dance',
					'cont'=>'To utter words or sounds in succession with musical modulations of the voice; vocalize melodically.',
					'img'=>'dances.png',
					'present'=>'Run',
					'past'=>'Ran',
					'participle'=>'Run',
					'sentecesPresentSimple'=>'I run in the moornig (Present Simple)',
					'sentencesPastSimeple'=>'I ran in the moorning (Past Simple)',
					'sentecesPresentParticiple'=>'I have run in the moorning (Present Participle)',
					'sentecesPastParticiple'=>'I had run in the moorning (Past Participle)',
				],
			),
		],
		[
			'action' => array(
				[
					'titles'=>'Walk',
					'cont'=>'Move at a regular and fairly slow pace by lifting and setting down each foot in turn, never having both feet off the ground at once.',
					'img'=>'run.png',

				],
				[
					'titles'=>'Swim',
					'cont'=>'Correr',
					'img'=>'swim2.png',
				],
				[
					'titles'=>'Jump',
					'cont'=>'Correr',
					'img'=>'dances.png',
				],
			),
		],
		[
			'action' => array(
				[
					'titles'=>'Climb',
					'cont'=>'Correr',
					'img'=>'run.png',

				],
				[
					'titles'=>'Clean',
					'cont'=>'Correr',
					'img'=>'sing2.png',
				],
				[
					'titles'=>'Drive',
					'cont'=>'Correr',
					'img'=>'dances.png',
				],
			),
		],
	),
	
 );
$params = array(
	'title' => 'Dictionary',
	'nav' => $nav,
	'A'=> $A
);


$template = $twig->load('principal.twig');
echo $template->render($params);

?>