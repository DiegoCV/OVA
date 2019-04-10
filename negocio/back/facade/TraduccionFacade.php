<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella no te quiere </3 mejor ponte a programar  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Traduccion.php');
require_once realpath('../../dao/interfaz/ITraduccionDao.php');
require_once realpath('../../dto/Lectura.php');
require_once realpath('../../dto/Idioma.php');

class TraduccionFacade {

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
   * Crea un objeto Traduccion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param traduccion_id
   * @param traduccion_titulo
   * @param traduccion_cont
   * @param traduccion_tipo
   * @param lectura_lectura_id
   * @param idioma_idioma_key
   */
  public static function insert( $traduccion_id,  $traduccion_titulo,  $traduccion_cont,  $traduccion_tipo,  $lectura_lectura_id,  $idioma_idioma_key){
      $traduccion = new Traduccion();
      $traduccion->setTraduccion_id($traduccion_id); 
      $traduccion->setTraduccion_titulo($traduccion_titulo); 
      $traduccion->setTraduccion_cont($traduccion_cont); 
      $traduccion->setTraduccion_tipo($traduccion_tipo); 
      $traduccion->setLectura_lectura_id($lectura_lectura_id); 
      $traduccion->setIdioma_idioma_key($idioma_idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $traduccionDao =$FactoryDao->gettraduccionDao(self::getDataBaseDefault());
     $rtn = $traduccionDao->insert($traduccion);
     $traduccionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Traduccion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param traduccion_id
   * @return El objeto en base de datos o Null
   */
  public static function select($traduccion_id){
      $traduccion = new Traduccion();
      $traduccion->setTraduccion_id($traduccion_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $traduccionDao =$FactoryDao->gettraduccionDao(self::getDataBaseDefault());
     $result = $traduccionDao->select($traduccion);
     $traduccionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Traduccion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param traduccion_id
   * @param traduccion_titulo
   * @param traduccion_cont
   * @param traduccion_tipo
   * @param lectura_lectura_id
   * @param idioma_idioma_key
   */
  public static function update($traduccion_id, $traduccion_titulo, $traduccion_cont, $traduccion_tipo, $lectura_lectura_id, $idioma_idioma_key){
      $traduccion = self::select($traduccion_id);
      $traduccion->setTraduccion_titulo($traduccion_titulo); 
      $traduccion->setTraduccion_cont($traduccion_cont); 
      $traduccion->setTraduccion_tipo($traduccion_tipo); 
      $traduccion->setLectura_lectura_id($lectura_lectura_id); 
      $traduccion->setIdioma_idioma_key($idioma_idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $traduccionDao =$FactoryDao->gettraduccionDao(self::getDataBaseDefault());
     $traduccionDao->update($traduccion);
     $traduccionDao->close();
  }

  /**
   * Elimina un objeto Traduccion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param traduccion_id
   */
  public static function delete($traduccion_id){
      $traduccion = new Traduccion();
      $traduccion->setTraduccion_id($traduccion_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $traduccionDao =$FactoryDao->gettraduccionDao(self::getDataBaseDefault());
     $traduccionDao->delete($traduccion);
     $traduccionDao->close();
  }

  /**
   * Lista todos los objetos Traduccion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Traduccion en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $traduccionDao =$FactoryDao->gettraduccionDao(self::getDataBaseDefault());
     $result = $traduccionDao->listAll();
     $traduccionDao->close();
     return $result;
  }


}
//That´s all folks!