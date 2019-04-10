<?php 
 class Curso{ 
 public function __construct(){
 $this->NOMBRE = "curso"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('curso_id'); 
 } 
 public function getCurso_id(){ 
 return $this->COLUMNAS['curso_id']; 
 } 
public function getCurso_nombre(){ 
 return $this->COLUMNAS['curso_nombre']; 
 } 
public function getTipo_curso_tipo_curso_id(){ 
 return $this->COLUMNAS['tipo_curso_tipo_curso_id']; 
 } 
 
 public function setCurso_id($curso_id){ 
 if(is_null($curso_id)) $curso_id = 'null'; 
 $this->COLUMNAS['curso_id'] = $curso_id; 
 } 
public function setCurso_nombre($curso_nombre){ 
 if(is_null($curso_nombre)) $curso_nombre = 'null'; 
 $this->COLUMNAS['curso_nombre'] = $curso_nombre; 
 } 
public function setTipo_curso_tipo_curso_id($tipo_curso_tipo_curso_id){ 
 if(is_null($tipo_curso_tipo_curso_id)) $tipo_curso_tipo_curso_id = 'null'; 
 $this->COLUMNAS['tipo_curso_tipo_curso_id'] = $tipo_curso_tipo_curso_id; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
