<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\


interface ITipo_cursoDao {

    /**
     * Guarda un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_curso);
    /**
     * Modifica un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_curso);
    /**
     * Elimina un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_curso);
    /**
     * Busca un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_curso);
    /**
     * Lista todos los objetos Tipo_curso en la base de datos.
     * @return Array<Tipo_curso> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!