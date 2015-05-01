<?php
$host = "localhost"; /* L'adresse du serveur */
$login = "root"; /* Votre nom d'utilisateur */
$password = ""; /* Votre mot de passe */

function connexion($base)
{
global $host, $login, $password;
$db = mysqli_connect($host, $login, $password);
mysqli_set_charset($db, "utf8");
mysqli_select_db($db, $base);
return $db;
}
?>
