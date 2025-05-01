<?php

require_once "modelos/producto.php";


class ProductoControlador
{
  private $modelo;

  public function __construct()
  {
    $this->modelo = new Producto();
  }

  public function Inicio()
  {
    $modelo = $this->modelo; // Definimos la variable antes de incluir la vista
    require_once "vistas/encabezado.php";
    require_once "vistas/productos/index.php"; // Ahora $modelo estará disponible en esta vista
    require_once "vistas/pie.php";
  }
}
