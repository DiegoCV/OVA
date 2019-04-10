<?php 
 class Pregunta{ 
 public function __construct(){
 $this->NOMBRE = "pregunta"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('pregunta_id'); 
 } 
 public function getPregunta_id(){ 
 return $this->COLUMNAS['pregunta_id']; 
 } 
public function getPregunta_enunciado(){ 
 return $this->COLUMNAS['pregunta_enunciado']; 
 } 
public function getLectura_lectura_id(){ 
 return $this->COLUMNAS['lectura_lectura_id']; 
 } 
 
 public function setPregunta_id($pregunta_id){ 
 if(is_null($pregunta_id)) $pregunta_id = 'null'; 
 $this->COLUMNAS['pregunta_id'] = $pregunta_id; 
 } 
public function setPregunta_enunciado($pregunta_enunciado){ 
 if(is_null($pregunta_enunciado)) $pregunta_enunciado = 'null'; 
 $this->COLUMNAS['pregunta_enunciado'] = $pregunta_enunciado; 
 } 
public function setLectura_lectura_id($lectura_lectura_id){ 
 if(is_null($lectura_lectura_id)) $lectura_lectura_id = 'null'; 
 $this->COLUMNAS['lectura_lectura_id'] = $lectura_lectura_id; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
