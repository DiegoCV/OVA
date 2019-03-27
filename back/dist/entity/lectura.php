<?php 
 class Lectura{ 
 public function __construct(){
 $this->NOMBRE = "lectura"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('lectura_id'); 
 } 
 public function getLectura_id(){ 
 return $this->COLUMNAS['lectura_id']; 
 } 
public function getLectura_titulo(){ 
 return $this->COLUMNAS['lectura_titulo']; 
 } 
public function getLectura_contenido(){ 
 return $this->COLUMNAS['lectura_contenido']; 
 } 
public function getLectura_pronunciacion(){ 
 return $this->COLUMNAS['lectura_pronunciacion']; 
 } 
public function getCurso_curso_id(){ 
 return $this->COLUMNAS['curso_curso_id']; 
 } 
public function getIdioma_idioma_id(){ 
 return $this->COLUMNAS['idioma_idioma_id']; 
 } 
 
 public function setLectura_id($lectura_id){ 
 if(is_null($lectura_id)) $lectura_id = 'null'; 
 $this->COLUMNAS['lectura_id'] = $lectura_id; 
 } 
public function setLectura_titulo($lectura_titulo){ 
 if(is_null($lectura_titulo)) $lectura_titulo = 'null'; 
 $this->COLUMNAS['lectura_titulo'] = $lectura_titulo; 
 } 
public function setLectura_contenido($lectura_contenido){ 
 if(is_null($lectura_contenido)) $lectura_contenido = 'null'; 
 $this->COLUMNAS['lectura_contenido'] = $lectura_contenido; 
 } 
public function setLectura_pronunciacion($lectura_pronunciacion){ 
 if(is_null($lectura_pronunciacion)) $lectura_pronunciacion = 'null'; 
 $this->COLUMNAS['lectura_pronunciacion'] = $lectura_pronunciacion; 
 } 
public function setCurso_curso_id($curso_curso_id){ 
 if(is_null($curso_curso_id)) $curso_curso_id = 'null'; 
 $this->COLUMNAS['curso_curso_id'] = $curso_curso_id; 
 } 
public function setIdioma_idioma_id($idioma_idioma_id){ 
 if(is_null($idioma_idioma_id)) $idioma_idioma_id = 'null'; 
 $this->COLUMNAS['idioma_idioma_id'] = $idioma_idioma_id; 
 } 
 
 public function set_Meta_Columnas($columnas){ 
 $this->COLUMNAS = $columnas;
 foreach ($this->PK as $key => $value) {
 $this->PK[$key] = $this->COLUMNAS[$key];
}
}
}
