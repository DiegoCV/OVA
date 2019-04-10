<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\
include_once realpath('../../facade/EstudianteFacade.php');

$estudiante_id = $_POST['estudiante_id'];
$estudiante_nombre = $_POST['estudiante_nombre'];
$estudiante_correo = $_POST['estudiante_correo'];
$estudiante_pass = $_POST['estudiante_pass'];
EstudianteFacade::insert($estudiante_id, $estudiante_nombre, $estudiante_correo, $estudiante_pass);
echo "true";

//That´s all folks!