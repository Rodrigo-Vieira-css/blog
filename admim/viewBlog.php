<?php 

include_once('../config/connection.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
include('headerViewBlog.php');
include('footerViewBlog.php');
?>


<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-success">Conteudo</div>
  <div class="card-body text-success">
  <?php foreach($results as $post): ?>
		<h1 class="card-title"><?= $post["title"] ?></h1>
		<p class="card-text"><?= $post["description"] ?></p>
<?php endforeach; ?>
  </div>
  <div class="card-footer bg-transparent border-success"></div>
</div>