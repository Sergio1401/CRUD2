<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR Menú</h1>
    <br>
    <form class="container" action="../CRUD/EditarDatos.php" method="POST">
        <?php
            include ('../Config/Conexion.php');

            $sql = "SELECT * FROM pedidos WHERE IdPedido =".$_GET['id'];
            $resultado = $conexion->query($sql);

            $row = $resultado->fetch_assoc();
        ?>

        <input type="Hidden" class="form-control" name="Id" value="<?php echo $row['IdPedido']; ?>">

        <!--TRAER DATOS Menú-->
        <label>Menu</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Menus">
            <option selected disabled>--Seleccione Menú--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql1 = "SELECT * FROM menus WHERE Id=".$row['MenuId'];
                $resultado1 = $conexion->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['id']."'>".$row1['TipoPlato']."</option>";

                $sql2 = "SELECT * FROM menus";
                $resultado2 = $conexion->query($sql2);

                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['id']."'>".$Fila['TipoPlato']."</option>";
                }
            ?>   
        </select>
        <label>Platos</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Platos">
            <option selected disabled>--Seleccione platos--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql3 = "SELECT * FROM platos WHERE Id=".$row['PlatoId'];
                $resultado3 = $conexion->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['id']."'>".$row3['Nombreplato']."</option>";

                $sql4 = "SELECT * FROM Platos";
                $resultado4 = $conexion->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['id']."'>".$Fila['Nombreplato']."</option>";
                }
            ?>   
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="Precio" value="<?php echo $row['Precio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="<?php echo $row['Descripcion']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Mesero</label>
            <input type="text" class="form-control" name="Mesero" value="<?php echo $row['Mesero']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
        </form>
</body>
</html>