<?php 
 include_once realpath('../../controler/Tipo_cursoControler.php'); 
 require_once realpath('../../entity/Tipo_curso.php'); 
 $array_tipo_curso = $_POST['tipo_curso']; 
 $tipo_curso = new Tipo_curso(); 
 $tipo_curso->set_Meta_Columnas($array_tipo_curso); 
 echo Tipo_cursoControler::update($tipo_curso);
 ?>