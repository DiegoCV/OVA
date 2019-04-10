<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Les traigo amor  \\
include_once realpath('../../facade/AlternativaFacade.php');

$alternativa_id = $_POST['alternativa_id'];
$alternativa_cont = $_POST['alternativa_cont'];
$alternativa_respuesta = $_POST['alternativa_respuesta'];
$Pregunta_pregunta_id = $_POST['pregunta_pregunta_id'];
$pregunta= new Pregunta();
$pregunta->setPregunta_id($Pregunta_pregunta_id);
AlternativaFacade::insert($alternativa_id, $alternativa_cont, $alternativa_respuesta, $pregunta);
echo "true";

//That´s all folks!