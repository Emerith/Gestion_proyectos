<div class="row justify-content-md-center">
    <h2>Bienvenido </h2>
</div>
<div class="row justify-content-md-center">
    <h3>	<?php echo $_SESSION["email"];
        $fechass="Conteo Dia: ".date("d")."-".date("m")."-".date("Y");
        ?> </h3>

</div>
<br>
<div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Página principal</h5>
                <p class="card-text"><?php echo $fechass;?></p>
                <br>
                <?php
                $dato=$datos[0];

                while ($row=mysqli_fetch_array($dato)){
                    echo "<p>{$row[0]}</p>";
                }
                ?>
                <br>
<!--                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_civicos">Ver mas fechas</button>-->
            </div>
        </div>
    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Culturales</h5>
                <p class="card-text"><?php echo $fechass;?></p>
                <br>
                <?php
                $dato=$datos[1];

                while ($row=mysqli_fetch_array($dato)){
                    echo "<p>{$row[0]}</p>";
                }
                ?>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_culturales">Ver mas fechas</button>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Cívicos</h5>
                <p class="card-text"><?php echo $fechass;?></p>
                <br>
                <?php
                $dato=$datos[3];

                while ($row=mysqli_fetch_array($dato)){
                    echo "<p>{$row[0]}</p>";
                }
                ?>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_civicos">Ver mas fechas</button>
            </div>
        </div>
    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Eventos Deportivos</h5>
                <p class="card-text"><?php echo $fechass;?></p>
                <br>
                <?php
                $dato=$datos[2];

                while ($row=mysqli_fetch_array($dato)){
                    echo "<p>{$row[0]}</p>";
                }
                ?>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_deportivos">Ver mas fechas</button>
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-sm-5">

    </div>
    <div class="col-sm-2.5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">Registro de Eventos</h5>
                <p class="card-text <?php echo URL?>Empleado_bienvenido/graficar">

                </p>
                <a href="<?php echo URL?>Empleado_bienvenido/print_pdf" target="_blank" class="btn btn-primary">Reporte</a>
                <a class="btn" style="background: white;" disabled="true"></a>
                <a href="#!" id="graficar_habitaciones" class="btn btn-primary btn-circle">Gráfica</a>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
    </div>
</div>
<br>

<div class="modal" tabindex="-1" role="dialog" id="modal_grafica">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gráfica de eventos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal_civicos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center">Conteo Total Eventos Cívicos</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tipo de Eventos</th>
                            <th scope="col">Conteo por Día</th>
                            <th scope="col">Fecha de Visitas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            $dato=$datos[4];

                            while ($row=mysqli_fetch_array($dato)){
                                echo "<tr>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['cuenta']}</td>
                        <td>{$row['fecha']}</td>
                        </tr>";
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_culturales">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center">Conteo Total Eventos Culturales</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tipo de Eventos</th>
                            <th scope="col">Conteo por Día</th>
                            <th scope="col">Fecha de Visitas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            $dato=$datos[5];

                            while ($row=mysqli_fetch_array($dato)){
                                echo "<tr>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['cuenta']}</td>
                        <td>{$row['fecha']}</td>
                        </tr>";
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_deportivos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center">Conteo Total Eventos Deportivos</h4>
                <div class="divider"></div>
                <code class=" language-markup"><!--********************************--></code>
            </div>
            <div class="modal-body">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Tipo de Eventos</th>
                            <th scope="col">Conteo por Día</th>
                            <th scope="col">Fecha de Visitas</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            $dato=$datos[6];

                            while ($row=mysqli_fetch_array($dato)){
                                echo "<tr>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['cuenta']}</td>
                        <td>{$row['fecha']}</td>
                        </tr>";
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#graficar_habitaciones").click(function(){
            $.get("<?php echo URL?>Empleado_bienvenido/graficar",function(res){
                $("#modal_grafica .modal-content p").empty().append(res);
                $("#modal_grafica").modal('show');
            });
        });
    })
</script>


