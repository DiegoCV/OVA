<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\


class Curso_has_estudiante {

  private $curso_curso_id;
  private $estudiante_estudiante_id;

    /**
     * Constructor de Curso_has_estudiante
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a curso_curso_id
     * @return curso_curso_id
     */
  public function getCurso_curso_id(){
      return $this->curso_curso_id;
  }

    /**
     * Modifica el valor correspondiente a curso_curso_id
     * @param curso_curso_id
     */
  public function setCurso_curso_id($curso_curso_id){
      $this->curso_curso_id = $curso_curso_id;
  }
    /**
     * Devuelve el valor correspondiente a estudiante_estudiante_id
     * @return estudiante_estudiante_id
     */
  public function getEstudiante_estudiante_id(){
      return $this->estudiante_estudiante_id;
  }

    /**
     * Modifica el valor correspondiente a estudiante_estudiante_id
     * @param estudiante_estudiante_id
     */
  public function setEstudiante_estudiante_id($estudiante_estudiante_id){
      $this->estudiante_estudiante_id = $estudiante_estudiante_id;
  }


}
//That´s all folks!