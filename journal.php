<?php
$req = $bdd->query('SELECT titre, contenu FROM article WHERE idpage = 6 ORDER BY date DESC');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
    echo '<div id="'.$donnees['idarticle'].'6" class="visible"><h3>' . $donnees['contenu'] . '</h3></div>';
    echo '<input type="button" id="button'.$donnees['idarticle'].'6" class="non-visible inputJournal" value="Modifier" onclick="modifierArticleJournal(\''.$donnees['idarticle'] .'6\',\''.$donnees['idarticle'] .'\')"/>';
    echo '<input type="button" class="non-visible inputJournal" value="Supprimer"  onclick="supprimerArticleJournal(\''.$donnees['idarticle'] .'\',6)"/>';
	echo '</p>';
}
$req->closeCursor();
echo '<input type="button" class="non-visible inputJournal" value="Ajouter"  onclick="ajouterArticleJournal(6)"/>';

$destinataire = "florian.cabaret@u-psud.fr";
$expediteur = "webmaster@bips-asso.fr";
/* Va falloir modifier le fichier php.ini pour faire correspondre avec l'adresse mail du BIPS ainsi que le SMTP sinon on peut pas envoyer de mails, voilà voilà
mail($destinataire, "Ceci est un mail de test tavu", "Ceci est le corps de mon message et c'est un test", "From:webmaster@bips-asso.fr \r\n Content-Type: text/html; charset=\"iso-8859-1\"\r\n");*/
?>
<!--
<p>
	<h2 class="titre">Article du jour</h2>
	<h3>~~~~~~~~~~~~~~~~
	</h3>
</p>
-->