
<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="bds" onclick="changeClub('bds');">BDS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="capps" onclick="changeClub('capps');">CAPPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="cinefips" onclick="changeClub('cinefips');">CinéFips</span>
	<span class="col-lg-3 onglet_hoverable onglet_club" id="clubactus" onclick="changeClub('clubactus');">Club Actu</span>
	<span class="col-lg-3 onglet_hoverable onglet_club_droite" id="cohesion" onclick="changeClub('cohesion');">Cohésion</span>
</nav>
<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="journale" onclick="changeClub('journale');">Journal</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="kfet" onclick="changeClub('kfet');">KFet</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="pompom" onclick="changeClub('pompom');">PomPom</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="popsgames" onclick="changeClub('popsgames');">PopsGames</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="spips" onclick="changeClub('spips');">SPIPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club_droite" id="zikifips" onclick="changeClub('zikifips');">Zikifips</span>
</nav>

<section class="sectionClub">
	<br>
	<span id="presentation_contenu" class="visible">
		<?php
			$req = $bdd->query('SELECT titre, contenu FROM article WHERE idpage = 3');
			while ($donnees = $req->fetch()){
				echo '<p>';
				echo '<h2 class="titre">' . $donnees['titre'] . '</h2>';
				echo '<h3>' . $donnees['contenu'] . '</h3>';
				echo '</p>';
			}
			$req->closeCursor();
		?>
	</span>
	<span id="bds_contenu" class="non-visible">
		<?php include("clubs/bds.php"); ?>
	</span>
	<span id="capps_contenu" class="non-visible">
		<?php include("clubs/capps.php"); ?>
	</span>
	<span id="cinefips_contenu" class="non-visible">
		<?php include("clubs/cinefips.php"); ?>
	</span>
	<span id="clubactus_contenu" class="non-visible">
		<?php include("clubs/clubactu.php"); ?>
	</span>
	<span id="cohesion_contenu" class="non-visible">
		<?php include("clubs/cohesion.php"); ?>
	</span>
	<span id="journale_contenu" class="non-visible">
		<?php include("clubs/journal.php"); ?>
	</span>
	<span id="kfet_contenu" class="non-visible">
		<?php include("clubs/kfet.php"); ?>
	</span>
	<span id="pompom_contenu" class="non-visible">
		<?php include("clubs/pompom.php"); ?>
	</span>
	<span id="popsgames_contenu" class="non-visible">
		<?php include("clubs/popsgames.php"); ?>
	</span>
	<span id="spips_contenu" class="non-visible">
		<?php include("clubs/spips.php"); ?>
	</span>
	<span id="zikifips_contenu" class="non-visible">
		<?php include("clubs/zikifips.php"); ?>
	</span>
</section>
