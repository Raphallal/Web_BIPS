<?php

include("connexion_bd_bips.php");

$titre = $_POST['titre'];
$idpage = $_POST['idpage'];

$bdd->query('INSERT INTO article (titre, contenu, idpage) VALUES ('.'\''.$titre.'\', \'Article à remplir\' , '.'\''.$idpage.'\')');
 
?>