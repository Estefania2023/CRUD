<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
      
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
 
    <?php
    require 'conexion.php';

    $sql= "SELECT  * from sesion";
    $resultado= $conn->query($sql);
    ?>
    <div>
    <h1 class="cabecera">CRUD</h1>
    </div>
    <div class="contenedor" >
    <button class="crear"><a href="crear.php">Agregar nuevo Registro</a></button>

        <table>
            <thead>
                <tr>
                    
                    <th>id </th>
                    <th>nombre </th>
                    <th>email</th>
                    <th>nombreusuario</th>
                    <th>contraseña</th>
                    <th>acciones</th>
                   </tr>
            </thead>
            <tbody>
                <?php      
      while ($fila = $resultado->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php  echo $fila['id']?></td>
                    <td><?php  echo $fila['nombre']?></td>
                    <td><?php  echo $fila['email']?></td>
                    <td><?php  echo $fila['nombreusuario']?></td>
                    <td><?php  echo $fila['contraseña']?></td>
                    <td>
                  
                    <button type="button" class="actualizar"> <a href="actualizar.php"><img class="fle" src="img/actualizar.png" ></a></button>
                    <button type="button" class="btn btn-primary" ><a href="eliminar.php"><img class="fle" src="img/eliminar.png" ></a></button>
                </tr>
                    <?php } ?>
                    </tbody>
                    </table>

    </div>

</body>
</html>