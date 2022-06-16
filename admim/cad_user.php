<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style-index.css ">
	<title>Login</title>
	<link rel="stylesheet" href="style-cad.css">
</head>
<body>
	
<body class="text-center">
	<main class="form-login">
		<div class="container">

			<form method="POST" action="cad_userOK.php">
				<h3 class="h3">
					Cadastrar
				</h3>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Nome</label>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex:.Rodrigo" name="nome">
				</div>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex:.Rodrigo@gmail.com" name="login">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Senha</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ex:.12345" name="senha">
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</form>
		</div>
	</main>

</body>
</body>
</html>