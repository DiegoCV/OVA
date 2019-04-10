<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ahora tú puedes ser el tipo con el látigo  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Curso.php');
require_once realpath('../../dao/interfaz/ICursoDao.php');
require_once realpath('../../dto/Tipo_curso.php');

class CursoFacade {

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
   * Crea un objeto Curso a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_id
   * @param curso_nombre
   * @param tipo_curso_tipo_curso_id
   */
  public static function insert( $curso_id,  $curso_nombre,  $tipo_curso_tipo_curso_id){
      $curso = new Curso();
      $curso->setCurso_id($curso_id); 
      $curso->setCurso_nombre($curso_nombre); 
      $curso->setTipo_curso_tipo_curso_id($tipo_curso_tipo_curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cursoDao =$FactoryDao->getcursoDao(self::getDataBaseDefault());
     $rtn = $cursoDao->insert($curso);
     $cursoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Curso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_id
   * @return El objeto en base de datos o Null
   */
  public static function select($curso_id){
      $curso = new Curso();
      $curso->setCurso_id($curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cursoDao =$FactoryDao->getcursoDao(self::getDataBaseDefault());
     $result = $cursoDao->select($curso);
     $cursoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Curso  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_id
   * @param curso_nombre
   * @param tipo_curso_tipo_curso_id
   */
  public static function update($curso_id, $curso_nombre, $tipo_curso_tipo_curso_id){
      $curso = self::select($curso_id);
      $curso->setCurso_nombre($curso_nombre); 
      $curso->setTipo_curso_tipo_curso_id($tipo_curso_tipo_curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cursoDao =$FactoryDao->getcursoDao(self::getDataBaseDefault());
     $cursoDao->update($curso);
     $cursoDao->close();
  }

  /**
   * Elimina un objeto Curso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param curso_id
   */
  public static function delete($curso_id){
      $curso = new Curso();
      $curso->setCurso_id($curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cursoDao =$FactoryDao->getcursoDao(self::getDataBaseDefault());
     $cursoDao->delete($curso);
     $cursoDao->close();
  }

  /**
   * Lista todos los objetos Curso de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Curso en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $cursoDao =$FactoryDao->getcursoDao(self::getDataBaseDefault());
     $result = $cursoDao->listAll();
     $cursoDao->close();
     return $result;
  }


}
//That´s all folks!