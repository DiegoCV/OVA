<?php 
 include_once realpath('../mapper/Sesion_logMapper.php'); 
 
        class sesion_logController{ 
 public function insert($sesion_log){
$sesion_logMapper = new Sesion_logMapper();
return $sesion_logMapper->insert($sesion_log);
}
public function update($sesion_log){
$sesion_logMapper = new Sesion_logMapper();
return $sesion_logMapper->update($sesion_log);
}

 }?>