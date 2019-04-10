<?php 

include_once realpath('../../mapper/IdiomaMapper.php'); 
 
 class IdiomaControler{ 
public function insert($idioma){
	$idiomaMapper = new IdiomaMapper();
	return $idiomaMapper->insert($idioma);
}

public function listAll(){
	$idiomaMapper = new IdiomaMapper();
	return $idiomaMapper->listAll();	

}

public function update($idioma){
$idiomaMapper = new IdiomaMapper();
return $idiomaMapper->update($idioma);
}

 }?>