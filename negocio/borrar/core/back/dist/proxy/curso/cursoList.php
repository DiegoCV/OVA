<?php 
 include_once realpath('../../controler/CursoControler.php'); 
 require_once realpath('../../entity/Curso.php'); 
 echo json_encode(CursoControler::listAll()); 
 ?>