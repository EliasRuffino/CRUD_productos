<?php

$connectionString = "mysql:host=localhost;port=3306;dbname=crud_productos";
$user = "root";
$pass = "";
$pdo = new PDO ($connectionString,$user,$pass);
$pdo ->setAttribute(\PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo -> prepare ("SELECT * FROM productos ORDER BY fecha_creacion");
$consulta->execute();
$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
/*echo "<pre>";
var_dump($productos);
echo "</pre>";
*/

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creacion de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" rel="stylesheet" type="text/css">
</head>
  <body>
    <h1>CREAR PRODUCTO</h1>
    <a href="index.php"><button type="button" class="btn btn-outline-success " btn-lg>Volver</button>
    
    <form>
  <div class="mb-3">
    <label>Imagen</label>
    <input type="file" class="form-control" id="imagen" name = "imagen">
  </div>
  <div class="mb-3">
    <label>Nombre</label>
    <input type="text" class="form-control" id="nombre" name = "nombre" require>
    </div>
    <div class="mb-3">
    <label>Descripcion</label>
    <textarea class="form-control" id="descripcion" name = "descripcion"></textarea >
  </div> 
  <div class="mb-3">
    <label>Precio</label>
    <input type="number" step=".01" class="form-control" id="precio" name = "precio" require>
  </div>
  <div class="mb-3">
    <label>Fecha de Creacion</label>
    <input type="date" class="form-control" id="fecha" name = "fecha">
  </div>

  <button type="submit" class="btn btn-primary">Cargar Producto</button>
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
