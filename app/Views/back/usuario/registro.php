<section class="formulario">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <h2 class="text-center mb-4">Formulario de Registro</h2>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?=csrf_field();?>
                    <?=csrf_field();?>
                    <?php if(!empty(session()->getFlashdata('fail'))):?>
                        <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
                    <?php endif?>
                        <?php if(!empty(session()->getFlashdata('success'))):?>
                            <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
                    <?php endif?>
                    <div class="form-group mb-3">
                        <label for="firstName" class="row content-left derecha">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="firstName" placeholder="Ingresa tu nombre">
                        <!-- Error -->
                         <?php if ($validation->getError('nombre')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombre'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="lastName" class="row content-left derecha">Apellido</label>
                        <input name="apellido" type="text" class="form-control" id="lastName" placeholder="Ingresa tu apellido">
                        <!-- Error -->
                        <?php if ($validation->getError('apellido')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('apellido'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="row content-left derecha">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                        <!-- Error -->
                        <?php if ($validation->getError('email')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="row content-left derecha">Usuario</label>
                        <input name="usuario" type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario">
                        <!-- Error -->
                        <?php if ($validation->getError('usuario')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('usuario'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="row content-left derecha">Contraseña</label>
                        <input name="pass" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                        <!-- Error -->
                        <?php if ($validation->getError('pass')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('pass'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>