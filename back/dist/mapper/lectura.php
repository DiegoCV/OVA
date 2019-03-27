<?php 
 class LecturaMapper extends Mapper{ 

		 	public function listarLectura(){ 
 $sql ="SELECT lectura_id, lectura_titulo, lectura_contenido, lectura_pronunciacion, curso_curso_id, idioma_idioma_id FROM lectura; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new lectura($fila));
}return $results;
 }
 

		  	public function insertLectura(Lectura $lectura){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Lectura));

			$parametros = SqlQuery::getArrayParametros($Lectura);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
			}
			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateLectura(Lectura $lectura){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Lectura));

			$parametros = SqlQuery::getArrayParametros($Lectura);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}