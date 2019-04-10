<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Idioma.php');
require_once realpath('../../dao/interfaz/IIdiomaDao.php');

class IdiomaFacade {

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
   * Crea un objeto Idioma a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idioma_key
   * @param idioma_nombre
   */
  public static function insert( $idioma_key,  $idioma_nombre){
      $idioma = new Idioma();
      $idioma->setIdioma_key($idioma_key); 
      $idioma->setIdioma_nombre($idioma_nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $idiomaDao =$FactoryDao->getidiomaDao(self::getDataBaseDefault());
     $rtn = $idiomaDao->insert($idioma);
     $idiomaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Idioma de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idioma_key
   * @return El objeto en base de datos o Null
   */
  public static function select($idioma_key){
      $idioma = new Idioma();
      $idioma->setIdioma_key($idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $idiomaDao =$FactoryDao->getidiomaDao(self::getDataBaseDefault());
     $result = $idiomaDao->select($idioma);
     $idiomaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Idioma  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idioma_key
   * @param idioma_nombre
   */
  public static function update($idioma_key, $idioma_nombre){
      $idioma = self::select($idioma_key);
      $idioma->setIdioma_nombre($idioma_nombre); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $idiomaDao =$FactoryDao->getidiomaDao(self::getDataBaseDefault());
     $idiomaDao->update($idioma);
     $idiomaDao->close();
  }

  /**
   * Elimina un objeto Idioma de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idioma_key
   */
  public static function delete($idioma_key){
      $idioma = new Idioma();
      $idioma->setIdioma_key($idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $idiomaDao =$FactoryDao->getidiomaDao(self::getDataBaseDefault());
     $idiomaDao->delete($idioma);
     $idiomaDao->close();
  }

  /**
   * Lista todos los objetos Idioma de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Idioma en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $idiomaDao =$FactoryDao->getidiomaDao(self::getDataBaseDefault());
     $result = $idiomaDao->listAll();
     $idiomaDao->close();
     return $result;
  }


}
//That´s all folks!