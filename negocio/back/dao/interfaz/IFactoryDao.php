<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si he visto más lejos es porque estoy sentado sobre los hombros de gigantes.  \\

include_once realpath('../../dao/entities/AlternativaDao.php');
include_once realpath('../../dao/entities/CalificacionDao.php');
include_once realpath('../../dao/entities/CursoDao.php');
include_once realpath('../../dao/entities/Curso_has_estudianteDao.php');
include_once realpath('../../dao/entities/EstudianteDao.php');
include_once realpath('../../dao/entities/IdiomaDao.php');
include_once realpath('../../dao/entities/LecturaDao.php');
include_once realpath('../../dao/entities/PreguntaDao.php');
include_once realpath('../../dao/entities/Sesion_logDao.php');
include_once realpath('../../dao/entities/Tipo_cursoDao.php');
include_once realpath('../../dao/entities/TraduccionDao.php');


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de AlternativaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AlternativaDao
     */
     public function getAlternativaDao($dbName);
     /**
     * Devuelve una instancia de CalificacionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalificacionDao
     */
     public function getCalificacionDao($dbName);
     /**
     * Devuelve una instancia de CursoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CursoDao
     */
     public function getCursoDao($dbName);
     /**
     * Devuelve una instancia de Curso_has_estudianteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Curso_has_estudianteDao
     */
     public function getCurso_has_estudianteDao($dbName);
     /**
     * Devuelve una instancia de EstudianteDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EstudianteDao
     */
     public function getEstudianteDao($dbName);
     /**
     * Devuelve una instancia de IdiomaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de IdiomaDao
     */
     public function getIdiomaDao($dbName);
     /**
     * Devuelve una instancia de LecturaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de LecturaDao
     */
     public function getLecturaDao($dbName);
     /**
     * Devuelve una instancia de PreguntaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PreguntaDao
     */
     public function getPreguntaDao($dbName);
     /**
     * Devuelve una instancia de Sesion_logDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Sesion_logDao
     */
     public function getSesion_logDao($dbName);
     /**
     * Devuelve una instancia de Tipo_cursoDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tipo_cursoDao
     */
     public function getTipo_cursoDao($dbName);
     /**
     * Devuelve una instancia de TraduccionDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TraduccionDao
     */
     public function getTraduccionDao($dbName);

}
//That´s all folks!