<?php
$req = $bdd->query('SELECT titre, contenu FROM article WHERE idpage = 8');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
    echo '<h3>' . $donnees['contenu'] . '</h3>';
	echo '</p>';
}
$req->closeCursor();
?>