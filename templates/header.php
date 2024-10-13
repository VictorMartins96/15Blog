<?php
    include_once("helpers/url.php");
    include_once("Data/posts.php");
    include_once("Data/categories.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- Fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <a href="<?= $BASE_URL?>index.php" id="logo">
        <img src="<?= $BASE_URL?>/Img/logo.svg" alt="logo">
    </a>
<ul id="navbar">
    <li><a href="<?= $BASE_URL; ?>/index.php" class="nav-link">Home</a></li>
    <li><a href="#" class="nav-link">Categorias</a></li>
    <li><a href="#" class="nav-link">Sobre</a></li>
    <li><a href="<?= $BASE_URL?>/contato.php" class="nav-link">Contatos</a></li>
</ul>
</header>