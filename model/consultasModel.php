<?php
error_reporting(E_ALL ^ E_NOTICE);
class consultasModel{
  private $db;
  function __construct()
  {
   $this->db=$this->Connect();
  }

  private function Connect(){
    //puerto en casa
    return new PDO('pgsql:dbname=cursada;user=unc_247799;port=6432;password=247799_unc;host=dbases.exa.unicen.edu.ar');
   // return new PDO('pgsql:dbname=cursada;user=unc_247799;port=5432;password=247799_unc;host=dbases.exa.unicen.edu.ar');
  }
  function lista_posiciones_libres($fecha){
    ///var_dump($fecha);
    $sentencia = $this->db->prepare("SELECT* FROM FN_GR21_POSICIONES_LIBRES(?);");
    $sentencia->execute(array($fecha));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function lista_posiciones_ocupadas_cliente($cuilcuit){
    //var_dump($cuilcuit);
    $sentencia = $this->db->prepare("SELECT * FROM FN_GR21_POSICIONES_OCUPADAS_CLIENTE(?);");
   
    $sentencia->execute(array($cuilcuit));
   /// $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
 

}
 ?>
