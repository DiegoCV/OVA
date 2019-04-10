<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojitos de luz de luna  \\
include_once realpath('../../facade/Sesion_logFacade.php');

$sesion_log_id = $_POST['sesion_log_id'];
$sesion_log_inicio = $_POST['sesion_log_inicio'];
$sesion_log_fin = $_POST['sesion_log_fin'];
$Estudiante_estudiante_id = $_POST['estudiante_estudiante_id'];
$estudiante= new Estudiante();
$estudiante->setEstudiante_id($Estudiante_estudiante_id);
Sesion_logFacade::insert($sesion_log_id, $sesion_log_inicio, $sesion_log_fin, $estudiante);
echo "true";

//That´s all folks!