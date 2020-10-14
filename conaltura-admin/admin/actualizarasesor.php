<?php $page = "Lista de Asesores";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$id = $_GET["id"];
$con = Conect();
$qry = "SELECT * FROM asesores where id ='$id' and id_inmobiliaria = 12";
$sql = mysqli_query($con, $qry);
$res =  mysqli_fetch_array($sql);
?>
<style>
    .contenedor_color {
        background-color: white;
    }

    .conct_botton {
        text-align: center;

    }

    .botonarchivo {
        margin-left: 25.66667%;
    }

    input[type]:focus {
        border-color: #B58D10
         !important;
        box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px #B58D10
         !important;
        outline: 0 none;
    }
    .color_botton{
        background-color: #002230 ;
        color: white;
    }
    .color_botton:hover{
        color: white;
    }
    .boton_imagen {
        margin-left: 40%;
        margin-top: 5%;
    }
    
</style>
<div class="container contenedor_color">
    <div class="row justify-content-center">
        <div class="col-9" style=" margin-top: 27px;">
            <h2 class="text-center mb-3">Actualizar asesor</h2>
            <form method="post" action="update_asesor.php" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" value="<?php echo $res[0]; ?>">
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nombre y Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom_asesor" id="nom_asesor" value="<?php echo $res[1]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Celular</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cel_asesor" id="cel_asesor" value="<?php echo $res[2]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Correo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cor_asesor" id="cor_asesor" value="<?php echo $res[3]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Cargo Actual:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $res[7]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción:</label>
                    <div class="col-sm-9" style="margin-left: 8%;">
                        <textarea name="descrip" id="descrip"><?php echo $res[8];?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Imagen Actual</label>
                    <div class="col-sm-9">
                        <img src="<?php echo $res[4]; ?>" alt="" width="200px" height="auto">
                    </div>
                    <div class="col-sm-8">
                        <input type="file" class="form-control-file boton_imagen" name="imagen" id="imagen" accept="image/*">
                    </div>
                </div>
                <input type="hidden" id="fecha" name="fecha">
                <div class="form-group row">
                    <div class="col-8 offset-2 conct_botton mt-4">
                        <button class="btn color_botton">Actualizar Asesor</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/layoutFooter.php'; ?>