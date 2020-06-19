<?php
class Cliente{

     private $IdCliente;
     private $NombreCliente;
     private $ApellidoCliente;
     private $DireccionCliente;

     public function __construct(){}

     public function setIdCliente($IdCliente){
          $this->IdCliente = $IdCliente;
     }

     public function getIdCliente(){
          return $this->IdCliente;
     }

     public function setNombreCliente($NombreCliente){
          $this->NombreCliente = $NombreCliente;
     }

     public function getNombreCliente(){
          return $this->NombreCliente;
     }

     public function setApellidoCliente($ApellidoCliente){
          $this->ApellidoCliente = $ApellidoCliente;
     }

     public function getApellidoCliente(){
          return $this->ApellidoCliente;
     }

     public function setDireccionCliente($DireccionCliente){
          $this->DireccionCliente = $DireccionCliente;
     }

     public function getDireccionCliente(){
          return $this->DireccionCliente;
     }



}

?>