<?php
include('../config/connection.php');
include('session.php');
include('header.php');
include('footer.php');
$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);;
?>
<div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
                <h2>Bom dia <?php echo $_SESSION['nome']; ?></h2>
                <p><a href="?sair">Deslogar</a></p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="" class="nav-item">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-item">Inserir</a>
                    </li>
                </ul>
	   <p><a href="?sair">Deslogar</a></p>
            </nav>

        <main class="col-md-9 col-lg-10">
            <div class="container">

                <h1 id="main-title" class="title">Meus Posts</h1>

                <table class="table" id="contacts-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $post) : ?>
                            <tr>
                                <td scope="row"><?= $post["id"] ?></td>
                                <td scope="row"><?= $post["title"] ?></td>
                                <td scope="row"><?= $post["description"] ?></td>
                                <td class="actions">
                                    <a href="viewBlog.php?id=<?= $post["id"] ?>" class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </a>
                                    <a href="editar.php?id=<?= $post["id"] ?>" class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                    <a href="delete.php?id=<?= $post["id"] ?>" class="icons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="dark" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
                                            <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z" />
                                        </svg>

                                    </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>