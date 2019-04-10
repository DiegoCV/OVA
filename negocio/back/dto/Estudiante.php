<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio será una frase insulsa y vacía  \\


class Estudiante {

  private $estudiante_id;
  private $estudiante_nombre;
  private $estudiante_correo;
  private $estudiante_pass;

    /**
     * Constructor de Estudiante
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a estudiante_id
     * @return estudiante_id
     */
  public function getEstudiante_id(){
      return $this->estudiante_id;
  }

    /**
     * Modifica el valor correspondiente a estudiante_id
     * @param estudiante_id
     */
  public function setEstudiante_id($estudiante_id){
      $this->estudiante_id = $estudiante_id;
  }
    /**
     * Devuelve el valor correspondiente a estudiante_nombre
     * @return estudiante_nombre
     */
  public function getEstudiante_nombre(){
      return $this->estudiante_nombre;
  }

    /**
     * Modifica el valor correspondiente a estudiante_nombre
     * @param estudiante_nombre
     */
  public function setEstudiante_nombre($estudiante_nombre){
      $this->estudiante_nombre = $estudiante_nombre;
  }
    /**
     * Devuelve el valor correspondiente a estudiante_correo
     * @return estudiante_correo
     */
  public function getEstudiante_correo(){
      return $this->estudiante_correo;
  }

    /**
     * Modifica el valor correspondiente a estudiante_correo
     * @param estudiante_correo
     */
  public function setEstudiante_correo($estudiante_correo){
      $this->estudiante_correo = $estudiante_correo;
  }
    /**
     * Devuelve el valor correspondiente a estudiante_pass
     * @return estudiante_pass
     */
  public function getEstudiante_pass(){
      return $this->estudiante_pass;
  }

    /**
     * Modifica el valor correspondiente a estudiante_pass
     * @param estudiante_pass
     */
  public function setEstudiante_pass($estudiante_pass){
      $this->estudiante_pass = $estudiante_pass;
  }


}
//That´s all folks!