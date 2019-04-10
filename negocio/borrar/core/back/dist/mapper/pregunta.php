<?php 
 class PreguntaMapper extends Mapper{ 

		 	public function listarPregunta(){ 
 $sql ="SELECT pregunta_id, pregunta_enunciado, lectura_lectura_id FROM pregunta; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new pregunta($fila));
}return $results;
 }
 

		  	public function insertPregunta(Pregunta $pregunta){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Pregunta));

			$parametros = SqlQuery::getArrayParametros($Pregunta);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updatePregunta(Pregunta $pregunta){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Pregunta));

			$parametros = SqlQuery::getArrayParametros($Pregunta);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}