<?php
$host = "localhost"; /* L'adresse du serveur */
$login = "root"; /* Votre nom d'utilisateur */
$password = ""; /* Votre mot de passe */
$base = "maquette_14_15"; /* Le nom de la base */
 
function connexion()
{
global $host, $login, $password, $base;
$db = mysqli_connect($host, $login, $password);
mysqli_select_db($db, $base);
return $db;
}
?>