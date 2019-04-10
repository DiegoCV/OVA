<?php
include 'Mapper.php'; 
 class IdiomaMapper extends Mapper{ 

public function listAll(){ 
 $sql ="SELECT idioma_key, idioma_nombre FROM idioma WHERE 1" ;
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 	$idioma = new idioma();
 	$idioma->setIdioma_key($fila['idioma_key']);
 	$idioma->setIdioma_nombre($fila['idioma_nombre']);
 array_push($results, $idioma->getColumnas());
}
return $results;
 }
 

		  	public function insertIdioma(Idioma $idioma){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Idioma));

			$parametros = SqlQuery::getArrayParametros($Idioma);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateIdioma(Idioma $idioma){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Idioma));

			$parametros = SqlQuery::getArrayParametros($Idioma);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}