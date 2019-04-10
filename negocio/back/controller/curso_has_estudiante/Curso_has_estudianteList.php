<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\
include_once realpath('../../facade/Curso_has_estudianteFacade.php');

$list=Curso_has_estudianteFacade::listAll();
$rta="";
foreach ($list as $obj => $Curso_has_estudiante) {	
	$rta.="{
 	    \"curso_curso_id_curso_id\":\"{$Curso_has_estudiante->getcurso_curso_id()->getcurso_id()}\",
	    \"estudiante_estudiante_id_estudiante_id\":\"{$Curso_has_estudiante->getestudiante_estudiante_id()->getestudiante_id()}\"
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