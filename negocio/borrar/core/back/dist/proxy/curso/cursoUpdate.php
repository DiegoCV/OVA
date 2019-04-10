<?php 
 include_once realpath('../../controler/CursoControler.php'); 
 require_once realpath('../../entity/Curso.php'); 
 $array_curso = $_POST['curso']; 
 $curso = new Curso(); 
 $curso->set_Meta_Columnas($array_curso); 
 echo CursoControler::update($curso);
 ?>