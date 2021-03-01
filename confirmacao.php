<?php

include("config.php");
$id2 = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$consulta = "SELECT * FROM pessoas WHERE id = '$id2'";
$resultado_usuarios = mysqli_query($conn, $consulta);
$imprimir = mysqli_fetch_assoc($resultado_usuarios);
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>CONFIRMAÇÃO</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <a class="nav-link" href="index.php">REGISTRO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lista2.php">LISTA DE CADASTRO</a>
              </li>
            </ul>
          </div>
    </nav>
    <div class="container">

		<div class="row justify-content-center">
			
			<div class="col-xl-6 col-lg-6 col-md-9">
			
				<div class="card o-hidden border-0 shadow-lg my-5">
				  <div class="card-body p-0">
					<!-- Linha do corpo do cartão -->
					<div class="row">
					  <!-- Caso o usuário desistir de excluir o registro -->
					  <div class="col-lg-12">
						<div class="p-5">
						  <div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">DESEJA MESMO DELETAR O REGISTRO</h1>
						  </div>
						  <div class="text-center user needs-validation">

						  	<a type="button" class="btn btn-warning" href="lista2.php">CANCELAR</a>
						  	<a type="button" class="btn btn-danger" href="delete.php?id= <?php echo $imprimir['id']; ?>">DELETE</a>

						  </div>
			
						</div>
						</div>
						
						
					</div>
					</div>
				</div>
			
			</div>
		</div>
			
	</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>