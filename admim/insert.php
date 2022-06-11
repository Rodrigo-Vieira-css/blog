<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <main> 
  <form action="envia.php" method="POST" enctype = "multipart/form-data">
        <div class="container">
    <h1 class="teste" style=" margin-left: 1rem;  padding-bottom: 3rem; padding-top: 2rem;">
            Novo arquivo
       </h1>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Titulo</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Leão" name="title" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Data</label>
  <input type="date" class="form-control" id="exampleFormControlInput2" placeholder="Leão" name="data" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Escolha um arquivo</label>
  <input class="form-control" type="file" id="formFile" name="image" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
    </main>
</body>
</html>