<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\

include_once realpath('../../dao/interfaz/ITipo_cursoDao.php');
include_once realpath('../../dto/Tipo_curso.php');

class Tipo_cursoDao implements ITipo_cursoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_curso){
      $tipo_curso_id=$tipo_curso->getTipo_curso_id();
$tipo_curso_nombre=$tipo_curso->getTipo_curso_nombre();

      try {
          $sql= "INSERT INTO `tipo_curso`( `tipo_curso_id`, `tipo_curso_nombre`)"
          ."VALUES ('$tipo_curso_id','$tipo_curso_nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_curso){
      $tipo_curso_id=$tipo_curso->getTipo_curso_id();

      try {
          $sql= "SELECT `tipo_curso_id`, `tipo_curso_nombre`"
          ."FROM `tipo_curso`"
          ."WHERE `tipo_curso_id`='$tipo_curso_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tipo_curso->setTipo_curso_id($data[$i]['tipo_curso_id']);
          $tipo_curso->setTipo_curso_nombre($data[$i]['tipo_curso_nombre']);

          }
      return $tipo_curso;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_curso){
      $tipo_curso_id=$tipo_curso->getTipo_curso_id();
$tipo_curso_nombre=$tipo_curso->getTipo_curso_nombre();

      try {
          $sql= "UPDATE `tipo_curso` SET`tipo_curso_id`='$tipo_curso_id' ,`tipo_curso_nombre`='$tipo_curso_nombre' WHERE `tipo_curso_id`='$tipo_curso_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tipo_curso en la base de datos.
     * @param tipo_curso objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_curso){
      $tipo_curso_id=$tipo_curso->getTipo_curso_id();

      try {
          $sql ="DELETE FROM `tipo_curso` WHERE `tipo_curso_id`='$tipo_curso_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_curso en la base de datos.
     * @return ArrayList<Tipo_curso> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `tipo_curso_id`, `tipo_curso_nombre`"
          ."FROM `tipo_curso`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tipo_curso= new Tipo_curso();
          $tipo_curso->setTipo_curso_id($data[$i]['tipo_curso_id']);
          $tipo_curso->setTipo_curso_nombre($data[$i]['tipo_curso_nombre']);

          array_push($lista,$tipo_curso);
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