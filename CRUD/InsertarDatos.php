<?php
include ("../config/Conexion.php");

$menus = $_POST['MenuP'];
$platos = $_POST['PlatoP'];
$precio = $_POST['Precio'];
$Descripcion = $_POST['Descripcion'];
$mesero = $_POST['Mesero'];

$sql = "INSERT INTO pedidos(MenuId,PlatoId,Precio,Descripcion,Mesero)
            VALUES('$menus','$platos','$precio','$Descripcion','$mesero')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../index.php");
} else {
    echo "Datos NO insertados";
}

?>