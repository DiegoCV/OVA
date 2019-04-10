<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../facade/CursoFacade.php');

$list=CursoFacade::listAll();
$rta="";
foreach ($list as $obj => $Curso) {	
	$rta.="{
 	    \"curso_id\":\"{$Curso->getcurso_id()}\",
	    \"curso_nombre\":\"{$Curso->getcurso_nombre()}\",
	    \"tipo_curso_tipo_curso_id_tipo_curso_id\":\"{$Curso->gettipo_curso_tipo_curso_id()->gettipo_curso_id()}\"
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