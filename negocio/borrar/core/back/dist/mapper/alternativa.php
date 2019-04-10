<?php 
 class AlternativaMapper extends Mapper{ 

		 	public function listarAlternativa(){ 
 $sql ="SELECT alternativa_id, alternativa_cont, alternativa_respuesta, pregunta_pregunta_id FROM alternativa; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new alternativa($fila));
}return $results;
 }
 

		  	public function insertAlternativa(Alternativa $alternativa){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Alternativa));

			$parametros = SqlQuery::getArrayParametros($Alternativa);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateAlternativa(Alternativa $alternativa){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Alternativa));

			$parametros = SqlQuery::getArrayParametros($Alternativa);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}