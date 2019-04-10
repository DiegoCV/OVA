<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\
include_once realpath('../../facade/AlternativaFacade.php');

$list=AlternativaFacade::listAll();
$rta="";
foreach ($list as $obj => $Alternativa) {	
	$rta.="{
 	    \"alternativa_id\":\"{$Alternativa->getalternativa_id()}\",
	    \"alternativa_cont\":\"{$Alternativa->getalternativa_cont()}\",
	    \"alternativa_respuesta\":\"{$Alternativa->getalternativa_respuesta()}\",
	    \"pregunta_pregunta_id_pregunta_id\":\"{$Alternativa->getpregunta_pregunta_id()->getpregunta_id()}\"
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