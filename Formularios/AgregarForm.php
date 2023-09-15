<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Pedidos</h1>
    <br>
    <div class="container">
        <form action="../CRUD/insertarDatos.php" method="POST">
            <label for="">Menu</label>
            <select class="form-select mb-3" name="MenuP" >
                <option selected disabled>--Seleccionar Menu--</option>
                <?php
                    include("../Config/Conexion.php");

                    $sql = $conexion->query("SELECT * FROM menus");
                    while ($resultado =$sql->fetch_assoc()){
                        echo "<option value='".$resultado['id']."'>".$resultado['TipoPlato']."</option>";
                    }
                ?>
            </select>
            <label for="">Platos</label>
            <select class="form-select mb-3" name="PlatoP" >
                <option selected disabled>--Seleccionar Platos--</option>
                <?php
                    include("../Config/Conexion.php");

                    $sql = $conexion->query("SELECT * FROM platos");
                    while ($resultado =$sql->fetch_assoc()){
                        echo "<option value='".$resultado['id']."'>".$resultado['Nombreplato']."</option>";
                    }
                ?>
            </select>
            <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="text" class="form-control" name="Precio">
            </div>
            <div class="mb-3">
                    <label class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="Descripcion">
            </div>
            <div class="mb-3">
                    <label class="form-label">Mesero</label>
                    <input type="text" class="form-control" name="Mesero">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Agregar</button>
                <a href="../Index.php" class="btn btn-dark">Regresar</a>
            </div>

        </form>
    </div>
    <script src=”https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js” integrity=”sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3”crossorigin=”nonymous”></script>
</body>
</html>