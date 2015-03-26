
<nav class="onglets_club">
	<span class="col-lg-2 onglet_hoverable club clubHaut" id="bds" onclick="changeClub('bds');">BDS</span>
	<span class="col-lg-2 onglet_hoverable club clubHaut" id="capps" onclick="changeClub('capps');">CAPPS</span>
	<span class="col-lg-2 onglet_hoverable club clubHaut" id="cinefips" onclick="changeClub('cinefips');">CinéFips</span>
	<span class="col-lg-3 onglet_hoverable club clubHaut" id="clubactus" onclick="changeClub('clubactus');">Club Actus</span>
	<span class="col-lg-3 onglet_hoverable club clubHaut" id="cohesion" onclick="changeClub('cohesion');">Cohésion</span>
	<br>	
	<span class="col-lg-2 onglet_hoverable club clubBas" id="journal" onclick="changeClub('journal');">Journal</span>
	<span class="col-lg-2 onglet_hoverable club clubBas" id="kfet" onclick="changeClub('kfet');">KFet</span>
	<span class="col-lg-2 onglet_hoverable club clubBas" id="pompom" onclick="changeClub('pompom');">PomPom</span>
	<span class="col-lg-2 onglet_hoverable club clubBas" id="popsgames" onclick="changeClub('popsgames');">PopsGames</span>
	<span class="col-lg-2 onglet_hoverable club clubBas" id="spips" onclick="changeClub('spips');">SPIPS</span>
	<span class="col-lg-2 onglet_hoverable club clubBas" id="zikifips" onclick="changeClub('zikifips');">Zikifips</span>
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
