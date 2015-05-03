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

function droitModif(){
	var username = getUsernameFromSession();
	var admin = getAdminFromSession();
	if(username == 'bips' && admin == 1){
		// pages clubs
		document.getElementById('modifCine').className = 'visible';
		document.getElementById('modifBds').className = 'visible';
		document.getElementById('modifCapps').className = 'visible';
		document.getElementById('modifClubActu').className = 'visible';
		document.getElementById('modifCohesion').className = 'visible';
		document.getElementById('modifJournal').className = 'visible';
		document.getElementById('modifKfet').className = 'visible';
		document.getElementById('modifPompom').className = 'visible';
		document.getElementById('modifPopsgames').className = 'visible';
		document.getElementById('modifSpips').className = 'visible';
		document.getElementById('modifZikifips').className = 'visible';

		//page accueil
		var elemsAcc = document.getElementsByClassName('inputArticleAcc');
		for(var i = 0; i < elemsAcc.length; i++) {
			elemsAcc[i].className = 'visible inputArticleAcc';
		}

		//page events
		var elemsEvents = document.getElementsByClassName('inputEvent');
		for(var i = 0; i < elemsEvents.length; i++) {
			elemsEvents[i].className = 'visible inputEvent';
		}

		//page journal
		var elemsJournal = document.getElementsByClassName('inputJournal');
		for(var i = 0; i < elemsEvents.length; i++) {
			elemsJournal[i].className = 'visible inputJournal';
		}
	}
	else if(username == 'cinefips' && admin == 1){
		document.getElementById('modifCine').className = 'visible';
	}
	else if(username == 'capps' && admin == 1){
		document.getElementById('modifCapps').className = 'visible';
	}
	else if(username == 'clubactu' && admin == 1){
		document.getElementById('modifClubActu').className = 'visible';
	}
	else if(username == 'cohesion' && admin == 1){
		document.getElementById('modifCohesion').className = 'visible';
	}
	else if(username == 'journal' && admin == 1){
	   document.getElementById('modifJournal').className = 'visible';

	   var elemsJournal = document.getElementsByClassName('inputJournal');
		for(var i = 0; i < elemsEvents.length; i++) {
			elemsJournal[i].className = 'visible inputJournal';
		}
	}
	else if(username == 'kfet' && admin == 1){
		 document.getElementById('modifKfet').className = 'visible';
	}
	else if(username == 'pompom' && admin == 1){
		document.getElementById('modifPompom').className = 'visible';
	}
	else if(username == 'popsgames' && admin == 1){
		document.getElementById('modifPopsgames').className = 'visible';
	}
	else if(username == 'spips' && admin == 1){
		document.getElementById('modifSpips').className = 'visible';
	}
	else if(username == 'zikifips' && admin == 1){
		document.getElementById('modifZikifips').className = 'visible';
	}
}

function changePage(page){
	if(alertNoChange == 0){
		resetClub();
		if(page == 'galerie')
			location.href="galerie.php";
		if(page == 'annales')
		location.href="annales.php";
		else{
			document.getElementById(anc_onglet+'_onglet').className = 'col-lg-1 onglet onglet_hoverable';
			document.getElementById(page+'_onglet').className = 'col-lg-1 onglet onglet_choisi';
			document.getElementById(anc_onglet+'_contenu').className = 'non-visible';
			document.getElementById(page+'_contenu').className = 'visible';
			anc_onglet = page;
			window.history.pushState(document.title,document.title,"?page="+page);
		}
	}
	else if(confirm('Attention, les modifications n\'ont pas été valider \nVoulez-vous continuer (les changements seront perdus)')){
		alertNoChange = 0;
		location.reload();
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