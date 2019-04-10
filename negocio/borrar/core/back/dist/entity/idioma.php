<?php 
 class Idioma{ 
 public function __construct(){
 $this->NOMBRE = "idioma"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('idioma_key'); 
 } 
 public function getIdioma_key(){ 
 return $this->COLUMNAS['idioma_key']; 
 } 
public function getIdioma_nombre(){ 
 return $this->COLUMNAS['idioma_nombre']; 
 } 

 public function getColumnas(){ 
 return $this->COLUMNAS; 
 } 
 
 public function setIdioma_key($idioma_key){ 
 if(is_null($idioma_key)) $idioma_key = 'null'; 
 $this->COLUMNAS['idioma_key'] = $idioma_key; 
 } 
public function setIdioma_nombre($idioma_nombre){ 
 if(is_null($idioma_nombre)) $idioma_nombre = 'null'; 
 $this->COLUMNAS['idioma_nombre'] = $idioma_nombre; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
