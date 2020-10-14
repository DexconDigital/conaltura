<?php
    require_once('controllers/conexion.php');
    $codigo = 0;
    $codigo = $_GET['co'];

    $link = Conect();

    $sql = "SELECT * FROM noticias WHERE id = ?";
    $resultado=$link->prepare($sql);
    $resultado->execute(array($codigo));
    // $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    // while ($field = mysqli_fetch_array($result)) {
       while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
        // $nombre = $field['nombre'];
        $nombre = "{$field['nombre']}";
        // $id = $field['id'];
        $id = "{$field['id']}";
        // $descripcion = $field['descripcion'];
        $descripcion = "{$field['descripcion']}";
        // $imagen = $field['imagen'];
        $imagen = "{$field['imagen']}";
        // $archivo = $field['archivo'];
        $archivo="{$field['archivo']}";
        // $noticia = $field['noticia'];
        $noticia = "{$field['noticia']}";
        // $fecha_complete = $field['fecha'];
        $fecha_complete ="{$field['fecha']}";
    }
    $comparador='conaltura-admin/admin/';
    $ruta_imagen='conaltura-admin/admin/'.$imagen;
    $ruta_archivo= $comparador.$archivo;

?>  