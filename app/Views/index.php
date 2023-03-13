<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div class="sign-avatar">
                        <img src="<?= base_url() ?>/assets/img/avatar-sign.png" alt="icon">
                    </div>
                    <header class="sign-title">Iniciar Sesión</header>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in" />
                            <label for="signed-in">Recuérdame</label>
                        </div>
                        <div class="float-right reset">
                            <a href="reset">¿Olvidaste tu Contraseña?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-rounded">Inicias Sesión</button>
                    <p class="sign-note">¿Nuevo en nuestro sitio web? <a href="registrarse">Regístrate</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->
</body>
