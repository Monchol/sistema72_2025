<?php 
function listarProductos(){
    $link=conectar();
    $sql="SELECT idProducto, prdNombre, pdrPrecio, p.idMarca, mkNombre, 
    p.idCategoria, catNombre, prdPresentacion, prdStock, prdImagen 
    FROM productos p, marcas m, categorias c 
    WHERE p.idMarca=m.idMarca 
    AND p.idCategoria=c.idCategoria";
    $resultado=mysqli_query($link,$sql);
}

function subirArchivo(){
    $prdImagen="noDisponible.jpg";
    //valor si no envian un archivo
    if($_FILES["prdImagen"]["error"]==0){
        //verifica si el usuario subio una imagen sin errores
        $dir="productos/"; // configura el directorio para las imagenes
        $temp=$_FILES["prdImagen"]["tmp_name"]; // es el nombre temporal de la imagen
        $ext=pathinfo($_FILES["prdImagen"]["name"]);// variable para la extension de la imagen
        $prdImagen=time().".".$ext["extension"];//timestamp + extension del archivo
        move_uploaded_file($temp, $dir.$prdImagen);
        // mueve le archivo subido al directorio definido en $dir con el nombre armado en $prdImagen
    }
    return $prdImagen;
}

function agregarProducto(){
    $prdNombre=$_POST["prdNombre"];
    $prdPrecio=$_POST["prdPrecio"];
    $idCategoria=$_POST["idCategoria"];
    $idMarca=$_POST["idMarca"];
    $prdPresentacion=$_POST["idPresentacion"];
    $prdStock=$_POST["prdStock"];
    $prdImagen=$_POST["prdImagen"];
    
    $link=conectar();
    $sql="INSERT INTO productos VALUE
            (
                DEFAULT,
                '$prdNombre',
                '$prdPrecio',
                '$idMarca',
                '$idCategoria',
                '$prdPresentacion',
                '$prdStock',
                '$prdImagen',
            )";
    $resultado=mysqli_query($link, $sql);
    return $resultado;
}

function verProductosPorID(){
    $idProducto=$_GET["idProducto"];
    $link=conectar();
    $sql="SELECT idProductos, prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen FROM productos WHERE idProductos='$idProducto'";
    $resultado=mysqli_query($link, $sql);
    $producto=mysqli_fetch_assoc($resultado);
    return $producto;
}

function eliminarProducto(){
    $idProducto=$_POST['idProducto'];
    $link=conectar();
    $sql="DELETE from productos WHERE idProducto='$idProducto'";
}
?>