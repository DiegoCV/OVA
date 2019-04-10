<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Lectura.php');
require_once realpath('../../dao/interfaz/ILecturaDao.php');
require_once realpath('../../dto/Curso.php');
require_once realpath('../../dto/Idioma.php');

class LecturaFacade {

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
   * Crea un objeto Lectura a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param lectura_id
   * @param lectura_titulo
   * @param lectura_contenido
   * @param lectura_pronunciacion
   * @param curso_curso_id
   * @param idioma_idioma_key
   */
  public static function insert( $lectura_id,  $lectura_titulo,  $lectura_contenido,  $lectura_pronunciacion,  $curso_curso_id,  $idioma_idioma_key){
      $lectura = new Lectura();
      $lectura->setLectura_id($lectura_id); 
      $lectura->setLectura_titulo($lectura_titulo); 
      $lectura->setLectura_contenido($lectura_contenido); 
      $lectura->setLectura_pronunciacion($lectura_pronunciacion); 
      $lectura->setCurso_curso_id($curso_curso_id); 
      $lectura->setIdioma_idioma_key($idioma_idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $rtn = $lecturaDao->insert($lectura);
     $lecturaDao->close();
     return $rtn;
  }

  public static function selectLectura($lectura_id,$idioma_key_traduccion){
      $lectura = new Lectura();
      $lectura->setLectura_id($lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $result = $lecturaDao->selectLectura($lectura_id,$idioma_key_traduccion);
     $lecturaDao->close();
     return $result;
  }


  /**
   * Selecciona un objeto Lectura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param lectura_id
   * @return El objeto en base de datos o Null
   */
  public static function select($lectura_id){
      $lectura = new Lectura();
      $lectura->setLectura_id($lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $result = $lecturaDao->select($lectura);
     $lecturaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Lectura  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param lectura_id
   * @param lectura_titulo
   * @param lectura_contenido
   * @param lectura_pronunciacion
   * @param curso_curso_id
   * @param idioma_idioma_key
   */
  public static function update($lectura_id, $lectura_titulo, $lectura_contenido, $lectura_pronunciacion, $curso_curso_id, $idioma_idioma_key){
      $lectura = self::select($lectura_id);
      $lectura->setLectura_titulo($lectura_titulo); 
      $lectura->setLectura_contenido($lectura_contenido); 
      $lectura->setLectura_pronunciacion($lectura_pronunciacion); 
      $lectura->setCurso_curso_id($curso_curso_id); 
      $lectura->setIdioma_idioma_key($idioma_idioma_key); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $lecturaDao->update($lectura);
     $lecturaDao->close();
  }

  /**
   * Elimina un objeto Lectura de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param lectura_id
   */
  public static function delete($lectura_id){
      $lectura = new Lectura();
      $lectura->setLectura_id($lectura_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $lecturaDao->delete($lectura);
     $lecturaDao->close();
  }

  /**
   * Lista todos los objetos Lectura de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Lectura en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $lecturaDao =$FactoryDao->getlecturaDao(self::getDataBaseDefault());
     $result = $lecturaDao->listAll();
     $lecturaDao->close();
     return $result;
  }


}
//That´s all folks!