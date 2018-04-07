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
					'present'=>'Sing',
					'past'=>'Sang',
					'participle'=>'Sung',
					'sentecesPresentSimple'=>'I Sing in the bathroom (Present Simple)',
					'sentencesPastSimeple'=>'I Sang in the moorning (Past Simple)',
					'sentecesPresentParticiple'=>'I have Sing in the moorning (Present Participle)',
					'sentecesPastParticiple'=>'I had Sing in the moorning (Past Participle)',
				],
				[
					'titles'=>'Dance',
					'cont'=>'to move one s feet or body, or both, rhythmically in a pattern of steps, especially to the accompaniment of music.',
					'img'=>'dances.png',
					'present'=>'Dance',
					'past'=>'Danced',
					'participle'=>'Danced',
					'sentecesPresentSimple'=>'I Dance in the classroom (Present Simple)',
					'sentencesPastSimeple'=>'I Danced with my parents (Past Simple)',
					'sentecesPresentParticiple'=>'I have Dance with my girlfrind (Present Participle)',
					'sentecesPastParticiple'=>'I had Dance in the garden (Past Participle)',
				],
				[
					'titles'=>'Walk',
					'cont'=>'o advance or travel on foot at a moderate speed or pace; proceed by steps; move by advancing the feet alternately so that there is always one foot on the ground in bipedal locomotion and two or more feet on the ground in quadrupedal locomotion.',
					'img'=>'run.png',
					'present'=>'Walk',
					'past'=>'Walked',
					'participle'=>'Walked',
					'sentecesPresentSimple'=>'I walk in the park (Present Simple)',
					'sentencesPastSimeple'=>'I walked with my dogs (Past Simple)',
					'sentecesPresentParticiple'=>'I have walk in the mall (Present Participle)',
					'sentecesPastParticiple'=>'I had Walked with my wife (Past Participle)',

				],
				[
					'titles'=>'Swim',
					'cont'=>'Correr',
					'img'=>'swim2.png',
					'present'=>'Swim',
					'past'=>'Swam',
					'participle'=>'Swum',
					'sentecesPresentSimple'=>'I Swim in the beach (Present Simple)',
					'sentencesPastSimeple'=>'I Swam in the pool (Past Simple)',
					'sentecesPresentParticiple'=>'I have swim in the lake (Present Participle)',
					'sentecesPastParticiple'=>'I had Swum in the river (Past Participle)',
				],
				[
					'titles'=>'Jump',
					'cont'=>'Correr',
					'img'=>'dances.png',
					'present'=>'Jump',
					'past'=>'Jumped',
					'participle'=>'Jumped',
					'sentecesPresentSimple'=>'I Jump in the park (Present Simple)',
					'sentencesPastSimeple'=>'I Jumped in the bed (Past Simple)',
					'sentecesPresentParticiple'=>'I have jump in the pool (Present Participle)',
					'sentecesPastParticiple'=>'I had jump in the inflatable castle (Past Participle)',
				],
				[
					'titles'=>'Climb',
					'cont'=>'Correr',
					'img'=>'run.png',
					'present'=>'Climb',
					'past'=>'Climbed',
					'participle'=>'Climbed',
					'sentecesPresentSimple'=>'I Climb the mountain (Present Simple)',
					'sentencesPastSimeple'=>'I Climbed in the Everest (Past Simple)',
					'sentecesPresentParticiple'=>'I have Climb in the abandoned building (Present Participle)',
					'sentecesPastParticiple'=>'I had climb in the tree of the park (Past Participle)',

				],
				[
					'titles'=>'Clean',
					'cont'=>'Correr',
					'img'=>'sing2.png',
					'present'=>'Clean',
					'past'=>'Cleaned',
					'participle'=>'Cleaned',
					'sentecesPresentSimple'=>'I clean my room in the moornig (Present Simple)',
					'sentencesPastSimeple'=>'I Cleaned my car the last friday (Past Simple)',
					'sentecesPresentParticiple'=>'I have Clean my nose (Present Participle)',
					'sentecesPastParticiple'=>'I had clean my garden (Past Participle)',
				],
				[
					'titles'=>'Drive',
					'cont'=>'Correr',
					'img'=>'dances.png',
					'present'=>'Drive',
					'past'=>'Drove',
					'participle'=>'Driven',
					'sentecesPresentSimple'=>'I Drive my car to the school (Present Simple)',
					'sentencesPastSimeple'=>'I Drove a taxi (Past Simple)',
					'sentecesPresentParticiple'=>'I have Drive motorcicle (Present Participle)',
					'sentecesPastParticiple'=>'I had Driven an automatic car (Past Participle)',
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