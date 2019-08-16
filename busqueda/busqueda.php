<?php
include("../partials/header.php");
?>
    <div class="container mt-3">
        <div class="row">

            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Busqueda 1
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="sqlbusqueda1.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cédula cliente</label>
                                <input type="number" name="cedula" id="cedula" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="buscar">
                                <a href="busqueda.php" class="btn btn-success">Reiniciar</a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Busqueda 2
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="sqlbusqueda2.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="codigoEstampado">Codigo estampado</label>
                                <input type="number" name="codigo" id="codigo" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="buscar">
                                <a href="busqueda.php" class="btn btn-success">Reiniciar</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


    </div>
    <?php
    include("../partials/footer.php");
    ?>
