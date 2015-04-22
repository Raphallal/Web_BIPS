<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="bds" onclick="alertValidation('Bds');changeClub('bds');">BDS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="capps" onclick="alertValidation('Capps');changeClub('capps');">CAPPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="cinefips" onclick="alertValidation('Cine');changeClub('cinefips');">CinéFips</span>
	<span class="col-lg-3 onglet_hoverable onglet_club" id="clubactus" onclick="alertValidation('Actu');changeClub('clubactus');">Club Actu</span>
	<span class="col-lg-3 onglet_hoverable onglet_club_droite" id="cohesion" onclick="alertValidation('Cohe');changeClub('cohesion');">Cohésion</span>
</nav>
<nav class="onglets_club row">
	<span class="col-lg-2 onglet_hoverable onglet_club" id="journal" onclick="alertValidation('Journal');changeClub('journal');">Journal</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="kfet" onclick="alertValidation('Kfet');changeClub('kfet');">KFet</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="pompom" onclick="alertValidation('Pom');changeClub('pompom');">PomPom</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="popsgames" onclick="alertValidation('Pops');changeClub('popsgames');">PopsGames</span>
	<span class="col-lg-2 onglet_hoverable onglet_club" id="spips" onclick="alertValidation('Spips');changeClub('spips');">SPIPS</span>
	<span class="col-lg-2 onglet_hoverable onglet_club_droite" id="zikifips" onclick="alertValidation('Ziki');changeClub('zikifips');">Zikifips</span>
</nav>

<section class="sectionClub">
	<br>
	<span id="presentation_contenu" class="visible">
		<p>
			<h2 class="titre">Les clubs</h2>
			<h3>Ici ya des infos sur les clubs en général
			</h3>
		</p>
	</span>
	
	<span id="bds_contenu" class="non-visible">
		<input type="submit" id="modifBds" class="non-visible col-lg-12" value="Modifier" onclick="modifier(this.value, 'bds.php')" />
		<br>
		<br>
		<?php include("clubs/bds.php"); ?>
	</span>
	<span id="capps_contenu" class="non-visible">
		<?php include("clubs/capps.php"); ?>
	</span>
	<span id="cinefips_contenu" class="non-visible">
		<input type="submit" id="modifCine" class="non-visible col-lg-12" value="Modifier" onclick="modifier(this.value, 'cinefips.php')" />
		<br>
		<br>
		<?php include("clubs/cinefips.php"); ?>
	</span>
	<span id="clubactus_contenu" class="non-visible">
		<?php include("clubs/clubactu.php"); ?>
	</span>
	<span id="cohesion_contenu" class="non-visible">
		<?php include("clubs/cohesion.php"); ?>
	</span>
	<span id="journal_contenu" class="non-visible">
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
