<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\
include_once realpath('../../facade/Sesion_logFacade.php');

$list=Sesion_logFacade::listAll();
$rta="";
foreach ($list as $obj => $Sesion_log) {	
	$rta.="{
 	    \"sesion_log_id\":\"{$Sesion_log->getsesion_log_id()}\",
	    \"sesion_log_inicio\":\"{$Sesion_log->getsesion_log_inicio()}\",
	    \"sesion_log_fin\":\"{$Sesion_log->getsesion_log_fin()}\",
	    \"estudiante_estudiante_id_estudiante_id\":\"{$Sesion_log->getestudiante_estudiante_id()->getestudiante_id()}\"
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