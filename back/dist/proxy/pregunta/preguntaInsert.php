<?php 
 include_once realpath('../../controler/PreguntaControler.php'); 
 require_once realpath('../../entity/Pregunta.php'); 
 $array_pregunta = $_POST['pregunta']; 
 $pregunta = new Pregunta(); 
 $pregunta->set_Meta_Columnas($array_pregunta); 
 echo PreguntaControler::insert($pregunta);
 ?>