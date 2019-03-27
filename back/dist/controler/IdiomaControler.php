<?php 
 include_once realpath('../mapper/IdiomaMapper.php'); 
 
        class idiomaController{ 
 public function insert($idioma){
$idiomaMapper = new IdiomaMapper();
return $idiomaMapper->insert($idioma);
}
public function update($idioma){
$idiomaMapper = new IdiomaMapper();
return $idiomaMapper->update($idioma);
}

 }?>