<?php 
 class TraduccionMapper extends Mapper{ 

		 	public function listarTraduccion(){ 
 $sql ="SELECT traduccion_id, traduccion_titulo, traduccion_cont, traduccion_tipo, lectura_lectura_id, idioma_idioma_id FROM traduccion; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new traduccion($fila));
}return $results;
 }
 

		  	public function insertTraduccion(Traduccion $traduccion){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Traduccion));

			$parametros = SqlQuery::getArrayParametros($Traduccion);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateTraduccion(Traduccion $traduccion){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Traduccion));

			$parametros = SqlQuery::getArrayParametros($Traduccion);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}