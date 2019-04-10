<?php 
 include_once realpath('../mapper/CursoMapper.php'); 
 
        class cursoController{ 
 public function insert($curso){
$cursoMapper = new CursoMapper();
return $cursoMapper->insert($curso);
}

public function listAll(){
	$cursoMapper = new CursoMapper();
	return $$cursoMapper->listAll();	

}

public function update($curso){
$cursoMapper = new CursoMapper();
return $cursoMapper->update($curso);
}

 }?> 