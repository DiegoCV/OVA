<?php

include_once realpath('../../facade/LecturaFacade.php');

$id_lectura = $_GET['i'];
$traduccion = $_GET['t'];

$list=LecturaFacade::selectLectura($id_lectura,$traduccion);
echo $list;
