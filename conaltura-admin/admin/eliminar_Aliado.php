
     <?php
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $consulta = "SELECT * FROM aliados WHERE id = ?";
        $resultado = $con->prepare($consulta);
        $resultado->execute(array($id));
        while ($field = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $imagen = $field['imagen'];
        }
        unlink($imagen);

        $qry = "DELETE FROM aliados WHERE id = ?";
        $resultado = $con->prepare($qry);
        $resultado->execute(array($id));
        // $sql = mysqli_query($con, $qry);

        if (!$resultado) {
            echo 'No se logro realizar la peticion';
        } else {
            echo  "<script language='javascript'>
                    alert('Aliado Eliminado con Éxito');
                    window.location.href='index.php'
                    </script>";
            // header("Location: index.php");
        }
        ?>
    
    
