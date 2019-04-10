<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\

require_once realpath('../../facade/GlobalController.php');
require_once realpath('../../dao/interfaz/IFactoryDao.php');
require_once realpath('../../dto/Estudiante.php');
require_once realpath('../../dao/interfaz/IEstudianteDao.php');

class EstudianteFacade {

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
   * Crea un objeto Estudiante a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param estudiante_id
   * @param estudiante_nombre
   * @param estudiante_correo
   * @param estudiante_pass
   */
  public static function insert( $estudiante_id,  $estudiante_nombre,  $estudiante_correo,  $estudiante_pass){
      $estudiante = new Estudiante();
      $estudiante->setEstudiante_id($estudiante_id); 
      $estudiante->setEstudiante_nombre($estudiante_nombre); 
      $estudiante->setEstudiante_correo($estudiante_correo); 
      $estudiante->setEstudiante_pass($estudiante_pass); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $estudianteDao =$FactoryDao->getestudianteDao(self::getDataBaseDefault());
     $rtn = $estudianteDao->insert($estudiante);
     $estudianteDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Estudiante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param estudiante_id
   * @return El objeto en base de datos o Null
   */
  public static function select($estudiante_id){
      $estudiante = new Estudiante();
      $estudiante->setEstudiante_id($estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $estudianteDao =$FactoryDao->getestudianteDao(self::getDataBaseDefault());
     $result = $estudianteDao->select($estudiante);
     $estudianteDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Estudiante  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param estudiante_id
   * @param estudiante_nombre
   * @param estudiante_correo
   * @param estudiante_pass
   */
  public static function update($estudiante_id, $estudiante_nombre, $estudiante_correo, $estudiante_pass){
      $estudiante = self::select($estudiante_id);
      $estudiante->setEstudiante_nombre($estudiante_nombre); 
      $estudiante->setEstudiante_correo($estudiante_correo); 
      $estudiante->setEstudiante_pass($estudiante_pass); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $estudianteDao =$FactoryDao->getestudianteDao(self::getDataBaseDefault());
     $estudianteDao->update($estudiante);
     $estudianteDao->close();
  }

  /**
   * Elimina un objeto Estudiante de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param estudiante_id
   */
  public static function delete($estudiante_id){
      $estudiante = new Estudiante();
      $estudiante->setEstudiante_id($estudiante_id); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $estudianteDao =$FactoryDao->getestudianteDao(self::getDataBaseDefault());
     $estudianteDao->delete($estudiante);
     $estudianteDao->close();
  }

  /**
   * Lista todos los objetos Estudiante de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Estudiante en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $estudianteDao =$FactoryDao->getestudianteDao(self::getDataBaseDefault());
     $result = $estudianteDao->listAll();
     $estudianteDao->close();
     return $result;
  }


}
//That´s all folks!