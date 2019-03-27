<?php 
 include_once realpath('../../controler/Sesion_logControler.php'); 
 require_once realpath('../../entity/Sesion_log.php'); 
 $array_sesion_log = $_POST['sesion_log']; 
 $sesion_log = new Sesion_log(); 
 $sesion_log->set_Meta_Columnas($array_sesion_log); 
 echo Sesion_logControler::insert($sesion_log);
 ?>