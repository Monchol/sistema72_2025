<?php
function listarProductos()
{
    $link = conectar();
    $sql = "SELECT idProducto, prdNombre, prdPrecio, p.idMarca, mkNombre, 
    p.idCategoria, catNombre, prdPresentacion, prdStock, prdImagen 
    FROM productos p, marcas m, categorias c 
    WHERE p.idMarca=m.idMarca 
    AND p.idCategoria=c.idCategoria";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}
/*
function subirArchivo()
{
    $prdImagen = "noDisponible.jpg";

    if ($_FILES['prdImagen']['error'] == 0) {
        $dir = '../productos/';

        // Crear carpeta si no existe
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true); // true = crea recursivamente
        }

        $temp = $_FILES['prdImagen']['tmp_name'];
        $ext = pathinfo($_FILES['prdImagen']['name']);
        $prdImagen = time() . '.' . $ext['extension'];

        if (move_uploaded_file($temp, $dir . $prdImagen)) {
            // Se subió con éxito
        } else {
            // Hubo error al moverlo (permisos, ruta incorrecta, etc.)
        }
    }

    return $prdImagen;
}
*/

function subirArchivo()
{
    $prdImagen = "noDisponible.jpg";
    //valor si no envian un archivo
    if ($_FILES['prdImagen']['error'] == 0) {
        //verifica si el usuario subio una imagen sin errores
        $dir = 'productos/'; // configura el directorio para las imagenes
        $temp = $_FILES['prdImagen']['tmp_name']; // es el nombre temporal de la imagen
        $ext = pathinfo($_FILES['prdImagen']['name']);// variable para la extension de la imagen
        $prdImagen = time() . '.' . $ext['extension'];//timestamp + extension del archivo
        move_uploaded_file($temp, $dir . $prdImagen);
        // mueve le archivo subido al directorio definido en $dir con el nombre armado en $prdImagen
    } else {
        $prdImagen = "<script>console.log('no se subio la imagen')</script>";
    }
    ;
    return $prdImagen;
}

function agregarProducto()
{
    $prdNombre = $_POST["prdNombre"];
    $prdPrecio = $_POST["prdPrecio"];
    $idCategoria = $_POST["idCategoria"];
    $idMarca = $_POST["idMarca"];
    $prdPresentacion = $_POST["prdPresentacion"];
    $prdStock = $_POST["prdStock"];
    $prdImagen = subirArchivo();

    $link = conectar();
    $sql = "INSERT INTO productos (idProducto, prdNombre, prdPrecio, prdPresentacion, prdStock, prdImagen, idMarca, idCategoria) VALUE
            (
                DEFAULT,
                '$prdNombre',
                '$prdPrecio',
                '$prdPresentacion',
                '$prdStock',
                '$prdImagen',
                '$idMarca',
                '$idCategoria'
            )";
    $resultado = mysqli_query($link, $sql);
    return $resultado;
}

function modificarProducto()
{

    # Funcion para modificar marca utilizando el id de la misma y la sentencia UPDATE de SQL
    $idProducto = $_POST["idProducto"];
    $prdNombre = $_POST["prdNombre"];
    $prdPrecio = $_POST["prdPrecio"];
    $idCategoria = $_POST["idCategoria"];
    $idMarca = $_POST["idMarca"];
    $prdPresentacion = $_POST["prdPresentacion"];
    $prdStock = $_POST["prdStock"];
    $idMarca = $_POST["idMarca"];
    $prdImagen = subirArchivo();

    $link = conectar();
    $sql = "UPDATE productos SET prdNombre='$prdNombre', prdPrecio='$prdPrecio', idCategoria='$idCategoria', prdPresentacion='$prdPresentacion', prdStock='$prdStock', prdImagen='$prdImagen', idMarca='$idMarca' WHERE idProducto='$idProducto'";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $resultado;
}

function verProductosPorID()
{
    $idProducto = $_GET["idProducto"];
    $link = conectar();
    $sql = "SELECT `idProducto`, `prdNombre`, `prdPrecio`, `prdPresentacion`, `prdStock`, `prdImagen`, `idMarca`, `idCategoria` FROM `productos` WHERE idProducto='$idProducto'";
    $resultado = mysqli_query($link, $sql);
    $producto = mysqli_fetch_assoc($resultado);
    return $producto;
}

function eliminarProducto()
{
    $idProducto = $_POST['idProducto'];
    $link = conectar();
    $sql = "DELETE from productos WHERE idProducto='$idProducto'";
    $resultado = mysqli_query($link, $sql) or die(mysqli_error($link));
    return $resultado;
}
?>