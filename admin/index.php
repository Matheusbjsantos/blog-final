<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!--css-->
	<link rel="stylesheet"  href="style-index.css">
</head>
<body class="text-center">
<main class="form-login">
	<div class="logar">
	<form method="post" action="logar.php">
		<img class="mb-4" src="../imagens/programador.png" alt="" width="70" height="70">
		<h3 class="h3">painel administrativo</h3>
		<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Login/Usuario</label>
  <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="login">
</div>
<div class="mb-3 ">
  <label for="formGroupExampleInput2" class="form-label">senha</label>
  <input type="text"  class="form-control" id="formGroupExampleInput2" name="senha" placeholder="senha">
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Logar</button>
  </div>
		
	</form>

	</div>
</main>
</body>
</html>