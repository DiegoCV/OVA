<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\


interface ISesion_logDao {

    /**
     * Guarda un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sesion_log);
    /**
     * Modifica un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sesion_log);
    /**
     * Elimina un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sesion_log);
    /**
     * Busca un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sesion_log);
    /**
     * Lista todos los objetos Sesion_log en la base de datos.
     * @return Array<Sesion_log> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!