<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar</title>
</head>
<body>
     <h1 aling="center">Competencia</h1>
     <form action="../Controlador/ControladorCompetencia.php" method="post">
     Codigo competencia: <input type="text" name="CodigoCompetencia" id="CodigoCompetencia">
     <br><br>
     Nombre Competencia: <input type="text" name="NombreCompetencia" id="NombreCompetencia">
     <br><br>

     <input type="hidden" name="modificar" id="modificar">
     <button type="submit">Modificar</button>
     </form>
</body>
</html>


