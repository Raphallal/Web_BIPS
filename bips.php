<?php
$req = $bdd->query('SELECT titre, contenu FROM article WHERE idpage = 2');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
    echo '<h3>' . $donnees['contenu'] . '</h3>';
	echo '</p>';
}
$req->closeCursor();
?>
<!-----
<p>
	<h2 class="titre">Histoire</h2>
	<h3>BIPS association loi 1901, bla bla bla bla
	</h3>
</p>
---->