<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html slick-uniqueid="3" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" dir="ltr" lang="fr-fr">
	<head>
		<!-- base href="http://www.bips-asso.fr/" -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="bde, Polytech, Paris-Sud, bips">
		<meta name="rights" content="Tous droits au BIPS">
		<meta name="description" content="Site de l'associations étudiante de Polytech Paris-Sud : le BIPS. Equivalent du BDE pour Polytech Paris-Sud">
		<title>BIPS -- Homepage</title>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style_BIPS.css" type="text/css">
		<script type="text/javascript">
			function changePage(var page){
				alert('coucou');
				document.getElementById(anc_onglet).className = 'onglet onglet_hoverable';
				document.getElementById(page).className = 'onglet onglet_choisi';
				document.getElementById(anc_onglet+'_contenu').className = 'non-visible';
				document.getElementById(page+'_contenu').className = 'visible';
				anc_onglet = page;
			}
		</script>
	</head>
	<body>
		<div class="globale">
			<header>
				<img src="images/banniere_bips.png" style="position: relative; top: 10px;" width="950" height="200" alt="Banniere du bips" title="Banniere du bips" />
			</header>
			<nav class="onglets">
				<span class="onglet onglet_choisi" id="index" onclick="changePage('index')">Accueil</span>
				<span class="onglet onglet_hoverable" id="bips" onclick="changePage('bips')">BIPS</span>
				<span class="onglet onglet_hoverable" id="clubs" onclick="changePage('clubs')">Les clubs</span>
				<span class="onglet onglet_hoverable" id="boutique" onclick="changePage('boutique')">Boutique</span>
				<span class="onglet onglet_hoverable" id="events" onclick="changePage('events')">Evénements</span>
				<span class="onglet onglet_hoverable" onclick="changePage('galerie')">Galerie</span>
				<span class="onglet onglet_hoverable" onclick="changePage('annales')">Annales</span>
				<span class="onglet onglet_hoverable" id="journal" onclick="changePage('journal')">Journal</span>
			</nav>
			<nav class="menu">
				<form action="enregistrement.php" method="post"> 
					<table>
						<tr>
							<td colspan="2"><h2>Connexion</h2></th>
						</tr>
					   <tr>
						   <th>Identifiant </th>
						   <td><input type="text" name="iden" id="iden"/></td>
					   </tr>
					   <tr>
						   <th>Mot de passe </th>
						   <td><input type="password" name="passwd" id="passwd"/></td>
					   </tr>
					   <tr>
						   <th></th>
						   <td><input type="submit" value="Se connecter" /></td>
					   </tr>
					</table>
				</form>
				<p><a href="createAccount.html" target="_blank">Créer un compte</a></p>
				<p><a href="passForgot.html" target="_blank">Mot de passe oublié ?</a></p>
				<p>
				<h2>Nous suivre</h2>
				<h3>Sur Twitter</h3>
				<a href="https://twitter.com/AssoBIPS?lang=fr">
				<img src="images/twitter.JPG" style="position: relative; right: 45px" alt="Twitter" title="Twitter" />
				</a>
				<?php/* include("follow_button.htm"); */?>
				<br>
				<h3>Sur facebook</h3>
				<a href="https://www.facebook.com/bipsparissud?fref=ts">
				<img src="images/facebook.png" style="position: relative; right: 80px" width="80" height="50" alt="Facebook" title="Facebook" />
				</a>
				<?php  /*?>
				<br><br>
				<h3>RSS</h3>
				<a href="">
				<img src="images/rss2.png" style="position: relative; right: 90px" width="50" height="50" alt="RSS" title="RSS" />
				</a>
				*/ ?>
				</p>
			</nav>
			<section>
				<span id="index_contenu" class="visible">
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
				</span>
				<span id="bips_contenu" class="non-visible">
					<p>
					<h2 class="titre">Histoire</h2>
					<h3>BIPS association loi 1901, bla bla bla bla
					</h3>
					</p>
				</span>
			</section>
		</div>		
		<script type="text/javascript">
			//<!--
			var anc_onglet = 'index';
			changePage(anc_onglet);
			//-->
		</script>
			<footer>
			Site du BIPS | tous droits déclarés au BIPS. 
			</footer>
	</body>
</html>