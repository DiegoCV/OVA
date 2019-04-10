<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿En serio? ¿Tantos buenos frameworks y estás usando Anarchy?  \\

include_once realpath('../../dao/interfaz/ICalificacionDao.php');
include_once realpath('../../dto/Calificacion.php');
include_once realpath('../../dto/Estudiante.php');
include_once realpath('../../dto/Lectura.php');

class CalificacionDao implements ICalificacionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Calificacion en la base de datos.
     * @param calificacion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calificacion){
      $calificaciones_id=$calificacion->getCalificaciones_id();
$calificacion_nota=$calificacion->getCalificacion_nota();
$estudiante_estudiante_id=$calificacion->getEstudiante_estudiante_id()->getEstudiante_id();
$lectura_lectura_id=$calificacion->getLectura_lectura_id()->getLectura_id();

      try {
          $sql= "INSERT INTO `calificacion`( `calificaciones_id`, `calificacion_nota`, `estudiante_estudiante_id`, `lectura_lectura_id`)"
          ."VALUES ('$calificaciones_id','$calificacion_nota','$estudiante_estudiante_id','$lectura_lectura_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calificacion){
      $calificaciones_id=$calificacion->getCalificaciones_id();

      try {
          $sql= "SELECT `calificaciones_id`, `calificacion_nota`, `estudiante_estudiante_id`, `lectura_lectura_id`"
          ."FROM `calificacion`"
          ."WHERE `calificaciones_id`='$calificaciones_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $calificacion->setCalificaciones_id($data[$i]['calificaciones_id']);
          $calificacion->setCalificacion_nota($data[$i]['calificacion_nota']);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $calificacion->setEstudiante_estudiante_id($estudiante);
           $lectura = new Lectura();
           $lectura->setLectura_id($data[$i]['lectura_lectura_id']);
           $calificacion->setLectura_lectura_id($lectura);

          }
      return $calificacion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calificacion){
      $calificaciones_id=$calificacion->getCalificaciones_id();
$calificacion_nota=$calificacion->getCalificacion_nota();
$estudiante_estudiante_id=$calificacion->getEstudiante_estudiante_id()->getEstudiante_id();
$lectura_lectura_id=$calificacion->getLectura_lectura_id()->getLectura_id();

      try {
          $sql= "UPDATE `calificacion` SET`calificaciones_id`='$calificaciones_id' ,`calificacion_nota`='$calificacion_nota' ,`estudiante_estudiante_id`='$estudiante_estudiante_id' ,`lectura_lectura_id`='$lectura_lectura_id' WHERE `calificaciones_id`='$calificaciones_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Calificacion en la base de datos.
     * @param calificacion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calificacion){
      $calificaciones_id=$calificacion->getCalificaciones_id();

      try {
          $sql ="DELETE FROM `calificacion` WHERE `calificaciones_id`='$calificaciones_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calificacion en la base de datos.
     * @return ArrayList<Calificacion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `calificaciones_id`, `calificacion_nota`, `estudiante_estudiante_id`, `lectura_lectura_id`"
          ."FROM `calificacion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $calificacion= new Calificacion();
          $calificacion->setCalificaciones_id($data[$i]['calificaciones_id']);
          $calificacion->setCalificacion_nota($data[$i]['calificacion_nota']);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $calificacion->setEstudiante_estudiante_id($estudiante);
           $lectura = new Lectura();
           $lectura->setLectura_id($data[$i]['lectura_lectura_id']);
           $calificacion->setLectura_lectura_id($lectura);

          array_push($lista,$calificacion);
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