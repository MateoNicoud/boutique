<?php
$title = "";
$metadata = "";
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $metadata; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title><?= $title ?></title>
</head>
<body>
<nav>
    <div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./?action=home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./?action=create">Créer un article</a>
            </li>
            </li>
        </ul>
    </div>
</nav>