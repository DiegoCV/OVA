<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Los animales, asombrados, pasaron su mirada del cerdo al hombre, y del hombre al cerdo; y, nuevamente, del cerdo al hombre; pero ya era imposible distinguir quién era uno y quién era otro.  \\

include_once realpath('../../dao/interfaz/ICursoDao.php');
include_once realpath('../../dto/Curso.php');
include_once realpath('../../dto/Tipo_curso.php');

class CursoDao implements ICursoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Curso en la base de datos.
     * @param curso objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($curso){
      $curso_id=$curso->getCurso_id();
$curso_nombre=$curso->getCurso_nombre();
$tipo_curso_tipo_curso_id=$curso->getTipo_curso_tipo_curso_id()->getTipo_curso_id();

      try {
          $sql= "INSERT INTO `curso`( `curso_id`, `curso_nombre`, `tipo_curso_tipo_curso_id`)"
          ."VALUES ('$curso_id','$curso_nombre','$tipo_curso_tipo_curso_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Curso en la base de datos.
     * @param curso objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($curso){
      $curso_id=$curso->getCurso_id();

      try {
          $sql= "SELECT `curso_id`, `curso_nombre`, `tipo_curso_tipo_curso_id`"
          ."FROM `curso`"
          ."WHERE `curso_id`='$curso_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $curso->setCurso_id($data[$i]['curso_id']);
          $curso->setCurso_nombre($data[$i]['curso_nombre']);
           $tipo_curso = new Tipo_curso();
           $tipo_curso->setTipo_curso_id($data[$i]['tipo_curso_tipo_curso_id']);
           $curso->setTipo_curso_tipo_curso_id($tipo_curso);

          }
      return $curso;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Curso en la base de datos.
     * @param curso objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($curso){
      $curso_id=$curso->getCurso_id();
$curso_nombre=$curso->getCurso_nombre();
$tipo_curso_tipo_curso_id=$curso->getTipo_curso_tipo_curso_id()->getTipo_curso_id();

      try {
          $sql= "UPDATE `curso` SET`curso_id`='$curso_id' ,`curso_nombre`='$curso_nombre' ,`tipo_curso_tipo_curso_id`='$tipo_curso_tipo_curso_id' WHERE `curso_id`='$curso_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Curso en la base de datos.
     * @param curso objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($curso){
      $curso_id=$curso->getCurso_id();

      try {
          $sql ="DELETE FROM `curso` WHERE `curso_id`='$curso_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Curso en la base de datos.
     * @return ArrayList<Curso> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `curso_id`, `curso_nombre`, `tipo_curso_tipo_curso_id`"
          ."FROM `curso`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $curso= new Curso();
          $curso->setCurso_id($data[$i]['curso_id']);
          $curso->setCurso_nombre($data[$i]['curso_nombre']);
           $tipo_curso = new Tipo_curso();
           $tipo_curso->setTipo_curso_id($data[$i]['tipo_curso_tipo_curso_id']);
           $curso->setTipo_curso_tipo_curso_id($tipo_curso);

          array_push($lista,$curso);
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