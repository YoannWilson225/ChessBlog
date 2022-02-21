<?php
// Première requête pour récuperer tous mes articles
    function getArticles(){
        // On la connexion à la base de données
        require_once ('config/connect.php');
        // Variable requête
            // Préparer la requête à sélectionner l'id et le title depuis la table articles dans l'ordre décroissant par rapport à l'id
        $req = $bdd->prepare('SELECT
            id,
            title
            FROM
            articles
            ORDER BY id DESC
        ');
        // On execute la requete
        $req->execute();
        // Création de $data qui sera égal à tous ce qu'on à récuperer, sous forme de tableau
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        // Fermer le curseur
        $req->closeCursor();
    }

    // fonction qui recuper un article

    function getArticle($id){
        require('config/connect.php');
        $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $req->execute(array($id));
        if($req->rowCount() == 1)
        {
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        }else {
            header('location: index.php');
        }
    }
?>  
