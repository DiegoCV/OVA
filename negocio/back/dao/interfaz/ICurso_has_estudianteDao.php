<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La gente siempre me pregunta si conozco a Tyler Durden.  \\


interface ICurso_has_estudianteDao {

    /**
     * Guarda un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($curso_has_estudiante);
    /**
     * Modifica un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($curso_has_estudiante);
    /**
     * Elimina un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($curso_has_estudiante);
    /**
     * Busca un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($curso_has_estudiante);
    /**
     * Lista todos los objetos Curso_has_estudiante en la base de datos.
     * @return Array<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Curso_has_estudiante en la base de datos que coincidan con la llave primaria.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCurso_curso_id($curso_has_estudiante);
    /**
     * Lista todos los objetos Curso_has_estudiante en la base de datos que coincidan con la llave primaria.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEstudiante_estudiante_id($curso_has_estudiante);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!