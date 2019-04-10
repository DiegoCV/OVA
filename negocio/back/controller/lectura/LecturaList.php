<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora tú puedes ser el tipo con el látigo  \\
include_once realpath('../../facade/LecturaFacade.php');

$list=LecturaFacade::listAll();
$rta="";
foreach ($list as $obj => $Lectura) {	
	$rta.="{
 	    \"lectura_id\":\"{$Lectura->getlectura_id()}\",
	    \"lectura_titulo\":\"{$Lectura->getlectura_titulo()}\",
	    \"lectura_contenido\":\"{$Lectura->getlectura_contenido()}\",
	    \"lectura_pronunciacion\":\"{$Lectura->getlectura_pronunciacion()}\",
	    \"curso_curso_id_curso_id\":\"{$Lectura->getcurso_curso_id()->getcurso_id()}\",
	    \"idioma_idioma_key_idioma_key\":\"{$Lectura->getidioma_idioma_key()->getidioma_key()}\"
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