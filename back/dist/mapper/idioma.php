<?php 
 class IdiomaMapper extends Mapper{ 

		 	public function listarIdioma(){ 
 $sql ="SELECT idioma_id, idioma_nombre, idioma_key FROM idioma; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new idioma($fila));
}return $results;
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