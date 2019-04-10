<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\


interface ILecturaDao {

    /**
     * Guarda un objeto Lectura en la base de datos.
     * @param lectura objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($lectura);
    /**
     * Modifica un objeto Lectura en la base de datos.
     * @param lectura objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($lectura);
    /**
     * Elimina un objeto Lectura en la base de datos.
     * @param lectura objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($lectura);
    /**
     * Busca un objeto Lectura en la base de datos.
     * @param lectura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($lectura);
    /**
     * Lista todos los objetos Lectura en la base de datos.
     * @return Array<Lectura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!