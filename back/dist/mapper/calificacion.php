<?php 
 class CalificacionMapper extends Mapper{ 

		 	public function listarCalificacion(){ 
 $sql ="SELECT calificaciones_id, calificacion_nota, estudiante_estudiante_id, lectura_lectura_id FROM calificacion; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new calificacion($fila));
}return $results;
 }
 

		  	public function insertCalificacion(Calificacion $calificacion){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Calificacion));

			$parametros = SqlQuery::getArrayParametros($Calificacion);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateCalificacion(Calificacion $calificacion){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Calificacion));

			$parametros = SqlQuery::getArrayParametros($Calificacion);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}