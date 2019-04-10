<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Documentaqué?  \\


class Tipo_curso {

  private $tipo_curso_id;
  private $tipo_curso_nombre;

    /**
     * Constructor de Tipo_curso
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a tipo_curso_id
     * @return tipo_curso_id
     */
  public function getTipo_curso_id(){
      return $this->tipo_curso_id;
  }

    /**
     * Modifica el valor correspondiente a tipo_curso_id
     * @param tipo_curso_id
     */
  public function setTipo_curso_id($tipo_curso_id){
      $this->tipo_curso_id = $tipo_curso_id;
  }
    /**
     * Devuelve el valor correspondiente a tipo_curso_nombre
     * @return tipo_curso_nombre
     */
  public function getTipo_curso_nombre(){
      return $this->tipo_curso_nombre;
  }

    /**
     * Modifica el valor correspondiente a tipo_curso_nombre
     * @param tipo_curso_nombre
     */
  public function setTipo_curso_nombre($tipo_curso_nombre){
      $this->tipo_curso_nombre = $tipo_curso_nombre;
  }


}
//That´s all folks!