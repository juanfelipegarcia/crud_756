<?php
require_once('../Modelo/Competencia.php');// vincular la clase
require_once('../Modelo/CrudCompetencia.php');

$Competencia = new Competencia(); // creal el objeto competencia
$CrudCompetencia = new CrudCompetencia();

if (isset($_POST["Registrar"]))// si lapeticion se registra
{
     echo "Registrar ";
     $Competencia->setCodigoCompetencia($_POST["CodigoCompetencia"]);//instanciar el atributo
     $Competencia->setNombreCompetencia($_POST["NombreCompetencia"]);// instanciar  el atributo
     echo $Competencia->getNombreCompetencia();// verifica la instancia

     $CrudCompetencia::InsertarCompetencia($Competencia);// llamar al metodo para  indertar

}



?>