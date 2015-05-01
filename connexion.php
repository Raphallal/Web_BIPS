<?php

$host = 'localhost'; /* L'adresse du serveur */
$login = 'root'; /* Votre nom d'utilisateur */
$password = 'root'; /* Votre mot de passe */
$bddBips = 'bips' ; 
$bddMaquette = 'maquette_14_15' ; 
$bddMaquetteM1 = '' ; 

function connexion($base)
{
	global $host, $login, $password;
	try{
	    $bdd = new PDO('mysql:host='.$host.';dbname='.$base.';charset=utf8', $login, $password );
	}
	catch(Exception $e){
	    die('Erreur : '.$e->getMessage());
	}
	return $bdd;
}

?>
