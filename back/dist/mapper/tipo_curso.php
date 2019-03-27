<?php 
 class Tipo_cursoMapper extends Mapper{ 

		 	public function listarTipo_curso(){ 
 $sql ="SELECT tipo_curso_id, tipo_curso_nombre FROM tipo_curso; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new tipo_curso($fila));
}return $results;
 }
 

		  	public function insertTipo_curso(Tipo_curso $tipo_curso){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Tipo_curso));

			$parametros = SqlQuery::getArrayParametros($Tipo_curso);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateTipo_curso(Tipo_curso $tipo_curso){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Tipo_curso));

			$parametros = SqlQuery::getArrayParametros($Tipo_curso);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}