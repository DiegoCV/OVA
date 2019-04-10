<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Me pagan USD 10,000 por cada frase que invento. 20,000 por las más tontas  \\

include_once realpath('../../dao/interfaz/IEstudianteDao.php');
include_once realpath('../../dto/Estudiante.php');

class EstudianteDao implements IEstudianteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Estudiante en la base de datos.
     * @param estudiante objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($estudiante){
      $estudiante_id=$estudiante->getEstudiante_id();
$estudiante_nombre=$estudiante->getEstudiante_nombre();
$estudiante_correo=$estudiante->getEstudiante_correo();
$estudiante_pass=$estudiante->getEstudiante_pass();

      try {
          $sql= "INSERT INTO `estudiante`( `estudiante_id`, `estudiante_nombre`, `estudiante_correo`, `estudiante_pass`)"
          ."VALUES ('$estudiante_id','$estudiante_nombre','$estudiante_correo','$estudiante_pass')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Estudiante en la base de datos.
     * @param estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($estudiante){
      $estudiante_id=$estudiante->getEstudiante_id();

      try {
          $sql= "SELECT `estudiante_id`, `estudiante_nombre`, `estudiante_correo`, `estudiante_pass`"
          ."FROM `estudiante`"
          ."WHERE `estudiante_id`='$estudiante_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $estudiante->setEstudiante_id($data[$i]['estudiante_id']);
          $estudiante->setEstudiante_nombre($data[$i]['estudiante_nombre']);
          $estudiante->setEstudiante_correo($data[$i]['estudiante_correo']);
          $estudiante->setEstudiante_pass($data[$i]['estudiante_pass']);

          }
      return $estudiante;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Estudiante en la base de datos.
     * @param estudiante objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($estudiante){
      $estudiante_id=$estudiante->getEstudiante_id();
$estudiante_nombre=$estudiante->getEstudiante_nombre();
$estudiante_correo=$estudiante->getEstudiante_correo();
$estudiante_pass=$estudiante->getEstudiante_pass();

      try {
          $sql= "UPDATE `estudiante` SET`estudiante_id`='$estudiante_id' ,`estudiante_nombre`='$estudiante_nombre' ,`estudiante_correo`='$estudiante_correo' ,`estudiante_pass`='$estudiante_pass' WHERE `estudiante_id`='$estudiante_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Estudiante en la base de datos.
     * @param estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($estudiante){
      $estudiante_id=$estudiante->getEstudiante_id();

      try {
          $sql ="DELETE FROM `estudiante` WHERE `estudiante_id`='$estudiante_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Estudiante en la base de datos.
     * @return ArrayList<Estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `estudiante_id`, `estudiante_nombre`, `estudiante_correo`, `estudiante_pass`"
          ."FROM `estudiante`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $estudiante= new Estudiante();
          $estudiante->setEstudiante_id($data[$i]['estudiante_id']);
          $estudiante->setEstudiante_nombre($data[$i]['estudiante_nombre']);
          $estudiante->setEstudiante_correo($data[$i]['estudiante_correo']);
          $estudiante->setEstudiante_pass($data[$i]['estudiante_pass']);

          array_push($lista,$estudiante);
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