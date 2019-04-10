<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Soy la sonrisa burlona y vengativa de Jack  \\


class Traduccion {

  private $traduccion_id;
  private $traduccion_titulo;
  private $traduccion_cont;
  private $traduccion_tipo;
  private $lectura_lectura_id;
  private $idioma_idioma_key;

    /**
     * Constructor de Traduccion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a traduccion_id
     * @return traduccion_id
     */
  public function getTraduccion_id(){
      return $this->traduccion_id;
  }

    /**
     * Modifica el valor correspondiente a traduccion_id
     * @param traduccion_id
     */
  public function setTraduccion_id($traduccion_id){
      $this->traduccion_id = $traduccion_id;
  }
    /**
     * Devuelve el valor correspondiente a traduccion_titulo
     * @return traduccion_titulo
     */
  public function getTraduccion_titulo(){
      return $this->traduccion_titulo;
  }

    /**
     * Modifica el valor correspondiente a traduccion_titulo
     * @param traduccion_titulo
     */
  public function setTraduccion_titulo($traduccion_titulo){
      $this->traduccion_titulo = $traduccion_titulo;
  }
    /**
     * Devuelve el valor correspondiente a traduccion_cont
     * @return traduccion_cont
     */
  public function getTraduccion_cont(){
      return $this->traduccion_cont;
  }

    /**
     * Modifica el valor correspondiente a traduccion_cont
     * @param traduccion_cont
     */
  public function setTraduccion_cont($traduccion_cont){
      $this->traduccion_cont = $traduccion_cont;
  }
    /**
     * Devuelve el valor correspondiente a traduccion_tipo
     * @return traduccion_tipo
     */
  public function getTraduccion_tipo(){
      return $this->traduccion_tipo;
  }

    /**
     * Modifica el valor correspondiente a traduccion_tipo
     * @param traduccion_tipo
     */
  public function setTraduccion_tipo($traduccion_tipo){
      $this->traduccion_tipo = $traduccion_tipo;
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
    /**
     * Devuelve el valor correspondiente a idioma_idioma_key
     * @return idioma_idioma_key
     */
  public function getIdioma_idioma_key(){
      return $this->idioma_idioma_key;
  }

    /**
     * Modifica el valor correspondiente a idioma_idioma_key
     * @param idioma_idioma_key
     */
  public function setIdioma_idioma_key($idioma_idioma_key){
      $this->idioma_idioma_key = $idioma_idioma_key;
  }


}
//That´s all folks!