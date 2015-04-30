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
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	var anc_page = 'upload';
	function change_onglet(name)
		{
			document.getElementById(anc_page).style.display = 'none';
			document.getElementById(name).style.display = 'block';
			anc_page = name;
		}
	function changePage(page){
			if(page == 'annales')
				location.href="annales.php";
			else if(page != 'galerie')
				location.href="index.php?page="+page;
		}
	var first_upload = true;
	</script>
</head>
<body>
	<?php
	include("connexion.php");
	?>
	<div class="globale container">
		<header class="row">
			<div class="col-lg-12">
				<img class="img-responsive" src="images/banniere_bips.png" alt="Banniere du bips" title="Banniere du bips" />
			</div>
		</header>
		<div class="row">
			<nav class="col-lg-12 onglets">
				<span class="col-lg-1 onglet onglet_hoverable" id="index_onglet" onclick="changePage('index');">Accueil</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="bips_onglet" onclick="changePage('bips');">BIPS</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="clubs_onglet" onclick="changePage('clubs');">Clubs</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="boutique_onglet" onclick="changePage('boutique');">Boutique</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="events_onglet" onclick="changePage('events');">Events</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="galerie_onglet" onclick="changePage('galerie')">Galerie</span>
				<span class="col-lg-1 onglet onglet_hoverable" onclick="changePage('annales')">Annales</span>
				<span class="col-lg-1 onglet onglet_hoverable" id="journal_onglet" onclick="changePage('journal');">Journal</span>
			</nav>
		</div>
		<div class="row">
			<?php include("module_connexion.php"); ?>
				<section class="col-lg-9">
					<?php
					if (!$_SESSION['logged']){
						echo '<p>Vous n\'avez pas accès à cette ressource en étant déconnecté.</p><br>';
						echo '<p>Merci de vous connecter ou de vous inscrire pour accéder aux annales</p>';
					}
					else{
						echo '<div id="list">
							<div class="col-lg-12 an_header">
							<span style="text-align:left;">';
						echo ucwords(str_replace("."," ",preg_replace('/\d/', '',substr($_SESSION['username'],0,-10))))." - ".$_SESSION['filiere'].$_SESSION['annee']." ".$_SESSION['spe'];
						echo '</span>
							<a style="float:right;" onclick="change_onglet("upload");">Uploader un fichier</a>
						</div>';
						$db = connexion("maquette_14_15");
						$sql = NULL;

						if(!$_SESSION['admin']){
							$sql = 'SELECT modhule,titre, gestionnaire, annee_gestionnaire
							FROM `maquette_14_15`.`modules`
							WHERE annee_gestionnaire = '.$_SESSION["annee"].'
							AND (gestionnaire = "'.$_SESSION["filiere"].'" OR gestionnaire = "'.$_SESSION["filiere"]."-".$_SESSION["spe"].'")';
						}
						else{
							$sql = 'SELECT modhule,titre, gestionnaire
							FROM `maquette_14_15`.`modules`';
						}

						if($sql != NULL){
							$req = mysqli_query($db, $sql) or die(mysqli_error($db));
							while($data = mysqli_fetch_assoc($req))
							{
								echo '
								<div class="col-lg-12 an_bar">
									'.utf8_decode($data["titre"]).'
									</div>
									<table class="col-lg-offset-1 col-lg-10 an_bar_subtab">
										<tr>
											<td>'. utf8_decode($data["modhule"]) .'</td>
											<td>'. $data["gestionnaire"] .'</td>
											<td>Coucou</td>
										</tr>
									</table>';
							}
						}
					}
					?>
					</div>
					<div id="upload">
						<div class="col-lg-12 an_header" id="upload">
							<span style="text-align:left;">Gaétan Young - Et4 Info</span>
							<a style="float:right;" onclick="change_onglet('list');first_upload=false;">Retour à la liste</a>
						</div>
						<div class="col-lg-12 form-group">
						<form id="file-form" method="POST" action="upload.php" enctype="multipart/form-data">
							<input type="file" id="file-select" name="files[]" onchange="addForm();" accept="application/pdf" multiple />
						</form>
						</div>
					</div>
				</section>
			</div>
			<footer class="row">
				Site du BIPS | tous droits déclarés au BIPS.
			</footer>
		</body>
	<script type="text/javascript">
		change_onglet('list');
	</script>
	<script src="js/annales.js"></script>
</html>