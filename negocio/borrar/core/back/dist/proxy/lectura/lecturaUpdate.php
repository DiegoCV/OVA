<?php 
 include_once realpath('../../controler/LecturaControler.php'); 
 require_once realpath('../../entity/Lectura.php'); 
 $array_lectura = $_POST['lectura']; 
 $lectura = new Lectura(); 
 $lectura->set_Meta_Columnas($array_lectura); 
 echo LecturaControler::update($lectura);
 ?>