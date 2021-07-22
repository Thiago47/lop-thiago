<?php

include("config.php");

$consulta = "SELECT * FROM cliente"; 
$resultado_usuarios = mysqli_query($conn, $consulta);

//parte do modal
$id2 = 5;
$consulta2 = "SELECT * FROM cliente WHERE id = '$id2'";
$resultado_usuarios2 = mysqli_query($conn, $consulta2);
$imprimir = mysqli_fetch_assoc($resultado_usuarios2);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LISTA</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <a class="nav-link" href="index.php">REGISTRO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="lista.php">LISTA DE CADASTRO</a>
              </li>
            </ul>
          </div>
    </nav>
  <table class="striped table table-hover table-info">
    <thead>
      <tr >
      <th scope="col">ID</th>
      <th scope="col">CNPJ</th>
      <th scope="col">CEP</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">SITUAÇÂO</th>
      <th class="text-center">DETALHES</th>
      <th class="text-center">EDITAR</th>
      <th class="text-center">EXCLUIR</th>
      </tr>
    </thead>
    <tbody>
    <!-- registro do banco de dados em php-->
    <?php while($row_usuario = $resultado_usuarios->fetch_array()) { ?>
      <tr>
      <th scope="row"><span><?php echo $row_usuario['id']; ?></span></th>
      <td><span><?php echo $row_usuario['cnpj']; ?></span></td>
      <td><span ><?php echo $row_usuario['cep']; ?></span></td>
      <td><span ><?php echo $row_usuario['telefone']; ?></span></td>
      <td><span ><?php echo $row_usuario['situacao']; ?></span></td>
      <!-- opções de editar e excluir com php-->
      
      <td class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button></td>
      <td class="text-center"><a type="button" class="btn btn-info" href="editar.php?id= <?php echo $row_usuario['id']; ?>">Editar</a></td>
      <td class="text-center"><a type="button" class="btn btn-danger" href="confirmacao.php?id= <?php echo $row_usuario['id']; ?>">Delete</a></td>
      </tr>
      <?php } ?> 
    </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">DETALHES</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <h5>EMPRESA</h5>
          <p><?php echo $imprimir['empresa']; ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>