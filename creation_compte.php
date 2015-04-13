<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html slick-uniqueid="3" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" dir="ltr" lang="fr-fr">
	<head>
		<!-- base href="http://www.bips-asso.fr/" -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="bde, Polytech, Paris-Sud, bips">
		<meta name="rights" content="Tous droits au BIPS">
		<meta name="description" content="Site de l'associations étudiante de Polytech Paris-Sud : le BIPS. Equivalent du BDE pour Polytech Paris-Sud">
		<title>BIPS -- Nouveau compte</title>
		<link href="css/bootstrap.css" rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style_BIPS.css" type="text/css">
		
	</head>
	<body>
		<div class="globale container">
			<header class="row">
			<div class="col-lg-12">
				<img class="img-responsive" src="images/banniere_bips.png" alt="Banniere du bips" title="Banniere du bips" />
			</div>
			</header>
			<div class="row">
			<nav class="col-lg-12 onglets">
				<a href="index.php" ><span class="col-lg-2 onglet onglet_hoverable" id="index_onglet">Retour à l'accueil</span></a>
			</nav>
			</div>
			<div class="row">
				<nav class="col-lg-3 menu">
					<p>
					<h2>Nous suivre</h2>
					<h3>Sur Twitter</h3>
					<a href="https://twitter.com/AssoBIPS?lang=fr">
					<img src="images/twitter.JPG" alt="Twitter" title="Twitter" />
					</a>
					<?php/* include("follow_button.htm"); */?>
					<br>
					<h3>Sur facebook</h3>
					<a href="https://www.facebook.com/bipsparissud?fref=ts">
					<img src="images/facebook.png" width="80" height="50" alt="Facebook" title="Facebook" />
					</a>
					<?php  /*?>
					<br><br>
					<h3>RSS</h3>
					<a href="">
					<img src="images/rss2.png" style="position: relative; right: 90px" width="50" height="50" alt="RSS" title="RSS" />
					</a>
					*/ ?>
					</p>
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
					<p><a href="createAccount.html" >Créer un compte</a></p>
					<p><a href="passForgot.html" target="_blank">Mot de passe oublié ?</a></p>
				</nav>
				<section class="col-lg-9">
					<!-- Ici on met le formulaire pour l'inscription de l'étudiant / prof 
						Username 
						adresse mail
						confirmation adresse mail 
						mot de passe
						selection de l'annee 
						confirmation 
					--> 
					<div margin="25px">
						<form method = "post" action="creation_compte.php">
							<table cellspacing="5px" cellpadding="5px">
								<tr>
									<td>Identifiant</td>
									<td><input type ="text" name="username" placeholder="Nom d'utilisateur"/></td>
								</tr>
								<tr>
									<td>Adresse mail</td>
									<td><input type="mail" name="mail1" placeholder="prenom.nom@u-psud.fr" /></td>
								</tr>
								<tr>
									<td>Confirmer mon adresse mail</td>
									<td><input type="mail" name="mail2" placeholder="prenom.nom@u-psud.fr" /></td>
								</tr>
								<tr>
									<td>Mot de passe</td>
									<td><input type="password" name="pwd1" placeholder="*****" /></td>
								</tr>
								<tr>
									<td>Confirmer mon mot de passe</td>
									<td><input type="password" name="pwd2" placeholder="*****" /></td>
								</tr>
								<tr>
									<td>Ma promotion</td>
									<td>
										<select name="prom" size="1">
											<option selected>Aucune</option>
											<option>Professeur</option>
											<?php 
												$bdd = new PDO('mysql:host='.'localhost'.';dbname='.'bips', 'root', 'root') ;
												$affiche = $bdd->query('SELECT * FROM fildepa WHERE semestre=0') ; 

												while( $affiche_data = $affiche->fetch()){
												?>
													<option>
														<?php 
															echo $affiche_data['filiere']." ".$affiche_data['annee']." ".$affiche_data['dept'] ; 
														?>
													</option>
													<?php
												}
											?>
										</select>
									</td>
								</tr>
								<tr>
									<td></td><td></td>
								</tr>
								<tr>
									<td><input type="reset" value="Recommencer mon inscription"/></td>
									<td><input type="submit" disabled="disabled" value="Valider mon inscription" /></td>
								</tr>
							</table>
						</form>
					</div>
				</section>
			</div>
			<footer class="row">
			Site du BIPS | tous droits déclarés au BIPS. 
			</footer>
	</body>
	<script type="text/javascript">
			//<!--
			function getQuerystring(key, default_) {
			   if (default_==null) default_="";
			   key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
			   var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
			   var qs = regex.exec(window.location.href);
			   if(qs == null || (qs[1] != 'index' && qs[1] != 'bips' && qs[1] != 'journal' && qs[1] != 'clubs' && qs[1] != 'boutique' && qs[1] != 'events' && qs[1] != 'galerie' && qs[1] != 'annales')) 
				   return 'index'; 
			   else				
					return qs[1];
			}
			var anc_onglet = getQuerystring('page');			
			var anc_onglet_club = 'presentation';
			changePage(anc_onglet);
			//-->
		</script>
</html>