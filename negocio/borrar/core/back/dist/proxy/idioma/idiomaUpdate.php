<?php 
 include_once realpath('../../controler/IdiomaControler.php'); 
 require_once realpath('../../entity/Idioma.php'); 
 $array_idioma = $_POST['idioma']; 
 $idioma = new Idioma(); 
 $idioma->set_Meta_Columnas($array_idioma); 
 echo IdiomaControler::update($idioma);
 ?>