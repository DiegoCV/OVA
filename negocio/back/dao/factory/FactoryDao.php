<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Los animales, asombrados, pasaron su mirada del cerdo al hombre, y del hombre al cerdo; y, nuevamente, del cerdo al hombre; pero ya era imposible distinguir quién era uno y quién era otro.  \\

include_once realpath('../../dao/conexion/Conexion.php');
include_once realpath('../../dao/interfaz/IFactoryDao.php');

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de AlternativaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AlternativaDao
     */
     public function getAlternativaDao($dbName){
        return new AlternativaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CalificacionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalificacionDao
     */
     public function getCalificacionDao($dbName){
        return new CalificacionDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CursoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CursoDao
     */
     public function getCursoDao($dbName){
        return new CursoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Curso_has_estudianteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Curso_has_estudianteDao
     */
     public function getCurso_has_estudianteDao($dbName){
        return new Curso_has_estudianteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de EstudianteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EstudianteDao
     */
     public function getEstudianteDao($dbName){
        return new EstudianteDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de IdiomaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IdiomaDao
     */
     public function getIdiomaDao($dbName){
        return new IdiomaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de LecturaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de LecturaDao
     */
     public function getLecturaDao($dbName){
        return new LecturaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de PreguntaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PreguntaDao
     */
     public function getPreguntaDao($dbName){
        return new PreguntaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Sesion_logDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Sesion_logDao
     */
     public function getSesion_logDao($dbName){
        return new Sesion_logDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Tipo_cursoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tipo_cursoDao
     */
     public function getTipo_cursoDao($dbName){
        return new Tipo_cursoDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TraduccionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TraduccionDao
     */
     public function getTraduccionDao($dbName){
        return new TraduccionDao($this->conn->obtener($dbName));
    }

}
//That´s all folks!