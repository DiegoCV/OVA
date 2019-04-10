<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Le he dedicado más tiempo a las frases que al software interno  \\


interface ITraduccionDao {

    /**
     * Guarda un objeto Traduccion en la base de datos.
     * @param traduccion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($traduccion);
    /**
     * Modifica un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($traduccion);
    /**
     * Elimina un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($traduccion);
    /**
     * Busca un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($traduccion);
    /**
     * Lista todos los objetos Traduccion en la base de datos.
     * @return Array<Traduccion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!