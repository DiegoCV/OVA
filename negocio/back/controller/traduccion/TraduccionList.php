<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\
include_once realpath('../../facade/TraduccionFacade.php');

$list=TraduccionFacade::listAll();
$rta="";
foreach ($list as $obj => $Traduccion) {	
	$rta.="{
 	    \"traduccion_id\":\"{$Traduccion->gettraduccion_id()}\",
	    \"traduccion_titulo\":\"{$Traduccion->gettraduccion_titulo()}\",
	    \"traduccion_cont\":\"{$Traduccion->gettraduccion_cont()}\",
	    \"traduccion_tipo\":\"{$Traduccion->gettraduccion_tipo()}\",
	    \"lectura_lectura_id_lectura_id\":\"{$Traduccion->getlectura_lectura_id()->getlectura_id()}\",
	    \"idioma_idioma_key_idioma_key\":\"{$Traduccion->getidioma_idioma_key()->getidioma_key()}\"
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