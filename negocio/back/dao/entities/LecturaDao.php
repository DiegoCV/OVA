<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\

include_once realpath('../../dao/interfaz/ILecturaDao.php');
include_once realpath('../../dto/Lectura.php');
include_once realpath('../../dto/Curso.php');
include_once realpath('../../dto/Idioma.php');

class LecturaDao implements ILecturaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Lectura en la base de datos.
     * @param lectura objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($lectura){
      $lectura_id=$lectura->getLectura_id();
$lectura_titulo=$lectura->getLectura_titulo();
$lectura_contenido=$lectura->getLectura_contenido();
$lectura_pronunciacion=$lectura->getLectura_pronunciacion();
$curso_curso_id=$lectura->getCurso_curso_id()->getCurso_id();
$idioma_idioma_key=$lectura->getIdioma_idioma_key()->getIdioma_key();

      try {
          $sql= "INSERT INTO `lectura`( `lectura_id`, `lectura_titulo`, `lectura_contenido`, `lectura_pronunciacion`, `curso_curso_id`, `idioma_idioma_key`)"
          ."VALUES ('$lectura_id','$lectura_titulo','$lectura_contenido','$lectura_pronunciacion','$curso_curso_id','$idioma_idioma_key')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

public function selectLectura($lectura_id,$idioma_key_traduccion){
      try {
          $sql= "SELECT l.lectura_titulo as 'titulo', l.lectura_contenido as 'original', t.traduccion_titulo as 'titulo2', t.traduccion_cont as 'traduccion', tl.traduccion_cont as 'traduccionL' 
            FROM lectura l 
            INNER JOIN traduccion t 
            ON(l.lectura_id = t.lectura_lectura_id) 
            INNER JOIN traduccion tl 
            ON(l.lectura_id = tl.lectura_lectura_id) 
            WHERE l.lectura_id = $lectura_id 
            AND t.idioma_idioma_key = '$idioma_key_traduccion' 
            AND t.traduccion_tipo = 'I' 
            AND tl.idioma_idioma_key = '$idioma_key_traduccion' 
            AND tl.traduccion_tipo = 'L'";
          $data = $this->ejecutarConsulta($sql);
          return json_encode($data);
      return $lectura;      
    } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }


    /**
     * Busca un objeto Lectura en la base de datos.
     * @param lectura objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($lectura){
      $lectura_id=$lectura->getLectura_id();

      try {
          $sql= "SELECT `lectura_id`, `lectura_titulo`, `lectura_contenido`, `lectura_pronunciacion`, `curso_curso_id`, `idioma_idioma_key`"
          ."FROM `lectura`"
          ."WHERE `lectura_id`='$lectura_id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $lectura->setLectura_id($data[$i]['lectura_id']);
          $lectura->setLectura_titulo($data[$i]['lectura_titulo']);
          $lectura->setLectura_contenido($data[$i]['lectura_contenido']);
          $lectura->setLectura_pronunciacion($data[$i]['lectura_pronunciacion']);
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $lectura->setCurso_curso_id($curso);
           $idioma = new Idioma();
           $idioma->setIdioma_key($data[$i]['idioma_idioma_key']);
           $lectura->setIdioma_idioma_key($idioma);

          }
      return $lectura;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Lectura en la base de datos.
     * @param lectura objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($lectura){
      $lectura_id=$lectura->getLectura_id();
$lectura_titulo=$lectura->getLectura_titulo();
$lectura_contenido=$lectura->getLectura_contenido();
$lectura_pronunciacion=$lectura->getLectura_pronunciacion();
$curso_curso_id=$lectura->getCurso_curso_id()->getCurso_id();
$idioma_idioma_key=$lectura->getIdioma_idioma_key()->getIdioma_key();

      try {
          $sql= "UPDATE `lectura` SET`lectura_id`='$lectura_id' ,`lectura_titulo`='$lectura_titulo' ,`lectura_contenido`='$lectura_contenido' ,`lectura_pronunciacion`='$lectura_pronunciacion' ,`curso_curso_id`='$curso_curso_id' ,`idioma_idioma_key`='$idioma_idioma_key' WHERE `lectura_id`='$lectura_id' ";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Lectura en la base de datos.
     * @param lectura objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($lectura){
      $lectura_id=$lectura->getLectura_id();

      try {
          $sql ="DELETE FROM `lectura` WHERE `lectura_id`='$lectura_id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Lectura en la base de datos.
     * @return ArrayList<Lectura> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `lectura_id`, `lectura_titulo`, `lectura_contenido`, `lectura_pronunciacion`, `curso_curso_id`, `idioma_idioma_key`"
          ."FROM `lectura`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $lectura= new Lectura();
          $lectura->setLectura_id($data[$i]['lectura_id']);
          $lectura->setLectura_titulo($data[$i]['lectura_titulo']);
          $lectura->setLectura_contenido($data[$i]['lectura_contenido']);
          $lectura->setLectura_pronunciacion($data[$i]['lectura_pronunciacion']);
           $curso = new Curso();
           $curso->setCurso_id($data[$i]['curso_curso_id']);
           $lectura->setCurso_curso_id($curso);
           $idioma = new Idioma();
           $idioma->setIdioma_key($data[$i]['idioma_idioma_key']);
           $lectura->setIdioma_idioma_key($idioma);

          array_push($lista,$lectura);
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