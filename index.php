<?php

//var_dump($_GET['controlador']);
require_once "modelos/basedatos.php";


if (!isset($_GET['c'])) {
    //echo "inicio";
    require_once "controladores/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador, "Inicio"));
} else {
    $controlador = $_GET['c'];
    require_once "controladores/$controlador.controlador.php";
    $controlador = ucwords($controlador) . "Controlador";
    $controlador = new $controlador;
    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    call_user_func(array($controlador, $accion));
}
