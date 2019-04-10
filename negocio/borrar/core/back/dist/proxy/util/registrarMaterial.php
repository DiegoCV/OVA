<?php
include_once realpath('../../controler/LecturaControler.php'); 
include_once realpath('../../controler/TraduccionControler.php');

require_once realpath('../../entity/Traduccion.php'); 
require_once realpath('../../entity/Lectura.php'); 

include_once realpath('../../librerias/vendor/autoload.php');
use \Statickidz\GoogleTranslate;
/********************************/
$curso = 1;
$del = $_POST['del'];
$para = $_POST['para'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
/************************************/

$lectura = new Lectura(); 
$lectura->setLectura_titulo($titulo);
$lectura->setLectura_contenido($contenido);
$lectura->setCurso_curso_id($curso);
$lectura->setIdioma_idioma_key($del);

$id_lectura = LecturaControler::insert($lectura);
$lectura->setLectura_id($id_lectura);

/************************************/
TraduccionControler::insert(getTraduccionContextualizada($titulo,$contenido,'C',$id_lectura,$del,$para));
TraduccionControler::insert(getTraduccionLiteral());
/*************************************/

/*
* Me devuelve los dos tipos de traduccion: literal y contextualizada
*/
function getTraduccionContextualizada($titulo,$contenido,$tipo,$id_lectura,$del,$para){
	$trans = new GoogleTranslate();
	$contenido = explode("%",$contenido);
	$traduccion = "";
	foreach ($contenido as $key => $value) {
		$traduccion .= $trans->translate($de, $para, $value)."%";
	}
	$traduccionCompleta = new Traduccion(
		array('traduccion_titulo' => $trans->translate($de, $para, $titulo) ,
			'traduccion_cont'=> $traduccion, 
			'traduccion_tipo' => $tipo,
			'lectura_lectura_id' => $id_lectura,
			'idioma_idioma_key'=>$para)
	);	
	return $traduccionCompleta;
}

/*******************************************/

function getTraduccionLiteral($titulo,$contenido,$tipo,$id_lectura,$del,$para){
	$trans = new GoogleTranslate();
	$contenido = explode("%",$lectura->getLectura_contenido());
	$traduccion = "";
	foreach ($contenido as $key => $value) {
		$traduccion .= $trans->translate($de, $para, $value)."%";
	}
	$traduccionCompleta = new Traduccion(
		array('traduccion_titulo' => $trans->translate($de, $para, $titulo) ,
			'traduccion_cont'=> $traduccion, 
			'traduccion_tipo' => 0,
			'lectura_lectura_id' => $id_lectura,
			'idioma_idioma_id'=>'4')
	);
	echo $result;
	return null;
}
