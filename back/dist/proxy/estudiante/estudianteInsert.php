<?php 
 include_once realpath('../../controler/EstudianteControler.php'); 
 require_once realpath('../../entity/Estudiante.php'); 
 $array_estudiante = $_POST['estudiante']; 
 $estudiante = new Estudiante(); 
 $estudiante->set_Meta_Columnas($array_estudiante); 
 echo EstudianteControler::insert($estudiante);
 ?>