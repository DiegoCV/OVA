<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En esto paso mis sábados en la noche ( ¬.¬)  \\

include_once realpath('../../dao/interfaz/ITraduccionDao.php');
include_once realpath('../../dto/Traduccion.php');
include_once realpath('../../dto/Lectura.php');
include_once realpath('../../dto/Idioma.php');

class TraduccionDao implements ITraduccionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Traduccion en la base de datos.
     * @param traduccion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($traduccion){
      $traduccion_id=$traduccion->getTraduccion_id();
$traduccion_titulo=$traduccion->getTraduccion_titulo();
$traduccion_cont=$traduccion->getTraduccion_cont();
$traduccion_tipo=$traduccion->getTraduccion_tipo();
$lectura_lectura_id=$traduccion->getLectura_lectura_id()->getLectura_id();
$idioma_idioma_key=$traduccion->getIdioma_idioma_key()->getIdioma_key();

      try {
          $sql= "INSERT INTO `traduccion`( `traduccion_id`, `traduccion_titulo`, `traduccion_cont`, `traduccion_tipo`, `lectura_lectura_id`, `idioma_idioma_key`)"
          ."VALUES ('$traduccion_id','$traduccion_titulo','$traduccion_cont','$traduccion_tipo','$lectura_lectura_id','$idioma_idioma_key')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($traduccion){
      $traduccion_id=$traduccion->getTraduccion_id();

      try {
          $sql= "SELECT `traduccion_id`, `traduccion_titulo`, `traduccion_cont`, `traduccion_tipo`, `lectura_lectura_id`, `idioma_idioma_key`"
          ."FROM `traduccion`"
          ."WHERE `traduccion_id`='$traduccion_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $traduccion->setTraduccion_id($data[$i]['traduccion_id']);
          $traduccion->setTraduccion_titulo($data[$i]['traduccion_titulo']);
          $traduccion->setTraduccion_cont($data[$i]['traduccion_cont']);
          $traduccion->setTraduccion_tipo($data[$i]['traduccion_tipo']);
           $lectura = new Lectura();
           $lectura->setLectura_id($data[$i]['lectura_lectura_id']);
           $traduccion->setLectura_lectura_id($lectura);
           $idioma = new Idioma();
           $idioma->setIdioma_key($data[$i]['idioma_idioma_key']);
           $traduccion->setIdioma_idioma_key($idioma);

          }
      return $traduccion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($traduccion){
      $traduccion_id=$traduccion->getTraduccion_id();
$traduccion_titulo=$traduccion->getTraduccion_titulo();
$traduccion_cont=$traduccion->getTraduccion_cont();
$traduccion_tipo=$traduccion->getTraduccion_tipo();
$lectura_lectura_id=$traduccion->getLectura_lectura_id()->getLectura_id();
$idioma_idioma_key=$traduccion->getIdioma_idioma_key()->getIdioma_key();

      try {
          $sql= "UPDATE `traduccion` SET`traduccion_id`='$traduccion_id' ,`traduccion_titulo`='$traduccion_titulo' ,`traduccion_cont`='$traduccion_cont' ,`traduccion_tipo`='$traduccion_tipo' ,`lectura_lectura_id`='$lectura_lectura_id' ,`idioma_idioma_key`='$idioma_idioma_key' WHERE `traduccion_id`='$traduccion_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Traduccion en la base de datos.
     * @param traduccion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($traduccion){
      $traduccion_id=$traduccion->getTraduccion_id();

      try {
          $sql ="DELETE FROM `traduccion` WHERE `traduccion_id`='$traduccion_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Traduccion en la base de datos.
     * @return ArrayList<Traduccion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `traduccion_id`, `traduccion_titulo`, `traduccion_cont`, `traduccion_tipo`, `lectura_lectura_id`, `idioma_idioma_key`"
          ."FROM `traduccion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $traduccion= new Traduccion();
          $traduccion->setTraduccion_id($data[$i]['traduccion_id']);
          $traduccion->setTraduccion_titulo($data[$i]['traduccion_titulo']);
          $traduccion->setTraduccion_cont($data[$i]['traduccion_cont']);
          $traduccion->setTraduccion_tipo($data[$i]['traduccion_tipo']);
           $lectura = new Lectura();
           $lectura->setLectura_id($data[$i]['lectura_lectura_id']);
           $traduccion->setLectura_lectura_id($lectura);
           $idioma = new Idioma();
           $idioma->setIdioma_key($data[$i]['idioma_idioma_key']);
           $traduccion->setIdioma_idioma_key($idioma);

          array_push($lista,$traduccion);
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