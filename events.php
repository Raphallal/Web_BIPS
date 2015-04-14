<?php
$req = $bdd->query('SELECT titre, contenu, date FROM article WHERE idpage = 5 ORDER BY date DESC');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
	echo '<h3>';
	$timestamp = strtotime($donnees['date']);
	echo date("d-m-Y", $timestamp);
	echo '<br/>';
	echo $donnees['contenu'] . '</h3>';
	echo '</p>';
}
$req->closeCursor();
?>
<!----
<p>
	<h2 class="titre">Prochainement</h2>
	<h3>Y'a le gala dans pas longtemps, ça va être bien bien bien bien bien
	</h3>
</p>
---->