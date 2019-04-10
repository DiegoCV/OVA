<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No se fije en el corte de cabello, soy mucho muy rico  \\

include_once realpath('../../dao/interfaz/ISesion_logDao.php');
include_once realpath('../../dto/Sesion_log.php');
include_once realpath('../../dto/Estudiante.php');

class Sesion_logDao implements ISesion_logDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($sesion_log){
      $sesion_log_id=$sesion_log->getSesion_log_id();
$sesion_log_inicio=$sesion_log->getSesion_log_inicio();
$sesion_log_fin=$sesion_log->getSesion_log_fin();
$estudiante_estudiante_id=$sesion_log->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql= "INSERT INTO `sesion_log`( `sesion_log_id`, `sesion_log_inicio`, `sesion_log_fin`, `estudiante_estudiante_id`)"
          ."VALUES ('$sesion_log_id','$sesion_log_inicio','$sesion_log_fin','$estudiante_estudiante_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($sesion_log){
      $sesion_log_id=$sesion_log->getSesion_log_id();

      try {
          $sql= "SELECT `sesion_log_id`, `sesion_log_inicio`, `sesion_log_fin`, `estudiante_estudiante_id`"
          ."FROM `sesion_log`"
          ."WHERE `sesion_log_id`='$sesion_log_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $sesion_log->setSesion_log_id($data[$i]['sesion_log_id']);
          $sesion_log->setSesion_log_inicio($data[$i]['sesion_log_inicio']);
          $sesion_log->setSesion_log_fin($data[$i]['sesion_log_fin']);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $sesion_log->setEstudiante_estudiante_id($estudiante);

          }
      return $sesion_log;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($sesion_log){
      $sesion_log_id=$sesion_log->getSesion_log_id();
$sesion_log_inicio=$sesion_log->getSesion_log_inicio();
$sesion_log_fin=$sesion_log->getSesion_log_fin();
$estudiante_estudiante_id=$sesion_log->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql= "UPDATE `sesion_log` SET`sesion_log_id`='$sesion_log_id' ,`sesion_log_inicio`='$sesion_log_inicio' ,`sesion_log_fin`='$sesion_log_fin' ,`estudiante_estudiante_id`='$estudiante_estudiante_id' WHERE `sesion_log_id`='$sesion_log_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Sesion_log en la base de datos.
     * @param sesion_log objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($sesion_log){
      $sesion_log_id=$sesion_log->getSesion_log_id();

      try {
          $sql ="DELETE FROM `sesion_log` WHERE `sesion_log_id`='$sesion_log_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Sesion_log en la base de datos.
     * @return ArrayList<Sesion_log> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `sesion_log_id`, `sesion_log_inicio`, `sesion_log_fin`, `estudiante_estudiante_id`"
          ."FROM `sesion_log`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $sesion_log= new Sesion_log();
          $sesion_log->setSesion_log_id($data[$i]['sesion_log_id']);
          $sesion_log->setSesion_log_inicio($data[$i]['sesion_log_inicio']);
          $sesion_log->setSesion_log_fin($data[$i]['sesion_log_fin']);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $sesion_log->setEstudiante_estudiante_id($estudiante);

          array_push($lista,$sesion_log);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!