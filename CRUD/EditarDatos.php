<?php

    include_once("../Config/Conexion.php");

    $id = $_POST['Id'];
    $Menu = $_POST['Menus'];
    $Plato = $_POST['Platos'];
    $Precio = $_POST['Precio'];
    $Descripcion = $_POST['Descripcion'];
    $Mesero = $_POST['Mesero'];

    $sql = "UPDATE pedidos SET 
                    MenuId='".$Menu."',
                    PlatoId='".$Plato."',
                    Precio='".$Precio."',
                    Descripcion='".$Descripcion."',
                    Mesero='".$Mesero."' WHERE IdPedido =".$id."";

    if ($resultado = $conexion->query($sql)) {
        header("location:../Index.php");
    }
    ?>