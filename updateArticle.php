<?php

include("connexion_bd_bips.php");

$contenu = $_POST['contenu'];
$idarticle = $_POST['idarticle'];
$idpage = $_POST['idpage'];

$bdd->query('UPDATE article SET contenu = '.'\''.$contenu.'\' WHERE idarticle = \''.$idarticle.'\' AND idpage = \''.$idpage.'\'');
 
?>