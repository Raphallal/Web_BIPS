<marquee align="center" height="20" scrolldelay="10" scrollamount="5" onmouseout="this.start()" onmouseover="this.stop()"><p>
<?php
$req = $bdd->query('SELECT titre, date FROM article WHERE idpage = 5 AND date > CURRENT_DATE LIMIT 5');
while ($donnees = $req->fetch()){
	echo '<span class="ongletEvent">';
	echo $donnees['titre'];
	echo ' organisé par ...... le ';
	$timestamp = strtotime($donnees['date']);
	echo date("d / m / Y", $timestamp);
	echo '</span>';
}
$req->closeCursor();
?>
</p></marquee>

<?php
$req = $bdd->query('SELECT idarticle, titre, date, contenu FROM article WHERE idpage = 1 ORDER BY date DESC');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
	echo '<h5>' . $donnees['date'] . '</h5>';
    echo '<div id="'.$donnees['idarticle'].'1" class="visible"><h3>' . $donnees['contenu'] . '</h3></div>';
    echo '<input type="button" id="button'.$donnees['idarticle'].'1" class="non-visible inputArticleAcc" value="Modifier" onclick="modifierArticleAcc(\''.$donnees['idarticle'] .'1\',\''.$donnees['idarticle'] .'\')"/>';
    echo '<input type="button" class="non-visible inputArticleAcc" value="Supprimer"  onclick="supprimerArticleAcc(\''.$donnees['idarticle'] .'\',1)"/>';
	echo '</p>';
}
$req->closeCursor();
echo '<input type="button" class="non-visible inputArticleAcc" value="Ajouter"  onclick="ajouterArticleAcc(1)"/>';
?>
<?php
/*


<p>
	<h2 class="titre">Bienvenue</h2>
	<h3>Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat
	sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat
	in solido locari cunctorum.
	</h3>
</p>
<p>
	<h2 class="titre">Test d'article</h2>
	<h3>Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus.
	Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.<br />
	Sed cautela nimia in peiores haeserat plagas, ut narrabimus postea, aemulis consarcinantibus insidias graves apud Constantium, cetera medium principem sed siquid auribus eius huius modi
	quivis infudisset ignotus, acerbum et inplacabilem et in hoc causarum titulo dissimilem sui.<br />
	Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque auh2i, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt.
	atque eos, quos nominavi, cum Attico nostro frequenter auh2i, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus,
	neque erat umquam controversia, quid ego intellegerem, sed quid probarem.<br />
	</h3>
</p>
<p>
	<h2 class="titre">Test d'article 2</h2>
	<h3>Ac ne quis a nobis hoc ita dici forte miretur, quod alia quaedam in hoc facultas sit ingeni, neque haec dicendi ratio aut disciplina, ne nos quidem huic uni studio penitus umquam dediti fuimus.
	Etenim omnes artes, quae ad humanitatem pertinent, habent quoddam commune vinculum, et quasi cognatione quadam inter se continentur.<br />
	Sed cautela nimia in peiores haeserat plagas, ut narrabimus postea, aemulis consarcinantibus insidias graves apud Constantium, cetera medium principem sed siquid auribus eius huius modi
	quivis infudisset ignotus, acerbum et inplacabilem et in hoc causarum titulo dissimilem sui.<br />
	Nisi mihi Phaedrum, inquam, tu mentitum aut Zenonem putas, quorum utrumque audivi, cum mihi nihil sane praeter sedulitatem probarent, omnes mihi Epicuri sententiae satis notae sunt.
	atque eos, quos nominavi, cum Attico nostro frequenter audivi, cum miraretur ille quidem utrumque, Phaedrum autem etiam amaret, cotidieque inter nos ea, quae audiebamus, conferebamus,
	neque erat umquam controversia, quid ego intellegerem, sed quid probarem.<br />
	</h3>
</p>
*/
?>