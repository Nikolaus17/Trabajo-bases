<!-- En esta pagina puede encontrar mas informacion acerca de la estructura de un documento html 
    http://www.iuma.ulpgc.es/users/jmiranda/docencia/Tutorial_HTML/estruct.htm-->
    <!DOCTYPE html>
<html lang="en">
<!--cabezera del html -->

<head>
    <!--configuraciones basicas del html-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--titrulo de la pagina-->
    <title>Clientes</title>
    <!--CDN de boostraps: Libreria de estilos SCSS y CSS para darle unas buena apariencia a la aplicacion
    para mas informacion buscar documentacion de boostraps en: https://getbootstrap.com/docs/4.3/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CDN de forntawesome: Libreria de estilos SCSS y CSS incluir icononos y formas 
     para mas informacio : https://fontawesome.com/start-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <!--Barra de navegacion-->
    <ul class="nav">
        <li class="nav nav-item">
            <a class="nav-link " href="../index.html">inicio</a>
        </li>
        <li class="nav nav-pills">
            <a class="nav-link active" href="../cliente/cliente.php">Cliente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../detalles/detalle.php">Detalles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../busqueda/busqueda.php">Busquedas</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="../consultas/consulta.php">Consultas</a>
        </li>
    </ul>
    <div class="container mt-3">
        <div class="row">
           
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Nuevo cliente
                    </div>
                    <div class="card-body">
                        <!--formulario para insertar una persona mediante el metodo post-->
                        <form action="insertClient.php" class="form-group" method="post">
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" name="cedula" id="cedula" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="number" name="telefono" id="telefono" class="form-control">
                            </div>
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="" for="">Correo electrónico</label>
                                    <input type="text" class="form-control mb-2" name="email" id="email" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <label class="" for="inlineFormInputGroup"></label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                        </div>
                                        <input type="text" class="form-control" name="correo" id="inlineFormInputGroup" placeholder="example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Dirección</label>
                                <input type="text" name="direccion" id="direccion" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="insertar">
                                <a href="cliente.php" class="btn btn-success">Reiniciar</a>
                            </div>
                            

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-6 px-2">

                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('selectClient.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['CC'];?></td>
                            <td><?=$fila['nombre'];?></td>
                            <td><?=$fila['email'];?></td>
                            <td><?=$fila['celular'];?></td>
                            <td><?=$fila['direccion'];?></td>
                            <td>
                                <form class="d-inline " action="deleteClient.php" method="POST">
                                    <input id="d1" name="d1" type="hidden" value=<?=$fila['CC'];?>>
                                    <input type="submit" class="far fa-trash-alt" value="eliminar">
                                </form>
                            </td>
                            
                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                    </tbody>
                </table>
                <button onclick="window.location.href='deleteAllClient.php'" class="btn-primary">Borrar todo</button>

            </div>
        </div>


    </div>

</body>

</html>