<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Alternativa.php');
require_once realpath('../../dao/interfaz/IAlternativaDao.php');
require_once realpath('../../dto/Pregunta.php');

class AlternativaFacade {

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
   * Crea un objeto Alternativa a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param alternativa_id
   * @param alternativa_cont
   * @param alternativa_respuesta
   * @param pregunta_pregunta_id
   */
  public static function insert( $alternativa_id,  $alternativa_cont,  $alternativa_respuesta,  $pregunta_pregunta_id){
      $alternativa = new Alternativa();
      $alternativa->setAlternativa_id($alternativa_id); 
      $alternativa->setAlternativa_cont($alternativa_cont); 
      $alternativa->setAlternativa_respuesta($alternativa_respuesta); 
      $alternativa->setPregunta_pregunta_id($pregunta_pregunta_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $alternativaDao =$FactoryDao->getalternativaDao(self::getDataBaseDefault());
     $rtn = $alternativaDao->insert($alternativa);
     $alternativaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Alternativa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param alternativa_id
   * @return El objeto en base de datos o Null
   */
  public static function select($alternativa_id){
      $alternativa = new Alternativa();
      $alternativa->setAlternativa_id($alternativa_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $alternativaDao =$FactoryDao->getalternativaDao(self::getDataBaseDefault());
     $result = $alternativaDao->select($alternativa);
     $alternativaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Alternativa  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param alternativa_id
   * @param alternativa_cont
   * @param alternativa_respuesta
   * @param pregunta_pregunta_id
   */
  public static function update($alternativa_id, $alternativa_cont, $alternativa_respuesta, $pregunta_pregunta_id){
      $alternativa = self::select($alternativa_id);
      $alternativa->setAlternativa_cont($alternativa_cont); 
      $alternativa->setAlternativa_respuesta($alternativa_respuesta); 
      $alternativa->setPregunta_pregunta_id($pregunta_pregunta_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $alternativaDao =$FactoryDao->getalternativaDao(self::getDataBaseDefault());
     $alternativaDao->update($alternativa);
     $alternativaDao->close();
  }

  /**
   * Elimina un objeto Alternativa de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param alternativa_id
   */
  public static function delete($alternativa_id){
      $alternativa = new Alternativa();
      $alternativa->setAlternativa_id($alternativa_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $alternativaDao =$FactoryDao->getalternativaDao(self::getDataBaseDefault());
     $alternativaDao->delete($alternativa);
     $alternativaDao->close();
  }

  /**
   * Lista todos los objetos Alternativa de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Alternativa en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $alternativaDao =$FactoryDao->getalternativaDao(self::getDataBaseDefault());
     $result = $alternativaDao->listAll();
     $alternativaDao->close();
     return $result;
  }


}
//That´s all folks!