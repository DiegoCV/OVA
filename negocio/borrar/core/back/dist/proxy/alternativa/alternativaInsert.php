<?php 
 include_once realpath('../../controler/AlternativaControler.php'); 
 require_once realpath('../../entity/Alternativa.php'); 
 $array_alternativa = $_POST['alternativa']; 
 $alternativa = new Alternativa(); 
 $alternativa->set_Meta_Columnas($array_alternativa); 
 echo AlternativaControler::insert($alternativa);
 ?>