<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella existió sólo en un sueño. Él es un poema que el poeta nunca escribió.  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Tipo_curso.php');
require_once realpath('../../dao/interfaz/ITipo_cursoDao.php');

class Tipo_cursoFacade {

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
   * Crea un objeto Tipo_curso a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tipo_curso_id
   * @param tipo_curso_nombre
   */
  public static function insert( $tipo_curso_id,  $tipo_curso_nombre){
      $tipo_curso = new Tipo_curso();
      $tipo_curso->setTipo_curso_id($tipo_curso_id); 
      $tipo_curso->setTipo_curso_nombre($tipo_curso_nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipo_cursoDao =$FactoryDao->gettipo_cursoDao(self::getDataBaseDefault());
     $rtn = $tipo_cursoDao->insert($tipo_curso);
     $tipo_cursoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipo_curso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tipo_curso_id
   * @return El objeto en base de datos o Null
   */
  public static function select($tipo_curso_id){
      $tipo_curso = new Tipo_curso();
      $tipo_curso->setTipo_curso_id($tipo_curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipo_cursoDao =$FactoryDao->gettipo_cursoDao(self::getDataBaseDefault());
     $result = $tipo_cursoDao->select($tipo_curso);
     $tipo_cursoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipo_curso  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tipo_curso_id
   * @param tipo_curso_nombre
   */
  public static function update($tipo_curso_id, $tipo_curso_nombre){
      $tipo_curso = self::select($tipo_curso_id);
      $tipo_curso->setTipo_curso_nombre($tipo_curso_nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipo_cursoDao =$FactoryDao->gettipo_cursoDao(self::getDataBaseDefault());
     $tipo_cursoDao->update($tipo_curso);
     $tipo_cursoDao->close();
  }

  /**
   * Elimina un objeto Tipo_curso de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tipo_curso_id
   */
  public static function delete($tipo_curso_id){
      $tipo_curso = new Tipo_curso();
      $tipo_curso->setTipo_curso_id($tipo_curso_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipo_cursoDao =$FactoryDao->gettipo_cursoDao(self::getDataBaseDefault());
     $tipo_cursoDao->delete($tipo_curso);
     $tipo_cursoDao->close();
  }

  /**
   * Lista todos los objetos Tipo_curso de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipo_curso en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tipo_cursoDao =$FactoryDao->gettipo_cursoDao(self::getDataBaseDefault());
     $result = $tipo_cursoDao->listAll();
     $tipo_cursoDao->close();
     return $result;
  }


}
//That´s all folks!