<?php
require_once('../Modelo/Competencia.php');
require_once('../Modelo/CrudCompetencia.php');

$CrudCompetencia = new CrudCompetencia();
$ListaCompetencias = $CrudCompetencia->ListarCompetencias();

var_dump($ListaCompetencias);

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1 align="center">Listado de Competencias</h1>
     <table align="center">
          <thead>
               <tr><th>Codigo Competencia</th><th>Nombre Competencia</th></tr>
          </thead>

          <tbody>
          
          </tbody>
     
     </table>
</body>
</html>



