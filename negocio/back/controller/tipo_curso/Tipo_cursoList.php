<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\
include_once realpath('../../facade/Tipo_cursoFacade.php');

$list=Tipo_cursoFacade::listAll();
$rta="";
foreach ($list as $obj => $Tipo_curso) {	
	$rta.="{
 	    \"tipo_curso_id\":\"{$Tipo_curso->gettipo_curso_id()}\",
	    \"tipo_curso_nombre\":\"{$Tipo_curso->gettipo_curso_nombre()}\"
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