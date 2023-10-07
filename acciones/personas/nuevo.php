<?php
require_once '../../modelo/Persona.php';
require_once 'responses/nuevoResponse.php';
require_once 'request/nuevoRequest.php';
require_once '../../configuracion/database.php';
header('Content-Type: application/json');

$Resp=new NuevoResponse;

$json=file_get_contents('php://input',true);
$req=json_decode($json);

$p = new Persona();
    $p->Nombre=$req->Nombre;
    $p->Apellido=$req->Apellido;
    $p->NroDocumento=$req->NroDocumento;
    $p->Email=$req->Email;
    $p->Agregar();

$Resp->IsOk= true;





echo json_encode($Resp);



