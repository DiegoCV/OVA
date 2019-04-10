<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
include_once realpath('../../facade/CalificacionFacade.php');

$calificaciones_id = $_POST['calificaciones_id'];
$calificacion_nota = $_POST['calificacion_nota'];
$Estudiante_estudiante_id = $_POST['estudiante_estudiante_id'];
$estudiante= new Estudiante();
$estudiante->setEstudiante_id($Estudiante_estudiante_id);
$Lectura_lectura_id = $_POST['lectura_lectura_id'];
$lectura= new Lectura();
$lectura->setLectura_id($Lectura_lectura_id);
CalificacionFacade::insert($calificaciones_id, $calificacion_nota, $estudiante, $lectura);
echo "true";

//That´s all folks!