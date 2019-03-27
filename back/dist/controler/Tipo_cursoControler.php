<?php 
 include_once realpath('../mapper/Tipo_cursoMapper.php'); 
 
        class tipo_cursoController{ 
 public function insert($tipo_curso){
$tipo_cursoMapper = new Tipo_cursoMapper();
return $tipo_cursoMapper->insert($tipo_curso);
}
public function update($tipo_curso){
$tipo_cursoMapper = new Tipo_cursoMapper();
return $tipo_cursoMapper->update($tipo_curso);
}

 }?>