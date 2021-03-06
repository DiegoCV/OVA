<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\


interface ICalificacionDao {

    /**
     * Guarda un objeto Calificacion en la base de datos.
     * @param calificacion objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calificacion);
    /**
     * Modifica un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calificacion);
    /**
     * Elimina un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calificacion);
    /**
     * Busca un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calificacion);
    /**
     * Lista todos los objetos Calificacion en la base de datos.
     * @return Array<Calificacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!