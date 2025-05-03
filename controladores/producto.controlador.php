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
    $titulo="Registrar";
    $p=new Producto();

    if(isset($_GET['id'])){
      $p=$this->modelo->Obtener($_GET['id']);
      $titulo="Modifcar";
    }


    require_once "vistas/encabezado.php";
    require_once "vistas/productos/form.php"; // Ahora $modelo estará disponible en esta vista
    require_once "vistas/pie.php";
  }

  public function Guardar(){
    $modelo = $this->modelo;
    $p=new Producto();


    $p->setPro_id(intval($_POST['id']));
    $p->setPro_nom($_POST['Nombre']);
    $p->setPro_mar($_POST['Marca']);
    $p->setPro_cos($_POST['Costo']);
    $p->setPro_pre($_POST['Precio']);
    $p->setPro_cant($_POST['Cantidad']);

    $p->getPro_id() > 0 ? $this->modelo->Actualizar($p) : $this->modelo->Insertar($p);

    header("location:?c=producto");

  }

  public function Borrar(){
    $modelo = $this->modelo;
    $this->modelo->Eliminar($_GET['id']);
    
    header("location:?c=producto");
  }



}
