function changeView(){
	if(document.getElementById('boutiqueTable').className == 'table header-fixed boutique'){
		document.getElementById('boutiqueTable').className = 'table header-fixed boutique non-visible';
		document.getElementById('formAddProduit').className = 'visible';
	}
	else{
		document.getElementById('boutiqueTable').className = 'table header-fixed boutique';
		document.getElementById('formAddProduit').className = 'non-visible';
	}
}