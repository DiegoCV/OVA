<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Sesion_log.php');
require_once realpath('../../dao/interfaz/ISesion_logDao.php');
require_once realpath('../../dto/Estudiante.php');

class Sesion_logFacade {

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
   * Crea un objeto Sesion_log a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param sesion_log_id
   * @param sesion_log_inicio
   * @param sesion_log_fin
   * @param estudiante_estudiante_id
   */
  public static function insert( $sesion_log_id,  $sesion_log_inicio,  $sesion_log_fin,  $estudiante_estudiante_id){
      $sesion_log = new Sesion_log();
      $sesion_log->setSesion_log_id($sesion_log_id); 
      $sesion_log->setSesion_log_inicio($sesion_log_inicio); 
      $sesion_log->setSesion_log_fin($sesion_log_fin); 
      $sesion_log->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesion_logDao =$FactoryDao->getsesion_logDao(self::getDataBaseDefault());
     $rtn = $sesion_logDao->insert($sesion_log);
     $sesion_logDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Sesion_log de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param sesion_log_id
   * @return El objeto en base de datos o Null
   */
  public static function select($sesion_log_id){
      $sesion_log = new Sesion_log();
      $sesion_log->setSesion_log_id($sesion_log_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesion_logDao =$FactoryDao->getsesion_logDao(self::getDataBaseDefault());
     $result = $sesion_logDao->select($sesion_log);
     $sesion_logDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Sesion_log  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param sesion_log_id
   * @param sesion_log_inicio
   * @param sesion_log_fin
   * @param estudiante_estudiante_id
   */
  public static function update($sesion_log_id, $sesion_log_inicio, $sesion_log_fin, $estudiante_estudiante_id){
      $sesion_log = self::select($sesion_log_id);
      $sesion_log->setSesion_log_inicio($sesion_log_inicio); 
      $sesion_log->setSesion_log_fin($sesion_log_fin); 
      $sesion_log->setEstudiante_estudiante_id($estudiante_estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesion_logDao =$FactoryDao->getsesion_logDao(self::getDataBaseDefault());
     $sesion_logDao->update($sesion_log);
     $sesion_logDao->close();
  }

  /**
   * Elimina un objeto Sesion_log de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param sesion_log_id
   */
  public static function delete($sesion_log_id){
      $sesion_log = new Sesion_log();
      $sesion_log->setSesion_log_id($sesion_log_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesion_logDao =$FactoryDao->getsesion_logDao(self::getDataBaseDefault());
     $sesion_logDao->delete($sesion_log);
     $sesion_logDao->close();
  }

  /**
   * Lista todos los objetos Sesion_log de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Sesion_log en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $sesion_logDao =$FactoryDao->getsesion_logDao(self::getDataBaseDefault());
     $result = $sesion_logDao->listAll();
     $sesion_logDao->close();
     return $result;
  }


}
//That´s all folks!