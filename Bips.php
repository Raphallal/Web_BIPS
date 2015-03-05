<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html slick-uniqueid="3" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" dir="ltr" lang="fr-fr">
	<head>
		<!-- base href="http://www.bips-asso.fr/" -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="bde, Polytech, Paris-Sud, bips">
		<meta name="rights" content="Tous droits au BIPS">
		<meta name="description" content="Site de l'associations étudiante de Polytech Paris-Sud : le BIPS. Equivalent du BDE pour Polytech Paris-Sud">
		<title>BIPS -- Homepage</title>
		<link rel="stylesheet" href="style_BIPS.css" type="text/css">
		<script type="text/javascript" src="js.js"></script>
	</head>
	<body>
		<div class="globale">
			<header>
				<img src="images/banniere_bips.png" style="position: relative; top: 10px;"width="950" height="200" alt="Banniere du bips" title="Banniere du bips" />
			</header>
			<nav class="onglets">
				<span class="onglet onglet_hoverable" onclick="changePage('index')">Accueil</span>
				<span class="onglet onglet_choisi" onclick="changePage('Bips')">BIPS</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Clubs')">Les clubs</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Boutique')">Boutique</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Events')">Evénements</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Galerie')">Galerie</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Annales')">Annales</span>
				<span class="onglet onglet_hoverable" onclick="changePage('Journal')">Journal</span>
			</nav>
			<nav class="menu">
				<form action="bips-asso.fr - Accueil.html" method="post"> 
					<table>
						<tr>
							<td colspan="2"><h2>Connection</h2></th>
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
				<?php/* include("follow_button.htm"); */?>
				<br><br>
				<h3>Sur facebook</h3>
				<?php  ?>				
				<br><br>
				<h3>RSS</h3>
				</p>
			</nav>
			<section>
				
			</section>
		</div>		
			<footer>
			Site du BIPS | tous droits déclarés au BIPS. 
			</footer>
	</body>
</html>