<?php

require_once 'responses/consultarTodosResponse.php';
require_once '../../modelo/Persona.php';
require_once '../../configuracion/database.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$resp = new ConsultarTodosResponse();

$resp->ListPersonas = Persona::BuscarTodas();

echo json_encode($resp);

