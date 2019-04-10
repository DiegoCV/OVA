<?php 
 class CursoMapper extends Mapper{ 

		 	public function listarCurso(){ 
 $sql ="SELECT curso_id, curso_nombre, tipo_curso_tipo_curso_id FROM curso; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new curso($fila));
}return $results;
 }
 

		  	public function insertCurso(Curso $curso){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Curso));

			$parametros = SqlQuery::getArrayParametros($Curso);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateCurso(Curso $curso){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Curso));

			$parametros = SqlQuery::getArrayParametros($Curso);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}