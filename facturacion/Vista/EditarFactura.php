<?php 

session_start();

if (!(isset($_SESSION["NombreUsuario"]))) {
 header("location:../../Index.php");    
}

require_once('../../Conexion.php');
require_once('../Modelo/Factura.php');
require_once('../Modelo/CrudFactura.php');

$CrudFactura = new CrudFactura();//cear un objeto  CrudCompetencia
$Factura = $CrudFactura::ObtenerFactura($_GET['CodigoCompetencia']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar</title>
</head>
<body>
     <h1 align="center">Competencia</h1>
     <form align="center" action="../Controlador/ControladorFacturacion.php" method="post">
     Codigo competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia" value="<?php echo $Competencia->getCodigoCompetencia();?>" readonly>
     <br><br>
     Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia" value="<?php echo $Competencia->getNombreCompetencia();?>">
     <br><br>

     <input type="hidden" name="Modificar" id="Modificar">
     <button type="submit">Modificar</button>
     </form>
     <br>
     <div align="center">
     <button><a href="ListarFactura.php">Volver</a></button>
     </div>

</body>
</html>


