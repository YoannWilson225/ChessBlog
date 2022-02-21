<?php
// On part chercher nos fonctions
require_once('config/function.php');
// Recuperer mes articles sur ma page index.php
$articles = getArticles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessBlog</title>
</head>
<body>
    <h1>Articles : </h1>
    <?php foreach ($articles as $article):?>
        <h2><?= $article->title?></h2>
        <!-- Lien permettant de lire tout l'article -->
        <a href="article.php?id=<?=$article->id?>">Lire la suite</a>
    <?php endforeach; ?>
</body>
</html>

