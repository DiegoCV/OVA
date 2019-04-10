<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La primera regla del proyecto es no hacer preguntas  \\


interface IPreguntaDao {

    /**
     * Guarda un objeto Pregunta en la base de datos.
     * @param pregunta objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($pregunta);
    /**
     * Modifica un objeto Pregunta en la base de datos.
     * @param pregunta objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($pregunta);
    /**
     * Elimina un objeto Pregunta en la base de datos.
     * @param pregunta objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($pregunta);
    /**
     * Busca un objeto Pregunta en la base de datos.
     * @param pregunta objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($pregunta);
    /**
     * Lista todos los objetos Pregunta en la base de datos.
     * @return Array<Pregunta> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!