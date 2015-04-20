setInterval('checkFields()', 500) ; 

function checkFields(){
	var mail, pwd, submit ; 
	mail = checkMail( document.getElementById('mail1'), document.getElementById('mail2') ) ; 
	pwd = checkPwd( document.getElementById('pwd1'), document.getElementById('pwd2') ) ; 
	submit = document.getElementById('mySub') ; 
	if( mail && pwd )
	{
		submit.disabled = false ; 
	}
	else
	{
		submit.disabled = true ; 
	}
}

String.prototype.escape = function() {
    var tagsToReplace = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;', 
        '=': '&eq;',
        '\'': '&ap;',
        '\\': '&as;'
    };
    return this.replace(/[&<>]/g, function(tag) {
        return tagsToReplace[tag] || tag;
    });
};

function checkMail( mail1, mail2 ){
	var point ; 
	if( (mail1.value.length != mail2.value.length) || mail1.value.length == 0 || mail2.value.length == 0 )
	{
		document.getElementById('errorMail1').style.display = "block" ; 
		document.getElementById('errorMail2').style.display =" none" ; 
		return false ; 
	}
	else
	{
		if( mail1.value == mail2.value )
		{
			if( (mail1.value.indexOf('@u-psud.fr') != mail1.value.length - 10) || ( (point = mail1.value.indexOf('.')) == mail1.value.length -3) ){
				document.getElementById('errorMail1').style.display = "none" ; 
				document.getElementById('errorMail2').style.display = "block" ; 
				return false ; 
			}
			else{
				if( mail1.value.indexOf('@') == point+1 ){
					document.getElementById('errorMail1').style.display = "none" ; 
					document.getElementById('errorMail2').style.display = "block" ; 
					return false ; 	
				}
				else{
					document.getElementById('errorMail1').style.display = "none" ; 
					document.getElementById('errorMail2').style.display = "none" ; 
					return true ; 
				}
				
			}
		}
		else{
			document.getElementById('errorMail1').style.display = "block" ; 
			document.getElementById('errorMail2').style.display = "none" ; 
			return false ; 
		}
	}
}

function checkPwd( pwd1, pwd2 ){
	if( pwd1.value.length < 6 || pwd2.value.length < 6 ){
		document.getElementById('errorPwd2').style.display = "block" ; 
		document.getElementById('errorPwd1').style.display = "none" ; 
		return false ; 
	}
	else{
		// on verifie qu'il y a au moins une lettre un chiffre 
		if( pwd1.value.length != pwd2.value.length )
		{
			document.getElementById('errorPwd2').style.display = "none" ; 
			document.getElementById('errorPwd1').style.display = "block" ; 
			return false ; 	
		}
		else if(pwd1.value != pwd2.value) {
			document.getElementById('errorPwd2').style.display = "none" ; 
			document.getElementById('errorPwd1').style.display = "block" ; 
			return false ; 
		}
		else{
			document.getElementById('errorPwd2').style.display = "none" ; 
			document.getElementById('errorPwd1').style.display = "none" ; 
			return true ; 
		}
	}
}
