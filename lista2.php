<?php

include("config.php");

$consulta = "SELECT * FROM pessoas"; 
$resultado_usuarios = mysqli_query($conn, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
      <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">DATA DE NASCIMENTO</th>
      <th scope="col">RG</th>
      <th scope="col">CPF</th>
      <th class="text-center">EDITAR</th>
      <th class="text-center">EXCLUIR</th>
      </tr>
    </thead>
    <tbody>
    <!-- registro do banco de dados em php-->
    <?php while($row_usuario = $resultado_usuarios->fetch_array()) { ?>
      <tr>
      <th scope="row"><span><?php echo $row_usuario['id']; ?></span></th>
      <td><span><?php echo $row_usuario['nome']; ?></span></td>
      <td><span ><?php echo date('d/m/Y', strtotime($row_usuario['nascimento'])); ?></span></td>
      <td><span ><?php echo $row_usuario['rg']; ?></span></td>
      <td><span ><?php echo $row_usuario['cpf']; ?></span></td>
      <!-- opções de editar e excluir com php-->
      <td class="text-center"><a type="button" class="btn btn-info" href="editar.php?id= <?php echo $row_usuario['id']; ?>">Editar</a></td>
      <td class="text-center"><a type="button" class="btn btn-danger" href="confirmacao.php?id= <?php echo $row_usuario['id']; ?>">Delete</a></td>
      </tr>
      <?php } ?> 
    </tbody>
    </table>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>