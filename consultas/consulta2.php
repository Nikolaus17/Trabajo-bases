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
        <li class="nav nav-item">
            <a class="nav-link " href="../cliente/cliente.php">Cliente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../suscripcion/suscripcion.php">Tu suscripcion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="../busqueda/busqueda.php">Busquedas</a>
        </li>
        <li class="nav-pills">
                <a class="nav-link active" href="./consulta.php">Consultas</a>
            </li>
    </ul>
    <div class="container mt-3">
        <div class="row">
           
            <div class="col-6 px-2">
                <div class="card">
                    <div class="card-header">
                        Consultas
                    </div>
                    <a href="consulta1.php" class="btn btn-success">Consulta 1</a>
                    <a href="consulta2.php" class="btn btn-warning">Consulta 2</a>
                    <a href="consulta3.php" class="btn btn-danger">Consulta 3</a>
                    <a href="consulta4.php" class="btn btn-danger">Consulta 4</a>
                </div>
            </div>

            <div class="col-6 px-2">

                <table class="table border-rounded">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Cedula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require('sqlconsulta2.php');
                        if($result){
                            foreach ($result as $fila){
                        ?>
                        <tr>
                            <td><?=$fila['cc'];?></td>
                            
                        </tr>
                        <?php                    

                                }
                            }
                            
                            ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</body>

</html>