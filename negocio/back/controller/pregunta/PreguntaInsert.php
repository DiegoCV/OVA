<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Sólo relájate y deja que alguien más lo haga  \\
include_once realpath('../../facade/PreguntaFacade.php');

$pregunta_id = $_POST['pregunta_id'];
$pregunta_enunciado = $_POST['pregunta_enunciado'];
$Lectura_lectura_id = $_POST['lectura_lectura_id'];
$lectura= new Lectura();
$lectura->setLectura_id($Lectura_lectura_id);
PreguntaFacade::insert($pregunta_id, $pregunta_enunciado, $lectura);
echo "true";

//That´s all folks!