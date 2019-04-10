<?php 
 class Tipo_curso{ 
 public function __construct(){
 $this->NOMBRE = "tipo_curso"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('tipo_curso_id'); 
 } 
 public function getTipo_curso_id(){ 
 return $this->COLUMNAS['tipo_curso_id']; 
 } 
public function getTipo_curso_nombre(){ 
 return $this->COLUMNAS['tipo_curso_nombre']; 
 } 
 
 public function setTipo_curso_id($tipo_curso_id){ 
 if(is_null($tipo_curso_id)) $tipo_curso_id = 'null'; 
 $this->COLUMNAS['tipo_curso_id'] = $tipo_curso_id; 
 } 
public function setTipo_curso_nombre($tipo_curso_nombre){ 
 if(is_null($tipo_curso_nombre)) $tipo_curso_nombre = 'null'; 
 $this->COLUMNAS['tipo_curso_nombre'] = $tipo_curso_nombre; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
