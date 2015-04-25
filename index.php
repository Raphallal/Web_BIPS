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
		<title>BIPS -- Homepage</title>
		<link href="css/bootstrap.css" rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style_BIPS.css" type="text/css">
<<<<<<< HEAD
		<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
=======
		<script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="./js/scriptEditor.js"></script>
>>>>>>> origin/backOffice
		<script type="text/javascript">
			
			function getUsernameFromSession(){
        		var username = <?php echo json_encode($_SESSION['username']);?>;
        		return username;
    		}

    		function getAdminFromSession(){
        		var admin =  parseInt("<?php echo $_SESSION['admin']; ?>");
        		return admin;
    		}

			function changePage(page){
				if(alertNoChange == 0){
					resetClub();
					if(page == 'galerie')
						location.href="galerie.php";
					if(page == 'annales')
						location.href="";
					else{
						document.getElementById(anc_onglet+'_onglet').className = 'col-lg-1 onglet onglet_hoverable';
						document.getElementById(page+'_onglet').className = 'col-lg-1 onglet onglet_choisi';
						document.getElementById(anc_onglet+'_contenu').className = 'non-visible';
						document.getElementById(page+'_contenu').className = 'visible';
						anc_onglet = page;
						window.history.pushState(document.title,document.title,"?page="+page);
					}
				}
			}

			//variable d'alerte si un veut quitter une page avec des modifications en cours
			var alertNoChange = 0;

			function changeClub(club){
				if(alertNoChange == 0){
					if(anc_onglet_club != 'presentation'){
						if(anc_onglet_club == 'clubactus'){
							document.getElementById(anc_onglet_club).className = 'col-lg-3 onglet_hoverable onglet_club';
						}
						else if(anc_onglet_club == 'cohesion'){
							document.getElementById(anc_onglet_club).className = 'col-lg-3 onglet_hoverable onglet_club_droite';
						}
						else if(anc_onglet_club == 'zikifips'){
							document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club_droite';
						}
						else{
							if(document.getElementById(anc_onglet_club).className == 'col-lg-2 onglet_choisi onglet_club'){
								document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club';
							}
							else{
								document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club';
							}
						}
					}
					if(club == 'clubactus'){
						document.getElementById(club).className = 'col-lg-3 onglet_choisi onglet_club';
					}
					else if(club == 'cohesion'){
						document.getElementById(club).className = 'col-lg-3 onglet_choisi onglet_club_droite';
					}
					else if(club == 'zikifips'){
						document.getElementById(club).className = 'col-lg-2 onglet_choisi onglet_club_droite';
					}
					else{
						if(document.getElementById(club).className == 'col-lg-2 onglet_hoverable onglet_club'){
							document.getElementById(club).className = 'col-lg-2 onglet_choisi onglet_club';
						}
						else{
							document.getElementById(/*anc_onglet_*/club).className = 'col-lg-2 onglet_choisi onglet_club';
						}
					}
					document.getElementById(anc_onglet_club+'_contenu').className = 'non-visible';
					document.getElementById(club+'_contenu').className = 'visible';
					anc_onglet_club = club;
				}
			}
			function resetClub(){
				if(anc_onglet_club != 'presentation'){
					if(anc_onglet_club == 'clubactus'){
						document.getElementById(anc_onglet_club).className = 'col-lg-3 onglet_hoverable onglet_club';
					}
					else if(anc_onglet_club == 'cohesion'){
						document.getElementById(anc_onglet_club).className = 'col-lg-3 onglet_hoverable onglet_club_droite';
					}
					else if(anc_onglet_club == 'zikifips'){
						document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club_droite';
					}
					else{
						if(document.getElementById(anc_onglet_club).className == 'col-lg-2 onglet_choisi onglet_club'){
							document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club';
						}
						else{
							document.getElementById(anc_onglet_club).className = 'col-lg-2 onglet_hoverable onglet_club';
						}
					}
					document.getElementById(anc_onglet_club+'_contenu').className = 'non-visible';
					document.getElementById('presentation_contenu').className = 'visible';
					anc_onglet_club = 'presentation';
				}
			}
		</script>
	</head>
	<body onload="droitModif()">
		<div class="globale container">
			<header class="row">
			<div class="col-lg-12">
				<img class="img-responsive" src="images/banniere_bips.png" alt="Banniere du bips" title="Banniere du bips" />
			</div>
			</header>
			<div class="row">
			<nav class="col-lg-12 onglets">
				<span class="col-lg-1 onglet onglet_hoverable" id="index_onglet" onclick="alertValidation('none');changePage('index');">Accueil</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="bips_onglet" onclick="alertValidation('none');changePage('bips');">BIPS</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="clubs_onglet" onclick="alertValidation('none');changePage('clubs');">Clubs</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="boutique_onglet" onclick="alertValidation('none');changePage('boutique');">Boutique</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="events_onglet" onclick="alertValidation('none');changePage('events');">Events</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="galerie_onglet" onclick="alertValidation('none');changePage('galerie')">Galerie</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="annales_onglet" onclick="alertValidation('none');changePage('annales')">Annales</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="journal_onglet" onclick="alertValidation('none');changePage('journal');">Journal</span>
			</nav>
			</div>
			<div class="row">
<<<<<<< HEAD
				<nav class="col-lg-3 menu">
					<p>
					<h2>Nous suivre</h2><br/>
					<a href="https://twitter.com/AssoBIPS?lang=fr">
					<img src="images/twitter.JPG" alt="Twitter" title="Twitter" />
					</a>
					<?php/* include("follow_button.htm"); */?>
					<br>
					<a href="https://www.facebook.com/bipsparissud?fref=ts">
					<img src="images/facebook.png" width="200" height="50" alt="Facebook" title="Facebook" />
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
					<p><a href="createAccount.html" target="_blank">Créer un compte</a></p>
					<p><a href="passForgot.html" target="_blank">Mot de passe oublié ?</a></p>
				</nav>
=======
			<?php include("module_connexion.php"); ?> 
>>>>>>> origin/backOffice
				<section class="col-lg-9">
					<?php include("connexion_bd_bips.php"); ?>
					<span id="index_contenu" class="non-visible">
						<?php include("accueil.php"); ?>
					</span>
					<span id="bips_contenu" class="non-visible">
						<?php include("bips.php"); ?>
					</span>
					<span id="clubs_contenu" class="non-visible">
						<?php include("clubs.php"); ?>
					</span>
					<span id="boutique_contenu" class="non-visible">
						<?php include("boutique.php"); ?>
					</span>
					<span id="events_contenu" class="non-visible">
						<?php include("events.php"); ?>
					</span>
					<span id="journal_contenu" class="non-visible">
						<?php include("journal.php"); ?>
					</span>
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
			var club = "none";
			var divBefore = "";
			var anc_page_club = "";
			//-->
		</script>
</html>