<!DOCTYPE html>
<html lang="NL">
<?php
require 'modules/Projects.php';
$projects = getAllProjects();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.css"></link>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap-grid.css"></link>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="JS/main.js"></script>
    <title>Home</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid" style="background-image: url(Pictures/202010218723.png); background-size: 100%;">
    <div class="container for-about">
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="color: red">RK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Project.html">Projecten <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About.html">Over mij</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rekenen.html">Rekenmachine</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="BKE.html">Tic-Tac-Toe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://rkarabicek.github.io/vue-pages/">VUE</a>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" onclick="black()">Switch</button>
            </li>
        </ul>
    </div>
</nav>
    <?php foreach ($projects as $project): ?>
<div class="cards">
        <div class="card">
        <h2 class="card-title"><?= $project->name; ?></h2>
            <img src="<?= $project->img; ?>" alt="een code snippet">
            <p class="card-desc"><?= $project->description; ?></p>
</div>
</div>
    <?php endforeach; ?>
<footer>
    <div class="grid-container">
        <div id="item5">Made by: Riza Karabicek</div>
    </div>
</footer>
</body>
</html>

