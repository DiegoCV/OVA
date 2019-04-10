<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya están los patrones implementados, ahora sí viene lo chido...  \\


class Curso {

  private $curso_id;
  private $curso_nombre;
  private $tipo_curso_tipo_curso_id;

    /**
     * Constructor de Curso
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a curso_id
     * @return curso_id
     */
  public function getCurso_id(){
      return $this->curso_id;
  }

    /**
     * Modifica el valor correspondiente a curso_id
     * @param curso_id
     */
  public function setCurso_id($curso_id){
      $this->curso_id = $curso_id;
  }
    /**
     * Devuelve el valor correspondiente a curso_nombre
     * @return curso_nombre
     */
  public function getCurso_nombre(){
      return $this->curso_nombre;
  }

    /**
     * Modifica el valor correspondiente a curso_nombre
     * @param curso_nombre
     */
  public function setCurso_nombre($curso_nombre){
      $this->curso_nombre = $curso_nombre;
  }
    /**
     * Devuelve el valor correspondiente a tipo_curso_tipo_curso_id
     * @return tipo_curso_tipo_curso_id
     */
  public function getTipo_curso_tipo_curso_id(){
      return $this->tipo_curso_tipo_curso_id;
  }

    /**
     * Modifica el valor correspondiente a tipo_curso_tipo_curso_id
     * @param tipo_curso_tipo_curso_id
     */
  public function setTipo_curso_tipo_curso_id($tipo_curso_tipo_curso_id){
      $this->tipo_curso_tipo_curso_id = $tipo_curso_tipo_curso_id;
  }


}
//That´s all folks!