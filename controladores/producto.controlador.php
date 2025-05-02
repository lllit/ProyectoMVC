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

  public function FormCrear(){
    $modelo = $this->modelo; // Definimos la variable antes de incluir la vista
    require_once "vistas/encabezado.php";
    require_once "vistas/productos/form.php"; // Ahora $modelo estará disponible en esta vista
    require_once "vistas/pie.php";
  }

  public function Guardar(){
    $modelo = $this->modelo;
    $p=new Producto();
    $p->setPro_id(intval($_POST['ID']));
    $p->setPro_nom($_POST['Nombre']);
    $p->setPro_mar($_POST['Marca']);
    $p->setPro_cos($_POST['Costo']);
    $p->setPro_pre($_POST['Precio']);
    $p->setPro_cant($_POST['Cantidad']);

    $this->modelo->Insertar($p);
    header("location:?c=producto");

  }




}
