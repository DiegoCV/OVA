<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\
include_once realpath('../../facade/Tipo_cursoFacade.php');

$tipo_curso_id = $_POST['tipo_curso_id'];
$tipo_curso_nombre = $_POST['tipo_curso_nombre'];
Tipo_cursoFacade::insert($tipo_curso_id, $tipo_curso_nombre);
echo "true";

//That´s all folks!