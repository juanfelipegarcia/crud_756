<?php

class CrudCliente{
     public function __construct(){}

     public function ListarClientes(){
          $Db = Db::Conectar();
          $ListaClientes = [];
          $Sql = $Db->query('SELECT * FROM clientes');
          $Sql->execute();

          foreach($Sql->fetchAll() as $Cliente){
               $MyCliente = new Cliente();

               $MyCliente->setIdCliente($Cliente['IdCliente']);
               $MyCliente->setNombreCliente($Cliente['NombreCliente']);
               $MyCliente->setApellidoCliente($Cliente['ApellidoCliente']);
               $MyCliente->setDireccionCliente($Cliente['DireccionCliente']);

               $ListaClientes[]=$MyCliente;
          }
          return $ListaClientes;
     }

}

?>