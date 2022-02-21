<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=chessblog;charset=utf8', 'root');
// Avoir plus de précision sur les soucis de connexion à la base de données
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>