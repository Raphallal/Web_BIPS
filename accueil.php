<?php
$req = $bdd->query('SELECT titre, contenu FROM article WHERE idpage = 1 ORDER BY date DESC');
while ($donnees = $req->fetch()){
	echo '<p>';
	echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
    echo '<h3>' . $donnees['contenu'] . '</h3>';
	echo '</p>';
}
$req->closeCursor();
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