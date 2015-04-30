<?php
$req = $bdd->query('SELECT idarticle, titre, contenu, date FROM article WHERE idpage = 5 ORDER BY date DESC');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
	echo '<h3>';
	$timestamp = strtotime($donnees['date']);
	echo date("d-m-Y", $timestamp);
	echo '<br/>';
	echo '<div id="'.$donnees['idarticle'].'5" class="visible"><h3>' . $donnees['contenu'] . '</h3></div>';
    echo '<input type="button" id="button'.$donnees['idarticle'].'5" class="non-visible inputEvent" value="Modifier" onclick="modifierEvent(\''.$donnees['idarticle'] .'5\',\''.$donnees['idarticle'] .'\')"/>';
    echo '<input type="button" class="non-visible inputEvent" value="Supprimer"  onclick="supprimerEvent(\''.$donnees['idarticle'] .'\',5)"/>';
	echo '</p>';
}
$req->closeCursor();
echo '<input type="button" class="non-visible inputEvent" value="Ajouter"  onclick="ajouterEvent(5)"/>';
?>
<!--
<p>
	<h2 class="titre">Prochainement</h2>
	<h3>Y'a le gala dans pas longtemps, ça va être bien bien bien bien bien
	</h3>
</p>
-->