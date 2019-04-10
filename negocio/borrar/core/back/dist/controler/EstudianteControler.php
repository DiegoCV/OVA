<?php 
 include_once realpath('../mapper/EstudianteMapper.php'); 
 
        class estudianteController{ 
 public function insert($estudiante){
$estudianteMapper = new EstudianteMapper();
return $estudianteMapper->insert($estudiante);
}
public function update($estudiante){
$estudianteMapper = new EstudianteMapper();
return $estudianteMapper->update($estudiante);
}

 }?>