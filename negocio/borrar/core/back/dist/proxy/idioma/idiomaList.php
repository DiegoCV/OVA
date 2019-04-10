<?php 
include_once realpath('../../controler/IdiomaControler.php'); 
 require_once realpath('../../entity/Idioma.php'); 
 
echo json_encode(IdiomaControler::listAll()); 
 ?>