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
		<title>BIPS -- Gestion de mon compte</title>
		<link href="css/bootstrap.css" rel="stylesheet" type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/style_BIPS.css" type="text/css">
		<?php 
			if( !$_SESSION['logged'] ){
				?>
					<meta http-equiv="refresh" content="0; URL=index.php">
				<?php
			}

		 ?>
	</head>
	<body>
		<?php if( isset($_POST['prom']) )
		{
			include("connexion.php") ; 
			$bdd = connexion($bddBips) ; 
			$name = $_SESSION['username'] ; 
			$query = " SELECT * FROM users WHERE mail='$name' " ; 
			$answer = $bdd->query($query) ; 
			$data = $answer->fetch() ; 

			if( strcmp($data['filiere']." ".$data['annee']." ".$data['spe'], $_POST['prom']) != 0  )
			{
				$str = split(" ", $_POST['prom']) ;
				/*UPDATE [LOW_PRIORITY] [IGNORE] table_reference
    			SET col_name1={expr1|DEFAULT} [, col_name2={expr2|DEFAULT}] ...
    			[WHERE where_condition]
    			[ORDER BY ...]
    			[LIMIT row_count]*/
    			$queryBis = " UPDATE users SET filiere = '$str[0]', annee = '$str[1]', spe = '$str[2]' WHERE mail='$name' " ; 
    			$bdd->query($queryBis) ; 
			}

		}
	?>
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
				<?php include("module_connexion.php"); ?> 
				<section class="col-lg-9">
					<div margin="25px">
						<div class="table-responsive">
							<table cellspacing="10px" cellpadding="10px">
								<tr>
									<td><h2>Mon compte</h2></td>
								</tr>
								<tr>
									<td>Mon adresse mail</td>
									<td>
									<?php 
										include("connexion.php") ; 
										$bdd = connexion($bddBips) ; 
										$name = $_SESSION['username'] ; 
										if( $_SESSION['admin'] == false )
											$query = " SELECT * FROM users WHERE mail='$name' " ; 
										else 
											$query = "SELECT * FROM users WHERE admin_name='$name' " ; 

										$affiche = $bdd->query($query) ; 
										$data = $affiche->fetch() ; 
										echo $data['mail'] ; 
									 ?>
									</td>
								</tr>
								<?php 
									if( $_SESSION['admin'] ){
										?>
										<tr>
											<td>Mon nom d'utilisateur <br>(administrateurs uniquement)</td>
											<td>
												<?php 
													echo $data['admin_name'] ; 
												?>
											</td>
										</tr><?php
									}

								?>
								<?php
								if( !$data['admin'] && strcmp($data['prom'], "Prof") )
								{
									?>
									<tr>
										<td>
											Ma promotion 
										</td>
										<td>
										<form method="post" action="account.php">
											<select name="prom" size="1">
											<?php 
												$affiche2 = $bdd->query('SELECT * FROM fildepa WHERE semestre=0') ; 
												while( $affiche_data = $affiche2->fetch()){
													if( strcmp($data['filiere'], $affiche_data['filiere'])==0 && strcmp($data['annee'], $affiche_data['annee'])==0 && strcmp($data['spe'], $affiche_data['dept'])==0 ){
														?> 
															<option selected>
														<?php 
													}
													else{
														?>
															<option>
														<?php 
													}
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
										<td><input type="submit" id="mySub" value="Modifier ma promotion" /></td>
										<td></td>
									</tr>

									</form>
								<?php
								}
								else{
									?>
									<tr>
										<td>Mon statut</td>
										<?php
											if( $data['admin'] ){
												echo "<td>Administrateur</td>" ; 
											}
											else{
												echo "<td>Professeur</td>" ; 
											}
										?>
									</tr>
									<?php
								}
								?>
							</table>
						</div>
					</div>
				</section>
			</div>
			<footer class="row">
			Site du BIPS | tous droits déclarés au BIPS. 
			</footer>
	</body>

</html>