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
		<title>BIPS -- Nouveau compte</title>
		<link href="css/bootstrap.css" rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style_BIPS.css" type="text/css">
	<?php 

		if( isset($_POST['inscription']) && isset($_POST['mail1']) && isset($_POST['mail2']) && isset($_POST['pwd1']) 
			&& isset($_POST['pwd2']) && isset($_POST['prom']) )
		{
			$mail1 = mysql_real_escape_string($_POST['mail1']) ; 
			$mail2 = mysql_real_escape_string($_POST['mail2']) ; 
			$pwd1 = mysql_real_escape_string($_POST['pwd1']) ; 
			$pwd2 = mysql_real_escape_string($_POST['pwd2']) ; 
			$promo = $_POST['prom'] ; 
			$false = false ; 

			if( (strlen($mail1) == strlen($mail2)) && (strlen($pwd1) == strlen($pwd2)) && (strcmp($mail1, $mail2)==0)
				&& ( strcmp($pwd1,$pwd2)==0 ) && strpos($mail1, "@u-psud.fr") > 0 && strpos($mail1, ".@") ===false && 
				(strpos($mail1, '.') < strlen($mail1)-3) && (strcmp($promo, "Aucune")!= 0) )
			{
				$str = split(" ", $promo) ; 
				try{
					$bdd = new PDO('mysql:host=localhost;dbname=bips;charset=utf8', 'root', '');
				}
				catch(Exception $e){
						die('Erreur : '.$e->getMessage());
				}

				//$query= "SELECT * FROM logins WHERE nickname='$nick' AND password =PASSWORD('$pwd')" ; 
				$query = "SELECT * FROM users WHERE mail='$mail1'" ; 

				$mailReq = $bdd->query($query) ; 
				if($mailReq->fetch()){
					?>
						<meta http-equiv="refresh" content="0; URL=confirmation_compte.php?a=notok">						
					<?php
				}

				$requete = $bdd->prepare( 'INSERT INTO users(mail, pwd, filiere, annee, spe, admin, admin_name, verified) 
					VALUES (:mail, :pwd, :filiere, :annee, :spe, :admin, :admin_name, :verified)' ) ;
				
				$pwd1 = md5($pwd1) ; 

				if(strcmp($promo, "Professeur") == 0 ){
					$str[0] = "Prof" ; 
					$str[1] = "" ; 
					$str[2] = "" ; 
				}

				$requete->execute(array(
					'mail' => $mail1,
					'pwd' => $pwd1,
					'filiere' => $str[0], 
					'annee' => $str[1], 
					'spe' => $str[2],
					'admin' => $false,
					'admin_name' => NULL,
					'verified' => $false
				)) ;  	
				?>
					<meta http-equiv="refresh" content="0; URL=confirmation_compte.php?a=confirm">

				<?php
			}
			else{
				?>
					<meta http-equiv="refresh" content="0; URL=confirmation_compte.php?a=notok">
				<?php
			}
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
				<a href="index.php?page=index" ><span class="col-lg-2 onglet onglet_hoverable" id="index_onglet">Retour à l'accueil</span></a>
			</nav>
			</div>
			<div class="row">
				<?php include("module_connexion.php"); ?> 
				<section class="col-lg-9">
					<div margin="25px">
						<form method = "post" action="creation_compte.php">
							<table cellspacing="5px" cellpadding="5px">
								<tr>
									<input type="hidden" name="inscription" id="inscription">
									<td>Adresse mail</td>
									<td><input type="mail" name="mail1" id="mail1" placeholder="prenom.nom@u-psud.fr" /></td>
									<td>
										<span id="errorMail1" display="none" style="color:red; font-size:12px;" >Les adresses mail doivent être identiques et non vides</span>
										<span id="errorMail2" display="none" style="color:red; font-size:12px;" >L'adresse fournie doit appartenir au domaine u-psud.fr</span>
									</td>
								</tr>
								<tr>
									<td>Confirmer mon adresse mail</td>
									<td><input type="mail" name="mail2" id="mail2" placeholder="prenom.nom@u-psud.fr" /></td>
								</tr>
								<tr>
									<td>Mot de passe</td>
									<td><input type="password" name="pwd1" id="pwd1" placeholder="*****" /></td>
									<td>
										<span id="errorPwd1" display="none" style="color:red; font-size:12px;" >Les mots de passes doivent être identiques</span>
										<span id="errorPwd2" display="none" style="color:red; font-size:12px;" >Le mot de passe doit contenir au moins 6 caractères</span>
									</td>
								</tr>
								<tr>
									<td>Confirmer mon mot de passe</td>
									<td><input type="password" name="pwd2" id="pwd2" placeholder="*****" /></td>
								</tr>
								<tr>
									<td>Ma promotion</td>
									<td>
										<select name="prom" size="1">
											<option selected>Aucune</option>
											<option>Professeur</option>
											<?php 
												try{
													$bdd = new PDO('mysql:host=localhost;dbname=bips;charset=utf8', 'root', '');
												}
												catch(Exception $e){
														die('Erreur : '.$e->getMessage());
												}
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
									<td><input type="submit" id="mySub" disabled="disabled" value="Valider mon inscription" /></td>
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

</html>