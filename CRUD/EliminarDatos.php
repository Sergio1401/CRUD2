<?php
    include ("../Config/Conexion.php");

    $Id = $_GET['id'];
    $sql = "DELETE FROM pedidos WHERE IdPedido ='$Id'";

    $query = mysqli_query($conexion,$sql);
    if ($query === TRUE) {
        header("Location: ../Index.php");
    }

?>