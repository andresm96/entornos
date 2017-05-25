<?php

    $conn = mysqli_connect("localhost", "root") or die ("Problemas de conexion a la base de datos");
    mysqli_select_db($conn, "storeware");

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $subcategoria = $_POST['subcategoria'];
    $img = $_POST['img'];

    // Hacemos una consulta para buscar la categoria
    $sqlcat = "SELECT * from subcategoria where nombre = '$subcategoria'";
    $resultado = mysqli_query($conn, $sqlcat);
    $fila = mysqli_fetch_array($resultado);
    $idsubcat = $fila['id_subCategoria'];

    $sqlinsert = "INSERT INTO producto (nombre, precio, stock, id_subcategoria, img) VALUES ('$nombre', '$precio', '$stock', '$idsubcat', '$img')";

    mysqli_query($conn, $sqlinsert) or die (mysqli_error($conn));

    header('Location:../admin-alta-prod.html');
?>
