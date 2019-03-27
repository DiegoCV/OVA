<?php 
 class Curso_has_estudianteMapper extends Mapper{ 

		 	public function listarCurso_has_estudiante(){ 
 $sql ="SELECT curso_curso_id, estudiante_estudiante_id FROM curso_has_estudiante; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new curso_has_estudiante($fila));
}return $results;
 }
 

		  	public function insertCurso_has_estudiante(Curso_has_estudiante $curso_has_estudiante){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Curso_has_estudiante));

			$parametros = SqlQuery::getArrayParametros($Curso_has_estudiante);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateCurso_has_estudiante(Curso_has_estudiante $curso_has_estudiante){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Curso_has_estudiante));

			$parametros = SqlQuery::getArrayParametros($Curso_has_estudiante);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}