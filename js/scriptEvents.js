  function modifierEvent(idInput, idarticle){
        if(document.getElementById('button'+idInput).value == "Modifier"){
                document.getElementById(idInput).className = 'non-visible modifEvent';
                CKEDITOR.replace(idInput);
                document.getElementById('button'+idInput).value = "Valider";
                alertNoChange = 1;
            }
            else if(document.getElementById('button'+idInput).value == "Valider"){
                var text = CKEDITOR.instances[idInput].getData();
                document.getElementById(idInput).className = 'visible modifAEvent';
                CKEDITOR.instances[idInput].destroy();
                document.getElementById('button'+idInput).value = "Modifier";

                saveEvent(idarticle,text,1);

                alertNoChange = 0;
            }
    }

    function saveEvent(idArticle, contenu, idPage){
        // creation d'un oblet xmlhttprequest
        var xhr = objet_XMLHttpRequest();
        // Lorsqu'un réponse est émise par le serveur   
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                //on ne fait rien avec xhr.responseText
            }
        };
        //envoie de la requete en methode post
        xhr.open('POST', 'updateArticle.php',true); 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send('idarticle='+idArticle+'&contenu='+contenu+'&idpage='+idPage);
    }


    function supprimerEvent(idArticle, idPage){
        if(confirm('Etes-vous certain de supprimer cet event ?')){
            // creation d'un oblet xmlhttprequest
            var xhr = objet_XMLHttpRequest();
            // Lorsqu'un réponse est émise par le serveur   
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                    //on ne fait rien avec xhr.responseText
                    location.reload();
                }
            };
            //envoie de la requete en methode post
            xhr.open('POST', 'deleteArticle.php',true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send('idarticle='+idArticle+'&idpage='+idPage);
            }
        else{
            
        }
    }

    function ajouterEvent(idPage){
        var titre = prompt("Saisir le titre de l'event","Titre");
        while(titre != null && titre == ""){
            titre = prompt("Saisir un titre valide !!!","Titre");
        }
        if(titre != null){
            // creation d'un oblet xmlhttprequest
            var xhr = objet_XMLHttpRequest();
            // Lorsqu'un réponse est émise par le serveur   
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                    //on ne fait rien avec xhr.responseText
                    location.reload();
                }
            };
            //envoie de la requete en methode post
            xhr.open('POST', 'insertArticle.php',true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send('titre='+titre+'&idpage='+idPage);
        }
    }