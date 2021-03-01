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
    <title>EDITAR</title>
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
					<!-- Nested Row within Card Body -->
					<div class="row">
					  <!-- 1 parte -->
					  <div class="col-lg-12">
						<div class="p-5">
						  <div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">ATUALIZAR</h1>
						  </div>
						  <form name="form" class="text-center user needs-validation" method="POST" action="atualizar.php">

						  	<input type="hidden" name="id" value="<?php echo $imprimir['id']; ?>" >

							<div class="form-group">
							  <input type="text" name="nome" maxlength="50" class="form-control" placeholder="Nome Artístico" value="<?php echo $imprimir['nome']; ?>" required>
							</div>
							<br>
							<div class="form-group row">
							  <div class="col-sm-6 mb-3 mb-sm-0">
								  <label>DATA DE NASCIMENTO</label>
								<input type="date" name="nascimento" class="form-control" value="<?php echo $imprimir['nascimento']; ?>" required>
							  </div>
							  <div class="col-sm-6">
								  <label>RG</label>
								<input type="tel" name="rg" maxlength="10" pattern="[0-9]{8}-[0-9]{1}" class="form-control" placeholder="RG EXEMPLO: 00000000-0" value="<?php echo $imprimir['rg']; ?>" required>
							  </div>
							</div>
							<br>
							<div class="form-group">
								<label>CPF</label>
							  <input type="tel" name="cpf" maxlength="14" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" class="form-control" placeholder="CPF EXEMPLO: 000.000.000-00" autocomplete="off" value="<?php echo $imprimir['cpf']; ?>" required aria-label="readonly input example" readonly >
							</div>
							<br>
							<input class="btn btn-success btn-user btn-block" type="submit" name="registraform">
						  </form>
			
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