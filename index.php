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
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="js/scriptEditor.js"></script>
		<script type="text/javascript" src="js/scriptEvents.js"></script>
		<script type="text/javascript" src="js/scriptAccueil.js"></script>
		<script type="text/javascript" src="js/scriptJournal.js"></script>
		<script type="text/javascript" src="js/scriptIndex.js"></script>
		<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
		<script type="text/javascript">
		var alertNoChange = 0;
		var anc_onglet = getQuerystring('page');
		var anc_onglet_club = 'presentation';
		
		function getUsernameFromSession(){
			var username = <?php echo json_encode($_SESSION['username']);?>;
			return username;
		}

		function getAdminFromSession(){
			var admin =  parseInt("<?php echo $_SESSION['admin']; ?>");
			return admin;
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
				<span class="col-lg-1 onglet onglet_hoverable" id="index_onglet" onclick="alertValidationClubs('none');changePage('index');">Accueil</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="bips_onglet" onclick="alertValidationClubs('none');changePage('bips');">BIPS</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="clubs_onglet" onclick="alertValidationClubs('none');changePage('clubs');">Clubs</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="boutique_onglet" onclick="alertValidationClubs('none');changePage('boutique');">Boutique</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="events_onglet" onclick="alertValidationClubs('none');changePage('events');">Events</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="galerie_onglet" onclick="alertValidationClubs('none');changePage('galerie')">Galerie</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="annales_onglet" onclick="alertValidationClubs('none');changePage('annales')">Annales</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="journal_onglet" onclick="alertValidationClubs('none');changePage('journal');">Journal</span>
			</nav>
			</div>
			<div class="row">
			<?php include("module_connexion.php"); ?> 
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
			changePage(anc_onglet);
			var club = "none";
			var divBefore = "";
			var anc_page_club = "";
			//-->
		</script>
</html>