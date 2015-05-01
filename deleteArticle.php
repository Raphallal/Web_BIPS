<?php

include("connexion.php") ; 
$bdd = connexion($bddBips) ; 

$idarticle = $_POST['idarticle'];
$idpage = $_POST['idpage'];

$bdd->query('DELETE FROM article WHERE idarticle = \''.$idarticle.'\' AND idpage = \''.$idpage.'\'');
 
?>