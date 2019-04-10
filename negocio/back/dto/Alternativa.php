<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\


class Alternativa {

  private $alternativa_id;
  private $alternativa_cont;
  private $alternativa_respuesta;
  private $pregunta_pregunta_id;

    /**
     * Constructor de Alternativa
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a alternativa_id
     * @return alternativa_id
     */
  public function getAlternativa_id(){
      return $this->alternativa_id;
  }

    /**
     * Modifica el valor correspondiente a alternativa_id
     * @param alternativa_id
     */
  public function setAlternativa_id($alternativa_id){
      $this->alternativa_id = $alternativa_id;
  }
    /**
     * Devuelve el valor correspondiente a alternativa_cont
     * @return alternativa_cont
     */
  public function getAlternativa_cont(){
      return $this->alternativa_cont;
  }

    /**
     * Modifica el valor correspondiente a alternativa_cont
     * @param alternativa_cont
     */
  public function setAlternativa_cont($alternativa_cont){
      $this->alternativa_cont = $alternativa_cont;
  }
    /**
     * Devuelve el valor correspondiente a alternativa_respuesta
     * @return alternativa_respuesta
     */
  public function getAlternativa_respuesta(){
      return $this->alternativa_respuesta;
  }

    /**
     * Modifica el valor correspondiente a alternativa_respuesta
     * @param alternativa_respuesta
     */
  public function setAlternativa_respuesta($alternativa_respuesta){
      $this->alternativa_respuesta = $alternativa_respuesta;
  }
    /**
     * Devuelve el valor correspondiente a pregunta_pregunta_id
     * @return pregunta_pregunta_id
     */
  public function getPregunta_pregunta_id(){
      return $this->pregunta_pregunta_id;
  }

    /**
     * Modifica el valor correspondiente a pregunta_pregunta_id
     * @param pregunta_pregunta_id
     */
  public function setPregunta_pregunta_id($pregunta_pregunta_id){
      $this->pregunta_pregunta_id = $pregunta_pregunta_id;
  }


}
//That´s all folks!