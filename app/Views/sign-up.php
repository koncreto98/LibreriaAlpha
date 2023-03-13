<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box">
                    <div><img loading="lazy" src="<?= base_url() ?>assets/img/books.svg" alt="icon" width="280px" height="100px" > </div>
                    <header class="sign-title">Regístrate</header>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Usuario"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo Electrónico"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Repetir Contraseña"/>
                    </div>
                    <button type="submit" class="btn btn-rounded btn-success sign-up">Registrarse</button>
                    <p class="sign-note">¿Ya tienes una cuenta? <a href="/">Iniciar Sesión</a></p>
                    <!--<button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </form>
            </div>
        </div>
    </div><!--.page-center-->

<script src="<?= base_url()?>assets/js/lib/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/lib/tether/tether.min.js"></script>
<script src="<?= base_url()?>assets/js/lib/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/plugins.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function(){
                setTimeout(function(){
                    $('.page-center').matchHeight({ remove: true });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                },100);
            });
        });
    </script>
<script src="<?= base_url()?>assets/js/app.js"></script>
</body>