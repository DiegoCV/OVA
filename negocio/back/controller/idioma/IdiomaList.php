<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\
include_once realpath('../../facade/IdiomaFacade.php');

$list=IdiomaFacade::listAll();
$rta="";
foreach ($list as $obj => $Idioma) {	
	$rta.="{
 	    \"idioma_key\":\"{$Idioma->getidioma_key()}\",
	    \"idioma_nombre\":\"{$Idioma->getidioma_nombre()}\"
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