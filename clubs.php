<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="bds" onclick="alertValidation('Bds');changeClub('bds');">BDS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="capps" onclick="alertValidation('Capps');changeClub('capps');">CAPPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="cinefips" onclick="alertValidation('Cine');changeClub('cinefips');">CinéFips</span>
	<span class="col-lg-3 onglet_hoverable onglet_club" id="clubactus" onclick="alertValidation('ClubActu');changeClub('clubactus');">Club Actu</span>
	<span class="col-lg-3 onglet_hoverable onglet_club_droite" id="cohesion" onclick="alertValidation('Cohesion');changeClub('cohesion');">Cohésion</span>
</nav>
<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="journal" onclick="alertValidation('Journal');changeClub('journal');">Journal</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="kfet" onclick="alertValidation('Kfet');changeClub('kfet');">KFet</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="pompom" onclick="alertValidation('Pompom');changeClub('pompom');">PomPom</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="popsgames" onclick="alertValidation('Popsgames');changeClub('popsgames');">PopsGames</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="spips" onclick="alertValidation('Spips');changeClub('spips');">SPIPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club_droite" id="zikifips" onclick="alertValidation('Zikifips');changeClub('zikifips');">Zikifips</span>
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
		<div id="modifBds" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'bds.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/bds.php"); ?>
	</span>
	<span id="capps_contenu" class="non-visible">
		<div id="modifCapps" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'capps.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/capps.php"); ?>
	</span>
	<span id="cinefips_contenu" class="non-visible">
		<div id="modifCine" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'cinefips.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/cinefips.php"); ?>
	</span>
	<span id="clubactus_contenu" class="non-visible">
		<div id="modifClubActu" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'clubActu.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/clubactu.php"); ?>
	</span>
	<span id="cohesion_contenu" class="non-visible">
		<div id="modifCohesion" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'cohesion.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/cohesion.php"); ?>
	</span>
	<span id="journal_contenu" class="non-visible">
		<div id="modifJournal" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'journal.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/journal.php"); ?>
	</span>
	<span id="kfet_contenu" class="non-visible">
		<div id="modifKfet" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'kfet.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/kfet.php"); ?>
	</span>
	<span id="pompom_contenu" class="non-visible">
		<div id="modifPompom" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'pompom.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/pompom.php"); ?>
	</span>
	<span id="popsgames_contenu" class="non-visible">
		<div id="modifPopsgames" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'popsgames.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/popsgames.php"); ?>
	</span>
	<span id="spips_contenu" class="non-visible">
		<div id="modifSpips" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'spips.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/spips.php"); ?>
	</span>
	<span id="zikifips_contenu" class="non-visible">
		<div id="modifZikifips" class="non-visible col-lg-12">
			<input type="submit" class="col-lg-12" value="Modifier" onclick="modifier(this.value, 'zikifips.php')" />
			<br>
			<br>
		</div>
		<br>
		<br>
		<?php include("clubs/zikifips.php"); ?>
	</span>
</section>

