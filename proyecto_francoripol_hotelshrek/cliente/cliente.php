<?php 
    include("conexion1.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> hotel shrek</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>registro del cliente</h1>
                                <form action="insertar1.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="apellidop" placeholder="apellidop">
                                    <input type="text" class="form-control mb-3" name="apellidom" placeholder="apellidom">
                                    <input type="num" class="form-control mb-3" name="edad" placeholder="edad">
                                    <input type="tel" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    <input type="email" class="form-control mb-3" name="email" placeholder="email">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_francoripol_hotelshrek/index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombre</th>
                                        <th>apellidop</th>
                                        <th>apellidom</th>
                                        <th>edad</th>
                                        <th>telefono</th>
                                        <th>email</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidop']?></th>
                                                <th><?php  echo $row['apellidom']?></th>
                                                <th><?php  echo $row['edad']?></th>   
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['email']?></th>   
                                                <th><a href="actualizar1.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete1.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>