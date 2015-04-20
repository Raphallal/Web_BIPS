<?php session_start()  ; 
	if( !isset($_SESSION['logged'] ) || !isset($_SESSION['admin']) || !isset($_SESSION['username']) )
	{
		$_SESSION['logged'] = false ; 
		$_SESSION['admin'] = false ; 
		$_SESSION['username'] = NULL ; 
		$_SESSION['filiere'] = NULL ; 
 		$_SESSION['annee'] = NULL ; 
 		$_SESSION['spe'] = NULL ; 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html slick-uniqueid="3" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr-fr" dir="ltr" lang="fr-fr">
	<head>
		<!-- base href="http://www.bips-asso.fr/" -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="keywords" content="bde, Polytech, Paris-Sud, bips">
		<meta name="rights" content="Tous droits au BIPS">
		<meta name="description" content="Site de l'associations étudiante de Polytech Paris-Sud : le BIPS. Equivalent du BDE pour Polytech Paris-Sud">
		<title>BIPS -- Compte</title>
		<link href="css/bootstrap.css" rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style_BIPS.css" type="text/css">
	<?php 
		if(isset($_GET['a']))
		{
			$getter = mysql_real_escape_string($_GET['a']) ; 
			if( strcmp($getter, "confirm")!=0 )
			{
			?>
			<meta http-equiv="refresh" content="2; URL=index.php?page=index">
			<?php
			}
		}
		else
		{
			?>
			<meta http-equiv="refresh" content="2; URL=index.php?page=index">
			<?php
		}
	?>
	</head>
	<body>
	<script type="text/javascript" src="creation_compte_js.js"></script>
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
					<br>
					<h3>Sur facebook</h3>
					<a href="https://www.facebook.com/bipsparissud?fref=ts">
					<img src="images/facebook.png" width="80" height="50" alt="Facebook" title="Facebook" />
					</a>
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
					<div margin="25px">
						<?php 
							if(isset($_GET['a']))
							{
								$getter = mysql_real_escape_string($_GET['a']) ; 
								if( strcmp($getter, "confirm")==0 )
								{
									?>
									<span>
										Votre compte a bien été créé. Un mail de confirmation vous a été envoyé. <br>
										Ce mail contient un lien d'activation. Une fois votre compte activé, vous pourrez vous connecter. <br><br>
										<a href="index.php">Retour à l'accueil du site</a>
									</span>
									<?php
								}
								else if(strcmp($getter, "notok")==0){
								?>
									<span>
										Votre compte n'a pas été crée car votre adresse mail a déjà été utilisée ou parce que vous n'êtes pas autorisé à vous inscrire. 
										<a href="index.php">Redirection vers l'accueil du site</a>
									</span>
								<?php
								}
							}
							else
							{
								?>
								<span>
									<a href="index.php">Redirection vers l'accueil du site.</a>
								</span>
								<?php
							}
						?>
					</div>
				</section>
			</div>
			<footer class="row">
			Site du BIPS | tous droits déclarés au BIPS. 
			</footer>
		</div>
	</body>

</html>