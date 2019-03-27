<?php 
 include_once realpath('../../controler/CalificacionControler.php'); 
 require_once realpath('../../entity/Calificacion.php'); 
 $array_calificacion = $_POST['calificacion']; 
 $calificacion = new Calificacion(); 
 $calificacion->set_Meta_Columnas($array_calificacion); 
 echo CalificacionControler::insert($calificacion);
 ?>