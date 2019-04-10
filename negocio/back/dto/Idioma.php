<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\


class Idioma {

  private $idioma_key;
  private $idioma_nombre;

    /**
     * Constructor de Idioma
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idioma_key
     * @return idioma_key
     */
  public function getIdioma_key(){
      return $this->idioma_key;
  }

    /**
     * Modifica el valor correspondiente a idioma_key
     * @param idioma_key
     */
  public function setIdioma_key($idioma_key){
      $this->idioma_key = $idioma_key;
  }
    /**
     * Devuelve el valor correspondiente a idioma_nombre
     * @return idioma_nombre
     */
  public function getIdioma_nombre(){
      return $this->idioma_nombre;
  }

    /**
     * Modifica el valor correspondiente a idioma_nombre
     * @param idioma_nombre
     */
  public function setIdioma_nombre($idioma_nombre){
      $this->idioma_nombre = $idioma_nombre;
  }


}
//That´s all folks!