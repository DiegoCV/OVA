<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\


class Pregunta {

  private $pregunta_id;
  private $pregunta_enunciado;
  private $lectura_lectura_id;

    /**
     * Constructor de Pregunta
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a pregunta_id
     * @return pregunta_id
     */
  public function getPregunta_id(){
      return $this->pregunta_id;
  }

    /**
     * Modifica el valor correspondiente a pregunta_id
     * @param pregunta_id
     */
  public function setPregunta_id($pregunta_id){
      $this->pregunta_id = $pregunta_id;
  }
    /**
     * Devuelve el valor correspondiente a pregunta_enunciado
     * @return pregunta_enunciado
     */
  public function getPregunta_enunciado(){
      return $this->pregunta_enunciado;
  }

    /**
     * Modifica el valor correspondiente a pregunta_enunciado
     * @param pregunta_enunciado
     */
  public function setPregunta_enunciado($pregunta_enunciado){
      $this->pregunta_enunciado = $pregunta_enunciado;
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