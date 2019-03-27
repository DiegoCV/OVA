<?php 
 include_once realpath('../mapper/CursoMapper.php'); 
 
        class cursoController{ 
 public function insert($curso){
$cursoMapper = new CursoMapper();
return $cursoMapper->insert($curso);
}
public function update($curso){
$cursoMapper = new CursoMapper();
return $cursoMapper->update($curso);
}

 }?>