<?php
// Vérification sur le get pour des raisons de sécurité
if(!isset($_GET['id']) OR is_numeric($_GET['id']))
    header('location: index.php');
else  
{
    extract($_GET);
    $id = strip_tags($id);

    require_once ('config/function.php');
    $article = getArticle($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>  
</head>
<body>
    
</body>
</html>