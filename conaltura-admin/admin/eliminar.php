
     <?php
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $consulta = "SELECT * FROM noticias WHERE id = ?";
        $resultado = $con->prepare($consulta);
        $resultado->execute(array($id));
        // $result = mysqli_query($con, $consulta);
        // while ($field = mysqli_fetch_array($resultado)) {
        while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $imagen = $field['imagen'];
            $archivo = $field['archivo'];
        }
        unlink($archivo);
        unlink($imagen);

        $qry = "DELETE FROM noticias WHERE id = ?";
        $resultado = $con->prepare($qry);
        $resultado->execute(array($id));
        // $sql = mysqli_query($con, $qry);

        if (!$resultado) {
            echo 'No se logro realizar la peticion';
        } else {

            //  header("location: index.php");
            echo  "<script language='javascript'>
            alert('Noticia eliminada con Éxito');
            window.location.href='index.php'
        </script>";
        }
        ?>
    
    
