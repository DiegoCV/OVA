<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\
include_once realpath('../../facade/LecturaFacade.php');

$lectura_id = $_POST['lectura_id'];
$lectura_titulo = $_POST['lectura_titulo'];
$lectura_contenido = $_POST['lectura_contenido'];
$lectura_pronunciacion = $_POST['lectura_pronunciacion'];
$Curso_curso_id = $_POST['curso_curso_id'];
$curso= new Curso();
$curso->setCurso_id($Curso_curso_id);
$Idioma_idioma_key = $_POST['idioma_idioma_key'];
$idioma= new Idioma();
$idioma->setIdioma_key($Idioma_idioma_key);
LecturaFacade::insert($lectura_id, $lectura_titulo, $lectura_contenido, $lectura_pronunciacion, $curso, $idioma);
echo "true";

//That´s all folks!