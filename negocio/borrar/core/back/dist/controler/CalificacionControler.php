<?php 
 include_once realpath('../mapper/CalificacionMapper.php'); 
 
        class calificacionController{ 
 public function insert($calificacion){
$calificacionMapper = new CalificacionMapper();
return $calificacionMapper->insert($calificacion);
}
public function update($calificacion){
$calificacionMapper = new CalificacionMapper();
return $calificacionMapper->update($calificacion);
}

 }?>