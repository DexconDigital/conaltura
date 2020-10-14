<?php
$page = 'Administrador';
$nombre_inmobiliaria = 'Conaltura Inmobiliaria';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/icon/favicon.jpg.png" type="image/x-icon">
    <link rel="stylesheet" href="css/admin_master.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body onload="deshabilitaRetroceso()">

    <div class="wrap_bg">
        <div id="main" class="login_wrap singUpActive">
            <div class="login_question_wrap">
                <div class="question_login ">
                    <h2 class="title">¿ No recuerdas tu contraseña ?</h2>
                    <p>Para restablecer tu contraseña debes hacer click en el boton <strong>Restablecer mi contraseña</strong>
                    </p>
                    <a href="https://www.dexcondigital.com/solicitud-clave" target="_blanck" id="loginBtn" class="btn btn_rounded">Restablecer mi contraseña</a>
                </div>
                <div class="action_singUp">
                    <div class="main">
                        <form action="" id="formlg">
                            <a href="../index.php">
                                <legend class="title" style="text-align: center"><img src="img/logo.png" width="80%" alt=""></legend>
                            </a>
                            <div class="input_block">
                                <div class="input_wrap">
                                    <input type="text" id="sing_name" class="input" name="usuariolg" placeholder="Usuario" required>
                                    <label for="sing_name" class="label_name"></label>
                                </div>
                                <div class="input_wrap">
                                    <input type="password" aria-hidden="true" id="pwd" name="passlg" class="input" placeholder="Contraseña" required>
                                    <label for="sing_pass" class="label_pass" type="button" id="eye"></label>
                                </div>
                            </div>

                            <input type="submit" class="btn botonlg btn_red" value="Iniciar Sesión"></input>
                            <!-- <input type="submit" value="Entrar" class="btn btn_red"> -->
                        </form>
                    </div>
                </div>

            </div>
            <div class="login_action_wrap ">
            </div>
        </div>
    </div>
    
</body>
<script src="popper/popper.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/login.js"></script>
<!--  Plugin Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/admin_master.js"></script>
<!-- <script src="js/script.js"></script> -->
<!-- valida session -->
<script>
    function deshabilitaRetroceso() {
        window.location.hash = "no-back-button";
        window.location.hash = "Again-No-back-button" //chrome
        window.onhashchange = function() {
            window.location.hash = "no-back-button";
        }
    }
</script>


</html>