<?php 
 class Traduccion{ 
 public function __construct(){
 $this->NOMBRE = "traduccion"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('traduccion_id'); 
 } 
 public function getTraduccion_id(){ 
 return $this->COLUMNAS['traduccion_id']; 
 } 
public function getTraduccion_titulo(){ 
 return $this->COLUMNAS['traduccion_titulo']; 
 } 
public function getTraduccion_cont(){ 
 return $this->COLUMNAS['traduccion_cont']; 
 } 
public function getTraduccion_tipo(){ 
 return $this->COLUMNAS['traduccion_tipo']; 
 } 
public function getLectura_lectura_id(){ 
 return $this->COLUMNAS['lectura_lectura_id']; 
 } 
public function getIdioma_idioma_key(){ 
 return $this->COLUMNAS['idioma_idioma_key']; 
 } 
 
 public function setTraduccion_id($traduccion_id){ 
 if(is_null($traduccion_id)) $traduccion_id = 'null'; 
 $this->COLUMNAS['traduccion_id'] = $traduccion_id; 
 } 
public function setTraduccion_titulo($traduccion_titulo){ 
 if(is_null($traduccion_titulo)) $traduccion_titulo = 'null'; 
 $this->COLUMNAS['traduccion_titulo'] = $traduccion_titulo; 
 } 
public function setTraduccion_cont($traduccion_cont){ 
 if(is_null($traduccion_cont)) $traduccion_cont = 'null'; 
 $this->COLUMNAS['traduccion_cont'] = $traduccion_cont; 
 } 
public function setTraduccion_tipo($traduccion_tipo){ 
 if(is_null($traduccion_tipo)) $traduccion_tipo = 'null'; 
 $this->COLUMNAS['traduccion_tipo'] = $traduccion_tipo; 
 } 
public function setLectura_lectura_id($lectura_lectura_id){ 
 if(is_null($lectura_lectura_id)) $lectura_lectura_id = 'null'; 
 $this->COLUMNAS['lectura_lectura_id'] = $lectura_lectura_id; 
 } 
public function setIdioma_idioma_key($idioma_idioma_key){ 
 if(is_null($idioma_idioma_key)) $idioma_idioma_key = 'null'; 
 $this->COLUMNAS['idioma_idioma_key'] = $idioma_idioma_key; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
