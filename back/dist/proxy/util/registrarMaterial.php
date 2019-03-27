<?php
include_once realpath('../../controler/LecturaControler.php'); 
include_once realpath('../../controler/TraduccionControler.php');

require_once realpath('../../entity/Traduccion.php'); 
require_once realpath('../../entity/Lectura.php'); 

include_once realpath('../../librerias/vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$array_lectura = $_POST['lectura'];
$del = $_POST['del'];
$para = $_POST['para'];

$lectura = new Lectura(); 
$lectura->set_Meta_Columnas($array_lectura); 
$id_lectura = LecturaControler::insert($lectura);
$lectura->setLectura_id($id_lectura);

$traduccion = getTraduccion($lectura,$del,$para);
$lecturaMapper->insert($traduccion['literal']);
$lecturaMapper->insert($traduccion['contextualizada']);


/*
* Me devuelve los dos tipos de traduccion: literal y contextualizada
*/
function getTraduccion($lectura,$del,$para){
	$trans = new GoogleTranslate();
	$contenido = explode("%",$lectura->getLectura_contenido());
	$traduccion = "";
	foreach ($contenido as $key => $value) {
		$traduccion .= $trans->translate($de, $para, $value)."%";
	}
	$traduccionCompleta = new Traduccion(array('traduccion_titulo' => ,'traduccion_cont'=>, 'traduccion_tipo' =>,'lectura_lectura_id' =>,'idioma_idioma_id'=>););
	echo $result;
	return null;
}


 } 