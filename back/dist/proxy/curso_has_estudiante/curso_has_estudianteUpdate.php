<?php 
 include_once realpath('../../controler/Curso_has_estudianteControler.php'); 
 require_once realpath('../../entity/Curso_has_estudiante.php'); 
 $array_curso_has_estudiante = $_POST['curso_has_estudiante']; 
 $curso_has_estudiante = new Curso_has_estudiante(); 
 $curso_has_estudiante->set_Meta_Columnas($array_curso_has_estudiante); 
 echo Curso_has_estudianteControler::update($curso_has_estudiante);
 ?>