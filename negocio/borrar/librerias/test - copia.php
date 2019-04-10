<?php
require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'fr';
$target = 'es';
$text = 'Pardon, monsieur. Ou est le métro St. Michel ?%Le métro St Michel ? Attendez une minute . . . %Nous Sommes au Boulevard St. Michel. La fontaine est la-bas.%Oui, d’accord. Mais ou le métro, s’il vous plaît ?%Mais bien sûr ! Voila la Seine, et voici le pont%C’est joli ; mais s’il vous plait . . . %Ce n’est pas a gauche, alors c’est a droite.%Voila . Le metro est a droite ! %Mais vous etes sur?%Non. Je suis touriste aussi !';


$trans = new GoogleTranslate();

$result = $trans->translate($source, $target, $text);

echo $result;