<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Curso_has_estudiante.php');
require_once realpath('../../dao/interfaz/ICurso_has_estudianteDao.php');
require_once realpath('../../dto/Curso.php');
require_once realpath('../../dto/Estudiante.php');

class Curso_has_estudianteFacade {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Curso_has_estudiante a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_curso_id
   * @param estudiante_estudiante_id
   */
  public static function insert( $curso_curso_id,  $estudiante_estudiante_id){
      $curso_has_estudiante = new Curso_has_estudiante();
      $curso_has_estudiante->setCurso_curso_id($curso_curso_id); 
      $curso_has_estudiante->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $rtn = $curso_has_estudianteDao->insert($curso_has_estudiante);
     $curso_has_estudianteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Curso_has_estudiante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_curso_id
   * @param estudiante_estudiante_id
   * @return El objeto en base de datos o Null
   */
  public static function select($curso_curso_id, $estudiante_estudiante_id){
      $curso_has_estudiante = new Curso_has_estudiante();
      $curso_has_estudiante->setCurso_curso_id($curso_curso_id); 
      $curso_has_estudiante->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $result = $curso_has_estudianteDao->select($curso_has_estudiante);
     $curso_has_estudianteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Curso_has_estudiante  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_curso_id
   * @param estudiante_estudiante_id
   */
  public static function update($curso_curso_id, $estudiante_estudiante_id){
      $curso_has_estudiante = self::select($curso_curso_id, $estudiante_estudiante_id);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $curso_has_estudianteDao->update($curso_has_estudiante);
     $curso_has_estudianteDao->close();
  }

  /**
   * Elimina un objeto Curso_has_estudiante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_curso_id
   * @param estudiante_estudiante_id
   */
  public static function delete($curso_curso_id, $estudiante_estudiante_id){
      $curso_has_estudiante = new Curso_has_estudiante();
      $curso_has_estudiante->setCurso_curso_id($curso_curso_id); 
      $curso_has_estudiante->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $curso_has_estudianteDao->delete($curso_has_estudiante);
     $curso_has_estudianteDao->close();
  }

  /**
   * Lista todos los objetos Curso_has_estudiante de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Curso_has_estudiante en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $result = $curso_has_estudianteDao->listAll();
     $curso_has_estudianteDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Curso_has_estudiante de la base de datos a partir de curso_curso_id.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_curso_id
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCurso_curso_id($curso_curso_id){
      $curso_has_estudiante = new Curso_has_estudiante();
      $curso_has_estudiante->setCurso_curso_id($curso_curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $result = $curso_has_estudianteDao->listByCurso_curso_id($curso_has_estudiante);
     $curso_has_estudianteDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Curso_has_estudiante de la base de datos a partir de estudiante_estudiante_id.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param estudiante_estudiante_id
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByEstudiante_estudiante_id($estudiante_estudiante_id){
      $curso_has_estudiante = new Curso_has_estudiante();
      $curso_has_estudiante->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $curso_has_estudianteDao =$FactoryDao->getcurso_has_estudianteDao(self::getDataBaseDefault());
     $result = $curso_has_estudianteDao->listByEstudiante_estudiante_id($curso_has_estudiante);
     $curso_has_estudianteDao->close();
     return $result;
  }


}
//That´s all folks!