<?php 
 class Sesion_log{ 
 public function __construct(){
 $this->NOMBRE = "sesion_log"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('sesion_log_id'); 
 } 
 public function getSesion_log_id(){ 
 return $this->COLUMNAS['sesion_log_id']; 
 } 
public function getSesion_log_inicio(){ 
 return $this->COLUMNAS['sesion_log_inicio']; 
 } 
public function getSesion_log_fin(){ 
 return $this->COLUMNAS['sesion_log_fin']; 
 } 
public function getEstudiante_estudiante_id(){ 
 return $this->COLUMNAS['estudiante_estudiante_id']; 
 } 
 
 public function setSesion_log_id($sesion_log_id){ 
 if(is_null($sesion_log_id)) $sesion_log_id = 'null'; 
 $this->COLUMNAS['sesion_log_id'] = $sesion_log_id; 
 } 
public function setSesion_log_inicio($sesion_log_inicio){ 
 if(is_null($sesion_log_inicio)) $sesion_log_inicio = 'null'; 
 $this->COLUMNAS['sesion_log_inicio'] = $sesion_log_inicio; 
 } 
public function setSesion_log_fin($sesion_log_fin){ 
 if(is_null($sesion_log_fin)) $sesion_log_fin = 'null'; 
 $this->COLUMNAS['sesion_log_fin'] = $sesion_log_fin; 
 } 
public function setEstudiante_estudiante_id($estudiante_estudiante_id){ 
 if(is_null($estudiante_estudiante_id)) $estudiante_estudiante_id = 'null'; 
 $this->COLUMNAS['estudiante_estudiante_id'] = $estudiante_estudiante_id; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
