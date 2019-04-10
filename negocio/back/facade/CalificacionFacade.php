<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Calificacion.php');
require_once realpath('../../dao/interfaz/ICalificacionDao.php');
require_once realpath('../../dto/Estudiante.php');
require_once realpath('../../dto/Lectura.php');

class CalificacionFacade {

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
   * Crea un objeto Calificacion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param calificaciones_id
   * @param calificacion_nota
   * @param estudiante_estudiante_id
   * @param lectura_lectura_id
   */
  public static function insert( $calificaciones_id,  $calificacion_nota,  $estudiante_estudiante_id,  $lectura_lectura_id){
      $calificacion = new Calificacion();
      $calificacion->setCalificaciones_id($calificaciones_id); 
      $calificacion->setCalificacion_nota($calificacion_nota); 
      $calificacion->setEstudiante_estudiante_id($estudiante_estudiante_id); 
      $calificacion->setLectura_lectura_id($lectura_lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calificacionDao =$FactoryDao->getcalificacionDao(self::getDataBaseDefault());
     $rtn = $calificacionDao->insert($calificacion);
     $calificacionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Calificacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param calificaciones_id
   * @return El objeto en base de datos o Null
   */
  public static function select($calificaciones_id){
      $calificacion = new Calificacion();
      $calificacion->setCalificaciones_id($calificaciones_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calificacionDao =$FactoryDao->getcalificacionDao(self::getDataBaseDefault());
     $result = $calificacionDao->select($calificacion);
     $calificacionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Calificacion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param calificaciones_id
   * @param calificacion_nota
   * @param estudiante_estudiante_id
   * @param lectura_lectura_id
   */
  public static function update($calificaciones_id, $calificacion_nota, $estudiante_estudiante_id, $lectura_lectura_id){
      $calificacion = self::select($calificaciones_id);
      $calificacion->setCalificacion_nota($calificacion_nota); 
      $calificacion->setEstudiante_estudiante_id($estudiante_estudiante_id); 
      $calificacion->setLectura_lectura_id($lectura_lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calificacionDao =$FactoryDao->getcalificacionDao(self::getDataBaseDefault());
     $calificacionDao->update($calificacion);
     $calificacionDao->close();
  }

  /**
   * Elimina un objeto Calificacion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param calificaciones_id
   */
  public static function delete($calificaciones_id){
      $calificacion = new Calificacion();
      $calificacion->setCalificaciones_id($calificaciones_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calificacionDao =$FactoryDao->getcalificacionDao(self::getDataBaseDefault());
     $calificacionDao->delete($calificacion);
     $calificacionDao->close();
  }

  /**
   * Lista todos los objetos Calificacion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Calificacion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $calificacionDao =$FactoryDao->getcalificacionDao(self::getDataBaseDefault());
     $result = $calificacionDao->listAll();
     $calificacionDao->close();
     return $result;
  }


}
//That´s all folks!