<?php 
 class Alternativa{ 
 public function __construct(){
 $this->NOMBRE = "alternativa"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('alternativa_id'); 
 } 
 public function getAlternativa_id(){ 
 return $this->COLUMNAS['alternativa_id']; 
 } 
public function getAlternativa_cont(){ 
 return $this->COLUMNAS['alternativa_cont']; 
 } 
public function getAlternativa_respuesta(){ 
 return $this->COLUMNAS['alternativa_respuesta']; 
 } 
public function getPregunta_pregunta_id(){ 
 return $this->COLUMNAS['pregunta_pregunta_id']; 
 } 
 
 public function setAlternativa_id($alternativa_id){ 
 if(is_null($alternativa_id)) $alternativa_id = 'null'; 
 $this->COLUMNAS['alternativa_id'] = $alternativa_id; 
 } 
public function setAlternativa_cont($alternativa_cont){ 
 if(is_null($alternativa_cont)) $alternativa_cont = 'null'; 
 $this->COLUMNAS['alternativa_cont'] = $alternativa_cont; 
 } 
public function setAlternativa_respuesta($alternativa_respuesta){ 
 if(is_null($alternativa_respuesta)) $alternativa_respuesta = 'null'; 
 $this->COLUMNAS['alternativa_respuesta'] = $alternativa_respuesta; 
 } 
public function setPregunta_pregunta_id($pregunta_pregunta_id){ 
 if(is_null($pregunta_pregunta_id)) $pregunta_pregunta_id = 'null'; 
 $this->COLUMNAS['pregunta_pregunta_id'] = $pregunta_pregunta_id; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
