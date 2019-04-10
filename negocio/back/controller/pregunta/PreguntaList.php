<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Caminante no hay camino, se hace camino al andar  \\
include_once realpath('../../facade/PreguntaFacade.php');

$list=PreguntaFacade::listAll();
$rta="";
foreach ($list as $obj => $Pregunta) {	
	$rta.="{
 	    \"pregunta_id\":\"{$Pregunta->getpregunta_id()}\",
	    \"pregunta_enunciado\":\"{$Pregunta->getpregunta_enunciado()}\",
	    \"lectura_lectura_id_lectura_id\":\"{$Pregunta->getlectura_lectura_id()->getlectura_id()}\"
	},";
}

if($rta!=""){
	$rta = substr($rta, 0, -1);
	$msg="{\"msg\":\"exito\"}";
}else{
	$msg="{\"msg\":\"MANEJO DE EXCEPCIONES AQUÍ\"}";
	$rta="{\"result\":\"No se encontraron registros.\"}";	
}
echo "[{$msg},{$rta}]";

//That´s all folks!