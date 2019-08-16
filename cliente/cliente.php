<?php
include("../partials/header.php");
?>
<div class="container mt-3">
  <div class="row">

    <div class="col-6 px-2">
      <div class="card">
        <div class="card-header">
          Nueva persona
        </div>
        <div class="card-body">
          <!--formulario para insertar una persona mediante el metodo post-->
          <form action="insertClient.php" class="form-group" method="post">
            <div class="form-group">
              <label for="cedula">Cédula</label>
              <input type="number" name="cedula" id="cedula" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Celular</label>
              <input type="number" name="telefono" id="telefono" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Correo electronico</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Dirección</label>
              <input type="text" name="direccion" id="direccion" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Tipo de persona</label>
              <select name="tipo" id="tipo" class="form-control">
                <option value="CLIENTE">CLIENTE</option>
                <option value="DISENADOR">DISEÑADOR</option>
              </select>
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
            <th scope="col">Tipo</th>
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
                <td><?=$fila['Nombre'];?></td>
                <td><?=$fila['Email'];?></td>
                <td><?=$fila['telefono'];?></td>
                <td><?=$fila['Direccion'];?></td>
                <td><?=$fila['tipoP'];?></td>
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
<?php
include("../partials/footer.php");
?>
