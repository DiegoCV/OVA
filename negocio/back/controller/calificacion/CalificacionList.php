<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La segunda regla de Anarchy es no hablar de Anarchy  \\
include_once realpath('../../facade/CalificacionFacade.php');

$list=CalificacionFacade::listAll();
$rta="";
foreach ($list as $obj => $Calificacion) {	
	$rta.="{
 	    \"calificaciones_id\":\"{$Calificacion->getcalificaciones_id()}\",
	    \"calificacion_nota\":\"{$Calificacion->getcalificacion_nota()}\",
	    \"estudiante_estudiante_id_estudiante_id\":\"{$Calificacion->getestudiante_estudiante_id()->getestudiante_id()}\",
	    \"lectura_lectura_id_lectura_id\":\"{$Calificacion->getlectura_lectura_id()->getlectura_id()}\"
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