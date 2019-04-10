<?php 
 class Calificacion{ 
 public function __construct(){
 $this->NOMBRE = "calificacion"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('calificaciones_id'); 
 } 
 public function getCalificaciones_id(){ 
 return $this->COLUMNAS['calificaciones_id']; 
 } 
public function getCalificacion_nota(){ 
 return $this->COLUMNAS['calificacion_nota']; 
 } 
public function getEstudiante_estudiante_id(){ 
 return $this->COLUMNAS['estudiante_estudiante_id']; 
 } 
public function getLectura_lectura_id(){ 
 return $this->COLUMNAS['lectura_lectura_id']; 
 } 
 
 public function setCalificaciones_id($calificaciones_id){ 
 if(is_null($calificaciones_id)) $calificaciones_id = 'null'; 
 $this->COLUMNAS['calificaciones_id'] = $calificaciones_id; 
 } 
public function setCalificacion_nota($calificacion_nota){ 
 if(is_null($calificacion_nota)) $calificacion_nota = 'null'; 
 $this->COLUMNAS['calificacion_nota'] = $calificacion_nota; 
 } 
public function setEstudiante_estudiante_id($estudiante_estudiante_id){ 
 if(is_null($estudiante_estudiante_id)) $estudiante_estudiante_id = 'null'; 
 $this->COLUMNAS['estudiante_estudiante_id'] = $estudiante_estudiante_id; 
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
