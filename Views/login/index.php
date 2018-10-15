<div class="container">
    <h1 class="form-heading">login Form</h1>
    <div class="login-form">
        <div class="main-div">
            <div>
                <h5 class="red-text">
                    <?php echo isset($_SESSION["error_login"])?$_SESSION["error_login"]:""?>
                </h5>
            </div>
            <div class="panel">
                <h6>Ingresa tu correo y contraseña, por favor</h6>
            </div>
            <form id="login" method="post" action="<?php echo URL?>login/verify" autocomplete="off">

                <div class="form-group">


                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">

                </div>

                <div class="form-group">

                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">

                </div>
                <div class="forgot">
                </div>
                <button type="submit" class="btn btn-primary" name="boton">Login</button>

            </form>
        </div>
    </div>
</div>

