<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<main>
	<div class="container">
		<form action="envia.php" method="POST" enctype="multipart/form-data">
		<form>
  <div class="mb-3">
    <label for="exampleInputTitle1" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="exampleInputTitle1" aria-describedby="TitleHelp" name="title" required>
    <div id="TitleHelp" class="form-text">Titulo da noticia</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputDate1" class="form-label">Data</label>
    <input type="date" class="form-control" id="exampleInputDate1" name="data" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription1" class="form-label">Corpo do texto</label>
    <textarea class="form-control" name="description">
    	





    </textarea>
    <div id="DescriptionHelp" class="form-text">Corpo de texto</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputImage1" class="form-label">Imagens</label>
    <input type="file" class="form-control" id="exampleInputImage1" name="image" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>	
	</div>
</main>
</body>
</html>