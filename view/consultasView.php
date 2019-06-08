<?php
require('libs/smarty.class.php');

class consultasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }
  function mostrar($titulo,$titulo2,$posiciones,$posicionesCliente){
  $this->Smarty->assign('Titulo',$titulo);
  $this->Smarty->assign('Titulo2',$titulo2);
  $this->Smarty->assign('posiciones',$posiciones);
  $this->Smarty->assign('posicionesCliente',$posicionesCliente);
  //$this->Smarty->debugging = true;
  $this->Smarty->display('templates/home.tpl');
  }

}
?>
