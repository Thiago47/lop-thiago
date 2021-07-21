<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>CADASTRO</title>
  </head>
  <body>
  	<!-- menu de navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">CADASTRO</a>
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
					  <!-- 1 parte -->
					  <div class="col-lg-12">
						<div class="p-5">
						  <div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">REGISTRA NO BANCO DE DADOS</h1>
						  </div>
						  <!-- Formulário de Registro (PHP: processa.php) -->
						  <form name="form" class="text-center user needs-validation" method="POST" action="processa.php">
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label>CNPJ</label>
									<input type="text" name="cnpj" maxlength="14" class="form-control" placeholder="cnpj:" required>
								</div>
								<div class="col-sm-6">
									<label>CÓDIGO</label>
									<input type="text" name="codigo" maxlength="5" class="form-control" placeholder="código:" required>
								</div>
							</div>
							<br>
							<div class="form-group">
							  	<div class="col-sm-12 mb-3 mb-sm-0">
								  	<label>EMPRESA</label>
									<input type="text" name="empresa" maxlength="255" class="form-control" required>
							  	</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label>CEP</label>
									<input type="text" name="cep" maxlength="8" class="form-control" placeholder="cep:" required>
								</div>
								<div class="col-sm-6">
									<label>BAIRRO</label>
									<input type="text" name="bairro:" maxlength="40" class="form-control">
								</div>
							</div>
							<br>
							<div class="form-group">
							  	<div class="col-sm-12 mb-3 mb-sm-0">
								  	<label>ENDEREÇO</label>
									<input type="text" name="endereco" maxlength="255" class="form-control" required>
							  	</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="col-sm-9 mb-3 mb-sm-0">
									<label>MUNICÍPIO</label>
									<input type="text" name="municipio" maxlength="50" class="form-control" placeholder="município:" required>
								</div>
								<div class="col-sm-3">
									<label>UF</label>
									<input type="text" name="uf" maxlength="2" class="form-control" placeholder="UF:" required>
								</div>
							</div>
							<br>
							<div class="form-group">
							  	<div class="col-sm-12 mb-3 mb-sm-0">
								  	<label>COMPLEMENTO</label>
									<input type="text" name="complemento" maxlength="20" class="form-control">
							  	</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="col-sm-7 mb-3 mb-sm-0">
									<label>IE</label>
									<input type="text" name="ie" maxlength="15" class="form-control" placeholder="inscrição estadual:" required>
								</div>
								<div class="col-sm-5">
									<label>IM</label>
									<input type="text" name="im" maxlength="10" class="form-control" placeholder="inscrição municipal:" required>
								</div>
							</div>
							<br>
							<div class="form-group">
							  	<div class="col-sm-12 mb-3 mb-sm-0">
								  	<label>SITE</label>
									<input type="text" name="sites" maxlength="255" class="form-control">
							  	</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label>EMAIL PRINCIPAL</label>
									<input type="email" name="email1" maxlength="100" class="form-control" placeholder="email 1" required>
								</div>
								<div class="col-sm-6">
									<label>EMAIL SECUNDÁRIO</label>
									<input type="email" name="email2" maxlength="100" class="form-control" placeholder="email 2">
								</div>
							</div>
							<br>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<label>TELEFONE</label>
									<input type="text" name="telefone" maxlength="14" class="form-control" placeholder="" required>
								</div>
								<div class="col-sm-6">
								<label>SITUAÇÃO</label>
									<select class="form-select" name="situacao">
										<option value="ativo" selected>ATIVO</option>
										<option value="inativo">INATIVO</option>
										<option value="avulso">AVULSO</option>
									</select>
								</div>
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