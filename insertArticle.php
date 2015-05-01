<?php

include("connexion.php") ; 
$bdd = connexion($bddBips) ; 

$titre = $_POST['titre'];
$idpage = $_POST['idpage'];

$bdd->query('INSERT INTO article (titre, contenu, idpage) VALUES ('.'\''.$titre.'\', \'Article à remplir\' , '.'\''.$idpage.'\')');
 
?>