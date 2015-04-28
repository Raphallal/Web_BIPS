<?php

include("connexion_bd_bips.php");

$idarticle = $_POST['idarticle'];
$idpage = $_POST['idpage'];

$bdd->query('DELETE FROM article WHERE idarticle = \''.$idarticle.'\' AND idpage = \''.$idpage.'\'');
 
?>