<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Somos los amish del software  \\


class Calificacion {

  private $calificaciones_id;
  private $calificacion_nota;
  private $estudiante_estudiante_id;
  private $lectura_lectura_id;

    /**
     * Constructor de Calificacion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a calificaciones_id
     * @return calificaciones_id
     */
  public function getCalificaciones_id(){
      return $this->calificaciones_id;
  }

    /**
     * Modifica el valor correspondiente a calificaciones_id
     * @param calificaciones_id
     */
  public function setCalificaciones_id($calificaciones_id){
      $this->calificaciones_id = $calificaciones_id;
  }
    /**
     * Devuelve el valor correspondiente a calificacion_nota
     * @return calificacion_nota
     */
  public function getCalificacion_nota(){
      return $this->calificacion_nota;
  }

    /**
     * Modifica el valor correspondiente a calificacion_nota
     * @param calificacion_nota
     */
  public function setCalificacion_nota($calificacion_nota){
      $this->calificacion_nota = $calificacion_nota;
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
    /**
     * Devuelve el valor correspondiente a lectura_lectura_id
     * @return lectura_lectura_id
     */
  public function getLectura_lectura_id(){
      return $this->lectura_lectura_id;
  }

    /**
     * Modifica el valor correspondiente a lectura_lectura_id
     * @param lectura_lectura_id
     */
  public function setLectura_lectura_id($lectura_lectura_id){
      $this->lectura_lectura_id = $lectura_lectura_id;
  }


}
//That´s all folks!