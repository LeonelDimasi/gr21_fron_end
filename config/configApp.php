<?php
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
class configApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'consultasController#home',
      'home'=> 'consultasController#home' ,
      'buscar'=> 'consultasController#home',
      'buscarcliente'=> 'consultasController#home',
    ];
}
 ?>
