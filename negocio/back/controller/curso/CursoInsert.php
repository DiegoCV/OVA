<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\
include_once realpath('../../facade/CursoFacade.php');

$curso_id = $_POST['curso_id'];
$curso_nombre = $_POST['curso_nombre'];
$Tipo_curso_tipo_curso_id = $_POST['tipo_curso_tipo_curso_id'];
$tipo_curso= new Tipo_curso();
$tipo_curso->setTipo_curso_id($Tipo_curso_tipo_curso_id);
CursoFacade::insert($curso_id, $curso_nombre, $tipo_curso);
echo "true";

//That´s all folks!