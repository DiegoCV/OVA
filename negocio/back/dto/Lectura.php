<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella existió sólo en un sueño. Él es un poema que el poeta nunca escribió.  \\


class Lectura {

  private $lectura_id;
  private $lectura_titulo;
  private $lectura_contenido;
  private $lectura_pronunciacion;
  private $curso_curso_id;
  private $idioma_idioma_key;

    /**
     * Constructor de Lectura
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a lectura_id
     * @return lectura_id
     */
  public function getLectura_id(){
      return $this->lectura_id;
  }

    /**
     * Modifica el valor correspondiente a lectura_id
     * @param lectura_id
     */
  public function setLectura_id($lectura_id){
      $this->lectura_id = $lectura_id;
  }
    /**
     * Devuelve el valor correspondiente a lectura_titulo
     * @return lectura_titulo
     */
  public function getLectura_titulo(){
      return $this->lectura_titulo;
  }

    /**
     * Modifica el valor correspondiente a lectura_titulo
     * @param lectura_titulo
     */
  public function setLectura_titulo($lectura_titulo){
      $this->lectura_titulo = $lectura_titulo;
  }
    /**
     * Devuelve el valor correspondiente a lectura_contenido
     * @return lectura_contenido
     */
  public function getLectura_contenido(){
      return $this->lectura_contenido;
  }

    /**
     * Modifica el valor correspondiente a lectura_contenido
     * @param lectura_contenido
     */
  public function setLectura_contenido($lectura_contenido){
      $this->lectura_contenido = $lectura_contenido;
  }
    /**
     * Devuelve el valor correspondiente a lectura_pronunciacion
     * @return lectura_pronunciacion
     */
  public function getLectura_pronunciacion(){
      return $this->lectura_pronunciacion;
  }

    /**
     * Modifica el valor correspondiente a lectura_pronunciacion
     * @param lectura_pronunciacion
     */
  public function setLectura_pronunciacion($lectura_pronunciacion){
      $this->lectura_pronunciacion = $lectura_pronunciacion;
  }
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