<?php 
require_once "header.php";
if (isset($_POST["registry"])) {
    if(!empty($_POST['correo']) && !empty($_POST['contrasena']))
    {
        //die();
        $nombre = isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
        $correo = isset( $_POST['correo'] ) ? $_POST['correo'] : '';
        $pass = isset( $_POST['contrasena'] ) ? $_POST['contrasena'] : '';
        $direc = isset( $_POST['direccion'] ) ? $_POST['direccion'] : '';

        addC( $nombre, $correo, $pass, $direc );
    }
    print "<script>window.setTimeout(function() { window.location = 'index.php' }, 3000);</script>";
}

if (isset($_POST["entrar"])) {
    if(!empty($_POST['correo_l']) && !empty($_POST['contrasena_l']))
    {
        $correo = isset( $_POST['correo_l'] ) ? $_POST['correo_l'] : '';
        $pass = isset( $_POST['contrasena_l'] ) ? $_POST['contrasena_l'] : '';

        entrar($correo, $pass);
    }
    print "<script>window.setTimeout(function() { window.location = 'index.php' }, 3000);</script>";
}
?>

<link href="CSS/login.css" rel="stylesheet">
        <!-- Registration modal-->
        <div class="modal" tabindex="-1" role="dialog" id="register" style="top: 5%; z-index: 9999">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="registro">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Correo</label>
                                    <input type="email" name="correo" class="form-control" id="inputEmail4" placeholder="Correo" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" id="inputPassword4" placeholder="Contraseña" value="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputName4">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="inputName4" placeholder="Nombre" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Dirección</label>
                                <textarea name="direccion" class="form-control" rows="2" type="text" value="" placeholder="" value=""></textarea>
                            </div>
                            <input style="margin: 0 5px;" type="submit" name="registry" class="btn btn-secondary" value="Registrarme">
                            <input style="margin: 0 5px;" type="reset" class="btn btn-secondary">
                            <input style="margin: 10px 5px;" type="reset" class="btn btn-secondary" data-dismiss="modal" value="Cerrar" id="reset">
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-banner d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Entrar</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Nuev@ en la tienda?</h2>
                                <p>Compra con nosotros y forma parte de nuestra familia</p>
                                <a href="#" class="btn_3" data-toggle="modal" data-target="#register">Crear cuenta</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Bienvenido de vuelta!<br>
                                    Iniciar sesión</h3>
                                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="correo_l" value=""
                                            placeholder="Correo">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="contrasena_l" value=""
                                            placeholder="Contraseña">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <button type="submit" name="entrar" class="btn_3">Entrar</button>
                                        <!-- <a class="lost_pass" href="#">forget password?</a> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
<?php require_once "footer.php";?>