<?php 
 include_once realpath('../mapper/TraduccionMapper.php'); 
 
        class TraduccionControler{ 
 public function insert($traduccion){
$traduccionMapper = new TraduccionMapper();
return $traduccionMapper->insert($traduccion);
}
public function update($traduccion){
$traduccionMapper = new TraduccionMapper();
return $traduccionMapper->update($traduccion);
}

 }?>