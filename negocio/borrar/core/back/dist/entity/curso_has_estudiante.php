<?php 
 class Curso_has_estudiante{ 
 public function __construct(){
 $this->NOMBRE = "curso_has_estudiante"; 
 $this->COLUMNAS = array(); 
 $this->PK = array('curso_curso_id','estudiante_estudiante_id'); 
 } 
 public function getCurso_curso_id(){ 
 return $this->COLUMNAS['curso_curso_id']; 
 } 
public function getEstudiante_estudiante_id(){ 
 return $this->COLUMNAS['estudiante_estudiante_id']; 
 } 
 
 public function setCurso_curso_id($curso_curso_id){ 
 if(is_null($curso_curso_id)) $curso_curso_id = 'null'; 
 $this->COLUMNAS['curso_curso_id'] = $curso_curso_id; 
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
