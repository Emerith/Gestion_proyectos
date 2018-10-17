<form class="needs-validation" action="<?php echo URL?>formato/crear" method="post" autocomplete="off">
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>

        <div class="col-md-4 mb-3">
            <label for="ap_p">Apellido Paterno</label>
            <input type="text" class="form-control" id="Apellido_patern" name="apellido_patern" placeholder="Apellido Paterno">
        </div>

        <div class="col-md-4 mb-3">
            <label for="ap_p">Apellido Paterno</label>
            <input type="text" class="form-control" id="Apellido_matern" name="apellido_matern" placeholder="Apellido Materno">
        </div>
    </div>

    <div class="form-row">

        <div class="col-md-4 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>

        <div class="col-md-4 mb-3">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
        </div>
    </div>

    <button class="btn btn-success" type="submit" name="btn">Registrar</button>

</form>
