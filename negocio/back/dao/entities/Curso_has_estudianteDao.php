<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Traigo una pizza para ¿y se la creyó?  \\

include_once realpath('../../dao/interfaz/ICurso_has_estudianteDao.php');
include_once realpath('../../dto/Curso_has_estudiante.php');
include_once realpath('../../dto/Curso.php');
include_once realpath('../../dto/Estudiante.php');

class Curso_has_estudianteDao implements ICurso_has_estudianteDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($curso_has_estudiante){
      $curso_curso_id=$curso_has_estudiante->getCurso_curso_id()->getCurso_id();
$estudiante_estudiante_id=$curso_has_estudiante->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql= "INSERT INTO `curso_has_estudiante`( `curso_curso_id`, `estudiante_estudiante_id`)"
          ."VALUES ('$curso_curso_id','$estudiante_estudiante_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($curso_has_estudiante){
      $curso_curso_id=$curso_has_estudiante->getCurso_curso_id()->getCurso_id();
$estudiante_estudiante_id=$curso_has_estudiante->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql= "SELECT `curso_curso_id`, `estudiante_estudiante_id`"
          ."FROM `curso_has_estudiante`"
          ."WHERE `curso_curso_id`='$curso_curso_id' AND`estudiante_estudiante_id`='$estudiante_estudiante_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $curso_has_estudiante->setCurso_curso_id($curso);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $curso_has_estudiante->setEstudiante_estudiante_id($estudiante);

          }
      return $curso_has_estudiante;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($curso_has_estudiante){
      $curso_curso_id=$curso_has_estudiante->getCurso_curso_id()->getCurso_id();
$estudiante_estudiante_id=$curso_has_estudiante->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql= "UPDATE `curso_has_estudiante` SET`curso_curso_id`='$curso_curso_id' ,`estudiante_estudiante_id`='$estudiante_estudiante_id' WHERE `curso_curso_id`='$curso_curso_id' AND `estudiante_estudiante_id`='$estudiante_estudiante_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($curso_has_estudiante){
      $curso_curso_id=$curso_has_estudiante->getCurso_curso_id()->getCurso_id();
$estudiante_estudiante_id=$curso_has_estudiante->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql ="DELETE FROM `curso_has_estudiante` WHERE `curso_curso_id`='$curso_curso_id' AND`estudiante_estudiante_id`='$estudiante_estudiante_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Curso_has_estudiante en la base de datos.
     * @return ArrayList<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `curso_curso_id`, `estudiante_estudiante_id`"
          ."FROM `curso_has_estudiante`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $curso_has_estudiante= new Curso_has_estudiante();
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $curso_has_estudiante->setCurso_curso_id($curso);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $curso_has_estudiante->setEstudiante_estudiante_id($estudiante);

          array_push($lista,$curso_has_estudiante);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCurso_curso_id($curso_has_estudiante){
      $lista = array();
      $curso_curso_id=$curso_has_estudiante->getCurso_curso_id()->getCurso_id();

      try {
          $sql ="SELECT `curso_curso_id`, `estudiante_estudiante_id`"
          ."FROM `curso_has_estudiante`"
          ."WHERE `curso_curso_id`='$curso_curso_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $curso_has_estudiante = new Curso_has_estudiante();
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $curso_has_estudiante->setCurso_curso_id($curso);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $curso_has_estudiante->setEstudiante_estudiante_id($estudiante);

          array_push($lista,$curso_has_estudiante);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Curso_has_estudiante en la base de datos.
     * @param curso_has_estudiante objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Curso_has_estudiante> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEstudiante_estudiante_id($curso_has_estudiante){
      $lista = array();
      $estudiante_estudiante_id=$curso_has_estudiante->getEstudiante_estudiante_id()->getEstudiante_id();

      try {
          $sql ="SELECT `curso_curso_id`, `estudiante_estudiante_id`"
          ."FROM `curso_has_estudiante`"
          ."WHERE `estudiante_estudiante_id`='$estudiante_estudiante_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $curso_has_estudiante = new Curso_has_estudiante();
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $curso_has_estudiante->setCurso_curso_id($curso);
           $estudiante = new Estudiante();
           $estudiante->setEstudiante_id($data[$i]['estudiante_estudiante_id']);
           $curso_has_estudiante->setEstudiante_estudiante_id($estudiante);

          array_push($lista,$curso_has_estudiante);
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