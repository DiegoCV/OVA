<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\
include_once realpath('../../facade/IdiomaFacade.php');

$idioma_key = $_POST['idioma_key'];
$idioma_nombre = $_POST['idioma_nombre'];
IdiomaFacade::insert($idioma_key, $idioma_nombre);
echo "true";

//That´s all folks!