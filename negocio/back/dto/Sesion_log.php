<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Me han encontrado! ¡No sé cómo pero me han encontrado!  \\


class Sesion_log {

  private $sesion_log_id;
  private $sesion_log_inicio;
  private $sesion_log_fin;
  private $estudiante_estudiante_id;

    /**
     * Constructor de Sesion_log
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a sesion_log_id
     * @return sesion_log_id
     */
  public function getSesion_log_id(){
      return $this->sesion_log_id;
  }

    /**
     * Modifica el valor correspondiente a sesion_log_id
     * @param sesion_log_id
     */
  public function setSesion_log_id($sesion_log_id){
      $this->sesion_log_id = $sesion_log_id;
  }
    /**
     * Devuelve el valor correspondiente a sesion_log_inicio
     * @return sesion_log_inicio
     */
  public function getSesion_log_inicio(){
      return $this->sesion_log_inicio;
  }

    /**
     * Modifica el valor correspondiente a sesion_log_inicio
     * @param sesion_log_inicio
     */
  public function setSesion_log_inicio($sesion_log_inicio){
      $this->sesion_log_inicio = $sesion_log_inicio;
  }
    /**
     * Devuelve el valor correspondiente a sesion_log_fin
     * @return sesion_log_fin
     */
  public function getSesion_log_fin(){
      return $this->sesion_log_fin;
  }

    /**
     * Modifica el valor correspondiente a sesion_log_fin
     * @param sesion_log_fin
     */
  public function setSesion_log_fin($sesion_log_fin){
      $this->sesion_log_fin = $sesion_log_fin;
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