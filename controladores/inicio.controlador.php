<?php


require_once "modelos/producto.php";

class InicioControlador
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new Producto();
    }

    public function Inicio()
    {
        $modelo = $this->modelo; // Definir la instancia antes de cargar la vista
        require_once "vistas/encabezado.php";
        require_once "vistas/inicio/principal.php"; // Ahora $modelo estará disponible en esta vista
        require_once "vistas/pie.php";
    }
}
