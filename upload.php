<?php
include("connexion.php");
 
$db = connexion("bips");

$sql = "INSERT INTO files() ";
$sql .= "VALUES('','".$_POST['nom']."','".$_POST['mail']."','".$_POST['notes']."')";
 
mysqli_query($db, $sql) or die(mysql_error($db));
?>