<?php
require_once "./view/consultasView.php";
require_once "./model/consultasModel.php";

class consultasController
{
  private $View;
  private $titulo;
  private $Model;

    function __construct()
    {
    $this->View=new consultasView();
    $this->Model=new consultasModel();
    $this->titulo="Lista de posiciones libres";
    $this->titulo2="Lista de posiciones ocupadas por cliente";
   }
  function home(){
    $fecha=$_POST["fecha"];
    $cuilcuit=$_POST["cuilcuit"];
    $posiciones =$this->Model->lista_posiciones_libres($fecha);
    $posicionesCliente =$this->Model->lista_posiciones_ocupadas_cliente($cuilcuit);
    $this->View->mostrar($this->titulo,$this->titulo2,$posiciones,$posicionesCliente);

  }
 
  
}
?>
