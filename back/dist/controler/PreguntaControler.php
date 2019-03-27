<?php 
 include_once realpath('../mapper/PreguntaMapper.php'); 
 
        class preguntaController{ 
 public function insert($pregunta){
$preguntaMapper = new PreguntaMapper();
return $preguntaMapper->insert($pregunta);
}
public function update($pregunta){
$preguntaMapper = new PreguntaMapper();
return $preguntaMapper->update($pregunta);
}

 }?>