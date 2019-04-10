<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\
include_once realpath('../../facade/EstudianteFacade.php');

$list=EstudianteFacade::listAll();
$rta="";
foreach ($list as $obj => $Estudiante) {	
	$rta.="{
 	    \"estudiante_id\":\"{$Estudiante->getestudiante_id()}\",
	    \"estudiante_nombre\":\"{$Estudiante->getestudiante_nombre()}\",
	    \"estudiante_correo\":\"{$Estudiante->getestudiante_correo()}\",
	    \"estudiante_pass\":\"{$Estudiante->getestudiante_pass()}\"
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