<?php

require_once 'modelo/mascota.php';
require_once 'modelo/Duenomascota.php';

//instancia Duenomascota
$d=new Duenomascota;
$d-> id = 1;
$d->Nombre = 'Lucas';
$d->Documento = 38745244;
$d->Apellido = 'Rapaport';
$d->Celular = 3416543522;
$d->Direccion= 'Avenida mitre 2548';

//instancia una mascota
$m=new Mascota;
$m->id = 1 ;
$m->Nombre = 'Rocco';
$m->Raza = 'Labrador';
$m->Dueno=$d; 
$m->Datos();




