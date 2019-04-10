<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Vaya! ¡Al fin harás algo mejor que una calculadora!  \\

include_once realpath('../../dao/interfaz/IAlternativaDao.php');
include_once realpath('../../dto/Alternativa.php');
include_once realpath('../../dto/Pregunta.php');

class AlternativaDao implements IAlternativaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Alternativa en la base de datos.
     * @param alternativa objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($alternativa){
      $alternativa_id=$alternativa->getAlternativa_id();
$alternativa_cont=$alternativa->getAlternativa_cont();
$alternativa_respuesta=$alternativa->getAlternativa_respuesta();
$pregunta_pregunta_id=$alternativa->getPregunta_pregunta_id()->getPregunta_id();

      try {
          $sql= "INSERT INTO `alternativa`( `alternativa_id`, `alternativa_cont`, `alternativa_respuesta`, `pregunta_pregunta_id`)"
          ."VALUES ('$alternativa_id','$alternativa_cont','$alternativa_respuesta','$pregunta_pregunta_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Alternativa en la base de datos.
     * @param alternativa objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($alternativa){
      $alternativa_id=$alternativa->getAlternativa_id();

      try {
          $sql= "SELECT `alternativa_id`, `alternativa_cont`, `alternativa_respuesta`, `pregunta_pregunta_id`"
          ."FROM `alternativa`"
          ."WHERE `alternativa_id`='$alternativa_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $alternativa->setAlternativa_id($data[$i]['alternativa_id']);
          $alternativa->setAlternativa_cont($data[$i]['alternativa_cont']);
          $alternativa->setAlternativa_respuesta($data[$i]['alternativa_respuesta']);
           $pregunta = new Pregunta();
           $pregunta->setPregunta_id($data[$i]['pregunta_pregunta_id']);
           $alternativa->setPregunta_pregunta_id($pregunta);

          }
      return $alternativa;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Alternativa en la base de datos.
     * @param alternativa objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($alternativa){
      $alternativa_id=$alternativa->getAlternativa_id();
$alternativa_cont=$alternativa->getAlternativa_cont();
$alternativa_respuesta=$alternativa->getAlternativa_respuesta();
$pregunta_pregunta_id=$alternativa->getPregunta_pregunta_id()->getPregunta_id();

      try {
          $sql= "UPDATE `alternativa` SET`alternativa_id`='$alternativa_id' ,`alternativa_cont`='$alternativa_cont' ,`alternativa_respuesta`='$alternativa_respuesta' ,`pregunta_pregunta_id`='$pregunta_pregunta_id' WHERE `alternativa_id`='$alternativa_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Alternativa en la base de datos.
     * @param alternativa objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($alternativa){
      $alternativa_id=$alternativa->getAlternativa_id();

      try {
          $sql ="DELETE FROM `alternativa` WHERE `alternativa_id`='$alternativa_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Alternativa en la base de datos.
     * @return ArrayList<Alternativa> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `alternativa_id`, `alternativa_cont`, `alternativa_respuesta`, `pregunta_pregunta_id`"
          ."FROM `alternativa`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $alternativa= new Alternativa();
          $alternativa->setAlternativa_id($data[$i]['alternativa_id']);
          $alternativa->setAlternativa_cont($data[$i]['alternativa_cont']);
          $alternativa->setAlternativa_respuesta($data[$i]['alternativa_respuesta']);
           $pregunta = new Pregunta();
           $pregunta->setPregunta_id($data[$i]['pregunta_pregunta_id']);
           $alternativa->setPregunta_pregunta_id($pregunta);

          array_push($lista,$alternativa);
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