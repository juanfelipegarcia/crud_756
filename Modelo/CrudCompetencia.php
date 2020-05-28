<?php

require_once('../Conexion.php');


class CrudCompetencia{

     public function __construct(){
     }

     public function InsertarCompetencia($Competencia){
          $Db = Db::Conectar();// conectar a la base de Datos
          //definir la insercion a realizar
          $Insert = $Db->prepare('INSERT INTO competencia VALUES(:CodigoCompetencia,:NombreCompetencia)');
          $Insert->bindValue('CodigoCompetencia', $Competencia->getCodigoCompetencia());
          $Insert->bindValue('NombreCompetencia', $Competencia->getNombreCompetencia());
          try {
               $Insert->execute();//ejecutar el insert
               Echo " Registro exitoso";
          } catch (Exception $e) {
               echo $e->getMessage();//Mostrar errores en la insercion
               die();
          }

     }

     //Listar todos los datos.

     public function ListarCompetencias(){
          $Db = Db::Conectar();
          $ListaCompetencias = [];
          $Sql = $Db->query('SELECT * FROM competencia');
          $Sql->execute();

          foreach ($Sql->fetchAll() as $Competencia) {
               $MyCompetencia = new Competencia();

               // echo $Competencia['CodigoCompetencia']."-----".$Competencia['NombreCompetencia'];

               $MyCompetencia->setCodigoCompetencia($Competencia['CodigoCompetencia']);
               $MyCompetencia->setNombreCompetencia($Competencia['NombreCompetencia']);
               $ListaCompetencias[] = $MyCompetencia;
          }

          return $ListaCompetencias;
     }

}

// $Crud = new CrudCompetencia();
// $Crud->ListarCompetencias();

?>