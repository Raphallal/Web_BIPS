    function droitModif(){
        var username = getUsernameFromSession();
        var admin = getAdminFromSession();
        if(username == 'bips' && admin == 1){
            document.getElementById('modifCine').className = 'visible col-lg-12';
            document.getElementById('modifBds').className = 'visible col-lg-12';
            document.getElementById('modifCapps').className = 'visible col-lg-12';
            document.getElementById('modifClubActu').className = 'visible col-lg-12';
            document.getElementById('modifCohesion').className = 'visible col-lg-12';
            document.getElementById('modifJournal').className = 'visible col-lg-12';
            document.getElementById('modifKfet').className = 'visible col-lg-12';
            document.getElementById('modifPompom').className = 'visible col-lg-12';
            document.getElementById('modifPopsgames').className = 'visible col-lg-12';
            document.getElementById('modifSpips').className = 'visible col-lg-12';
            document.getElementById('modifZikifips').className = 'visible col-lg-12';
        }
        else if(username == 'cinefips' && admin == 1){
            document.getElementById('modifCine').className = 'visible col-lg-12';
        }
        else if(username == 'capps' && admin == 1){
            document.getElementById('modifCapps').className = 'visible col-lg-12';
        }
        else if(username == 'clubactu' && admin == 1){
            document.getElementById('modifClubActu').className = 'visible col-lg-12';
        }
        else if(username == 'cohesion' && admin == 1){
            document.getElementById('modifCohesion').className = 'visible col-lg-12';
        }
        else if(username == 'journal' && admin == 1){
           document.getElementById('modifJournal').className = 'visible col-lg-12';
        }
        else if(username == 'kfet' && admin == 1){
             document.getElementById('modifKfet').className = 'visible col-lg-12';
        }
        else if(username == 'pompom' && admin == 1){
            document.getElementById('modifPompom').className = 'visible col-lg-12';
        }
        else if(username == 'popsgames' && admin == 1){
            document.getElementById('modifPopsgames').className = 'visible col-lg-12';
        }
        else if(username == 'spips' && admin == 1){
            document.getElementById('modifSpips').className = 'visible col-lg-12';
        }
        else if(username == 'zikifips' && admin == 1){
            document.getElementById('modifZikifips').className = 'visible col-lg-12';
        }
    }

    function modifier(inputValue, namePage){
        if(inputValue == "Modifier"){
            divBefore = document.getElementById(namePage).innerHTML;
            anc_page_club = namePage;
            document.getElementById('modif'+club).className = 'visible col-lg-12';
            document.getElementById('gestionImg'+club).className = 'visible';
            //document.getElementById('img1'+club).className = 'non-visible';
            document.getElementById('descriptionClub'+club).className = 'non-visible';
            //document.getElementById('textImg1'+club).value = getName('img1'+club);
            //document.getElementById('textImg2'+club).value = getName('img2'+club);
            //document.getElementById('textImg3'+club).value = getName('img3'+club);
            document.getElementById('selectImg1'+club).innerHTML = getSelectOptionFromDirectory('images/clubs/'+club);
            document.getElementById('selectImg1'+club).value = getName('img1'+club);
            document.getElementById('selectImg2'+club).innerHTML = getSelectOptionFromDirectory('images/clubs/'+club);
            document.getElementById('selectImg2'+club).value = getName('img2'+club);
            document.getElementById('selectImg3'+club).innerHTML = getSelectOptionFromDirectory('images/clubs/'+club);
            document.getElementById('selectImg3'+club).value = getName('img3'+club);
            CKEDITOR.replace('descriptionClub'+club);
            document.getElementById('modif'+club).value = "Valider";

        }
        else if(inputValue == "Valider"){
            var id = "descriptionClub";
            id += club;
            var text = CKEDITOR.instances[id].getData();
            document.getElementById('descriptionClub'+club).innerHTML = text;
            document.getElementById('descriptionClub'+club).className = 'visible';
            CKEDITOR.instances[id].destroy();
            //document.getElementById('img1'+club).className = 'visible';
            document.getElementById('modif'+club).value = "Modifier";
            document.getElementById('gestionImg'+club).className = 'non-visible';

            saveEditorClub(namePage,document.getElementById(namePage).outerHTML);
        }
    }

    //Fonction d'instance permettant de vérifier si le navigateur supporte l'objet XMLHTTPRequest
    function objet_XMLHttpRequest(){
        //On déclare une variable "mavariable" à null
        var mavariable = null;
        //Teste si le navigateur prend en charge les XMLHttpRequest
        if (window.XMLHttpRequest || window.ActiveXObject){
            // Si Internet Explorer alors on utilise les ActiveX
            if(window.ActiveXObject){
                //On teste IE7 ou supérieur
                try{
                    mavariable = new ("Msxml2.XMLHTTP");
                }
                //Si une erreur est levée, alors c'est IE 6 ou inférieur
                catch(e){
                    mavariable = new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            //Navigateurs récents (Firefox, Opéra, Chrome, Safari, ...)
            else{
                mavariable = new XMLHttpRequest();
            }
        }
        //XMLHttpRequest non supporté par le navigateur
        else{
            alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
            return null;
        }
        //On retourne l'objet mavariable
        return mavariable;
    }

    function saveEditorClub(namePage, innerPage){
        // creation d'un oblet xmlhttprequest
        var xhr = objet_XMLHttpRequest();
        // Lorsqu'un réponse est émise par le serveur   
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                //on ne fait rien avec xhr.responseText
            }
        };
        //envoie de la requete en methode post
        xhr.open('POST', 'saveFileClub.php',false); // request asynchrone 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send('namePage='+namePage+'&innerPage='+innerPage);
    }

    /*function uploadImage(fileToUpload){
        // creation d'un oblet xmlhttprequest
        var xhr = objet_XMLHttpRequest();
        // Lorsqu'un réponse est émise par le serveur   
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                alert(xhr.responseText);
            }
        };
        //envoie de la requete en methode post
        xhr.open('POST', 'uploadImage.php',true); // request asynchrone 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send('fileToUpload='+fileToUpload);
    }*/

    function getName(id){
        return document.getElementById(id).getAttribute('name');
    }

    function getSelectOptionFromDirectory(directory,selectToUpdate){
        // creation d'un oblet xmlhttprequest
        var xhr = objet_XMLHttpRequest();
        var returnString;
        // Lorsqu'un réponse est émise par le serveur   
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                //alert(xhr.responseText);
                returnString = xhr.responseText;                
            }
        };
        //envoie de la requete en methode post
        xhr.open('POST', 'getOptionDirectory.php',false); // request synchrone 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send('directory='+directory);

        return returnString;
    }

    function changeImg(inputID,imagePath,imageName){
        document.getElementById(inputID).src = imagePath+imageName;
        document.getElementById(inputID).name = imageName;
    }

    function alertValidation(newClub){
        if(club != "none"){
            if(document.getElementById('modif'+club).className == 'visible col-lg-12' && document.getElementById('modif'+club).value == "Valider"){
                if(confirm('Attention, les modifications n\'ont pas été valider \nVoulez-vous continuer (les changements seront perdus)')){
                    var id = "descriptionClub";
                    id += club;
                    document.getElementById('descriptionClub'+club).className = 'visible';
                    CKEDITOR.instances[id].destroy();
                    document.getElementById('modif'+club).value = "Modifier";
                    document.getElementById('gestionImg'+club).className = 'non-visible';
                    document.getElementById(anc_page_club).innerHTML = divBefore;
                    alertNoChange = 0;
                }
                else{
                    alertNoChange = 1;
                }
            }
            else{
                alertNoChange = 0;
            }
        }
        if(alertNoChange == 0 && newClub != "none"){
            club = newClub;
        }
    }