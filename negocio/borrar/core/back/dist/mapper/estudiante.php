<?php 
 class EstudianteMapper extends Mapper{ 

		 	public function listarEstudiante(){ 
 $sql ="SELECT estudiante_id, estudiante_nombre, estudiante_correo, estudiante_pass FROM estudiante; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new estudiante($fila));
}return $results;
 }
 

		  	public function insertEstudiante(Estudiante $estudiante){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Estudiante));

			$parametros = SqlQuery::getArrayParametros($Estudiante);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateEstudiante(Estudiante $estudiante){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Estudiante));

			$parametros = SqlQuery::getArrayParametros($Estudiante);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}