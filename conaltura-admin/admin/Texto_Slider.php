 
 <?php
  
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $query ="SELECT * FROM texto_slider WHERE id = $id";
        $resultado=$con->prepare($query);
        $resultado->execute(array());
        // $sql = mysqli_query($con, $query);
        // $res = json_encode($sql->fetch_array(MYSQLI_ASSOC));
        $resTxtSlider = json_encode($resultado->fetch(PDO::FETCH_ASSOC));
        echo($resTxtSlider);

    ?> 
   
   

    
    
    


 