<?php 
include_once realpath('../mapper/LecturaMapper.php'); 


class lecturaController{ 

public function insert($lectura){
	$lecturaMapper = new LecturaMapper();
	return $lecturaMapper->insert($lectura);
}

public function update($lectura){
	$lecturaMapper = new LecturaMapper();
	return $lecturaMapper->update($lectura);
}

 }?>