<?php 
 class Estudiante{ 
 public function __construct(){
 $this->NOMBRE = "estudiante"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('estudiante_id'); 
 } 
 public function getEstudiante_id(){ 
 return $this->COLUMNAS['estudiante_id']; 
 } 
public function getEstudiante_nombre(){ 
 return $this->COLUMNAS['estudiante_nombre']; 
 } 
public function getEstudiante_correo(){ 
 return $this->COLUMNAS['estudiante_correo']; 
 } 
public function getEstudiante_pass(){ 
 return $this->COLUMNAS['estudiante_pass']; 
 } 
 
 public function setEstudiante_id($estudiante_id){ 
 if(is_null($estudiante_id)) $estudiante_id = 'null'; 
 $this->COLUMNAS['estudiante_id'] = $estudiante_id; 
 } 
public function setEstudiante_nombre($estudiante_nombre){ 
 if(is_null($estudiante_nombre)) $estudiante_nombre = 'null'; 
 $this->COLUMNAS['estudiante_nombre'] = $estudiante_nombre; 
 } 
public function setEstudiante_correo($estudiante_correo){ 
 if(is_null($estudiante_correo)) $estudiante_correo = 'null'; 
 $this->COLUMNAS['estudiante_correo'] = $estudiante_correo; 
 } 
public function setEstudiante_pass($estudiante_pass){ 
 if(is_null($estudiante_pass)) $estudiante_pass = 'null'; 
 $this->COLUMNAS['estudiante_pass'] = $estudiante_pass; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
