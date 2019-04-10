<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La última regla es confiar en Arciniegas  \\

include_once realpath('../../dao/interfaz/IIdiomaDao.php');
include_once realpath('../../dto/Idioma.php');

class IdiomaDao implements IIdiomaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Idioma en la base de datos.
     * @param idioma objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($idioma){
      $idioma_key=$idioma->getIdioma_key();
$idioma_nombre=$idioma->getIdioma_nombre();

      try {
          $sql= "INSERT INTO `idioma`( `idioma_key`, `idioma_nombre`)"
          ."VALUES ('$idioma_key','$idioma_nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Idioma en la base de datos.
     * @param idioma objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($idioma){
      $idioma_key=$idioma->getIdioma_key();

      try {
          $sql= "SELECT `idioma_key`, `idioma_nombre`"
          ."FROM `idioma`"
          ."WHERE `idioma_key`='$idioma_key'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $idioma->setIdioma_key($data[$i]['idioma_key']);
          $idioma->setIdioma_nombre($data[$i]['idioma_nombre']);

          }
      return $idioma;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Idioma en la base de datos.
     * @param idioma objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($idioma){
      $idioma_key=$idioma->getIdioma_key();
$idioma_nombre=$idioma->getIdioma_nombre();

      try {
          $sql= "UPDATE `idioma` SET`idioma_key`='$idioma_key' ,`idioma_nombre`='$idioma_nombre' WHERE `idioma_key`='$idioma_key' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Idioma en la base de datos.
     * @param idioma objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($idioma){
      $idioma_key=$idioma->getIdioma_key();

      try {
          $sql ="DELETE FROM `idioma` WHERE `idioma_key`='$idioma_key'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Idioma en la base de datos.
     * @return ArrayList<Idioma> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idioma_key`, `idioma_nombre`"
          ."FROM `idioma`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $idioma= new Idioma();
          $idioma->setIdioma_key($data[$i]['idioma_key']);
          $idioma->setIdioma_nombre($data[$i]['idioma_nombre']);

          array_push($lista,$idioma);
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