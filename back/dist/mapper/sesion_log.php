<?php 
 class Sesion_logMapper extends Mapper{ 

		 	public function listarSesion_log(){ 
 $sql ="SELECT sesion_log_id, sesion_log_inicio, sesion_log_fin, estudiante_estudiante_id FROM sesion_log; " 
 
 $results = array(); 
 foreach($this->db->query($sql) as $fila){ 
 array_push($results, new sesion_log($fila));
}return $results;
 }
 

		  	public function insertSesion_log(Sesion_log $sesion_log){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLInsertPreparado($Sesion_log));

			$parametros = SqlQuery::getArrayParametros($Sesion_log);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		  	public function updateSesion_log(Sesion_log $sesion_log){ 
 
			$sentencia = $this->db->prepare(SqlQuery::getSQLUpdatePreparado($Sesion_log));

			$parametros = SqlQuery::getArrayParametros($Sesion_log);

			foreach ($parametros as $key => &$val) { 

				$sentencia->bindParam($key, $val);
}

			$sentencia->execute(); 
      		return $this->db->lastInsertId();
 } 

		}