<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\
include_once realpath('../../facade/TraduccionFacade.php');

$traduccion_id = $_POST['traduccion_id'];
$traduccion_titulo = $_POST['traduccion_titulo'];
$traduccion_cont = $_POST['traduccion_cont'];
$traduccion_tipo = $_POST['traduccion_tipo'];
$Lectura_lectura_id = $_POST['lectura_lectura_id'];
$lectura= new Lectura();
$lectura->setLectura_id($Lectura_lectura_id);
$Idioma_idioma_key = $_POST['idioma_idioma_key'];
$idioma= new Idioma();
$idioma->setIdioma_key($Idioma_idioma_key);
TraduccionFacade::insert($traduccion_id, $traduccion_titulo, $traduccion_cont, $traduccion_tipo, $lectura, $idioma);
echo "true";

//That´s all folks!