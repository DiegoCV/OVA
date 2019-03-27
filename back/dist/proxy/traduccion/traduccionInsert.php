<?php 
 include_once realpath('../../controler/TraduccionControler.php'); 
 require_once realpath('../../entity/Traduccion.php'); 
 $array_traduccion = $_POST['traduccion']; 
 $traduccion = new Traduccion(); 
 $traduccion->set_Meta_Columnas($array_traduccion); 
 echo TraduccionControler::insert($traduccion);
 ?>