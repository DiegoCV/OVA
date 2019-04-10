<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡¡Bienvenido al mundo del mañana!!  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Pregunta.php');
require_once realpath('../../dao/interfaz/IPreguntaDao.php');
require_once realpath('../../dto/Lectura.php');

class PreguntaFacade {

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
   * Crea un objeto Pregunta a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pregunta_id
   * @param pregunta_enunciado
   * @param lectura_lectura_id
   */
  public static function insert( $pregunta_id,  $pregunta_enunciado,  $lectura_lectura_id){
      $pregunta = new Pregunta();
      $pregunta->setPregunta_id($pregunta_id); 
      $pregunta->setPregunta_enunciado($pregunta_enunciado); 
      $pregunta->setLectura_lectura_id($lectura_lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $preguntaDao =$FactoryDao->getpreguntaDao(self::getDataBaseDefault());
     $rtn = $preguntaDao->insert($pregunta);
     $preguntaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Pregunta de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pregunta_id
   * @return El objeto en base de datos o Null
   */
  public static function select($pregunta_id){
      $pregunta = new Pregunta();
      $pregunta->setPregunta_id($pregunta_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $preguntaDao =$FactoryDao->getpreguntaDao(self::getDataBaseDefault());
     $result = $preguntaDao->select($pregunta);
     $preguntaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Pregunta  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pregunta_id
   * @param pregunta_enunciado
   * @param lectura_lectura_id
   */
  public static function update($pregunta_id, $pregunta_enunciado, $lectura_lectura_id){
      $pregunta = self::select($pregunta_id);
      $pregunta->setPregunta_enunciado($pregunta_enunciado); 
      $pregunta->setLectura_lectura_id($lectura_lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $preguntaDao =$FactoryDao->getpreguntaDao(self::getDataBaseDefault());
     $preguntaDao->update($pregunta);
     $preguntaDao->close();
  }

  /**
   * Elimina un objeto Pregunta de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pregunta_id
   */
  public static function delete($pregunta_id){
      $pregunta = new Pregunta();
      $pregunta->setPregunta_id($pregunta_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $preguntaDao =$FactoryDao->getpreguntaDao(self::getDataBaseDefault());
     $preguntaDao->delete($pregunta);
     $preguntaDao->close();
  }

  /**
   * Lista todos los objetos Pregunta de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Pregunta en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $preguntaDao =$FactoryDao->getpreguntaDao(self::getDataBaseDefault());
     $result = $preguntaDao->listAll();
     $preguntaDao->close();
     return $result;
  }


}
//That´s all folks!