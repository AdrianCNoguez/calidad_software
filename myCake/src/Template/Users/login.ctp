<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Bienvenido</b>  </a>
    </div>
    <!-- /.login-logo -->


    <div class="login-box-body">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
        <p class="login-box-msg">Inicia sesión para comenzar...</p>


        <form action="../../index2.html" method="post">
            <fieldset>

                <div class="form-group has-feedback">

                    <?php echo $this->Form->control('email', ['class' => 'form-control input-lg', 'placeholder' => 'Correo electrónico', 'label' => false, 'required'])
                    ;?>

                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <?php echo $this->Form->control('password', ['class' => 'form-control input-lg', 'placeholder' => 'Contraseña', 'label' => false, 'required']) ;?>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-8" >
                        <?= $this->Form->button(__('Entrar'),['class'=>'btn btn-primary btn-block btn-flat'],
                            ['controller' => 'Users', 'action' => 'index']) ?>

                        <?= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block']) ?>
                    </div>
                    <!-- /.col -->
                </div>
            </fieldset>




            <!-- /.social-auth-links -->
            <div class="checkbox icheck">

                <label>
                    <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
                </label>

            </div>
            <a href="#">I forgot my password</a><br>

            <?=$this->Form->end() ?>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>


</body>

