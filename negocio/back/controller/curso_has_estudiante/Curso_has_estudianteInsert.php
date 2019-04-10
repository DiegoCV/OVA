<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Quédate con quien te quiera por tu back-end, no por tu front-end  \\
include_once realpath('../../facade/Curso_has_estudianteFacade.php');

$Curso_curso_id = $_POST['curso_curso_id'];
$curso= new Curso();
$curso->setCurso_id($Curso_curso_id);
$Estudiante_estudiante_id = $_POST['estudiante_estudiante_id'];
$estudiante= new Estudiante();
$estudiante->setEstudiante_id($Estudiante_estudiante_id);
Curso_has_estudianteFacade::insert($curso, $estudiante);
echo "true";

//That´s all folks!