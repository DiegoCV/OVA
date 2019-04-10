<?php 
 include_once realpath('../mapper/Curso_has_estudianteMapper.php'); 
 
        class curso_has_estudianteController{ 
 public function insert($curso_has_estudiante){
$curso_has_estudianteMapper = new Curso_has_estudianteMapper();
return $curso_has_estudianteMapper->insert($curso_has_estudiante);
}
public function update($curso_has_estudiante){
$curso_has_estudianteMapper = new Curso_has_estudianteMapper();
return $curso_has_estudianteMapper->update($curso_has_estudiante);
}

 }?>