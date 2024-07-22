<section class="formulario">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h2 class="text-center mb-4">Inicio de Sesión</h2>
                <!-- Mensaje de Error -->
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg')?>
                    </div>
                <?php endif ?>
                <form method="post" action="<?php echo base_url('/enviarlogin')?>">
                    <div class="form-group mb-3">
                        <label for="username" class="row content-left derecha">Email</label>
                        <input name= "email" type="text" class="form-control" id="username" placeholder="Ingresa tu email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="row content-left derecha">Contraseña</label>
                        <input name="pass" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mr-2">Ingresar</button>
                        <button href="<?php echo base_url('registro'); ?>" type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                    <div class="form-group">
                        <p class="fp">¿Aún no te has registrado? <a href="<?php echo base_url('registro'); ?>">Regístrese AQUÍ</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>