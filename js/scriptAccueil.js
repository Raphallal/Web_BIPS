    function modifierArticleAcc(id){
        if(document.getElementById('button'+id).value == "Modifier"){
                document.getElementById(id).className = 'non-visible modifArticleAcc';
                CKEDITOR.replace(id);
                document.getElementById('button'+id).value = "Valider";
                alertNoChange = 1;
            }
            else if(document.getElementById('button'+id).value == "Valider"){
                var text = CKEDITOR.instances[id].getData();
                document.getElementById(id).className = 'visible modifArticleAcc';
                CKEDITOR.instances[id].destroy();
                document.getElementById('button'+id).value = "Modifier";

                saveArticleAcc(id,text,1);

                alertNoChange = 0;
            }
    }

    function saveArticleAcc(idArticle, contenu, idPage){
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


    function supprimerArticleAcc(idArticle, idPage){
        if(confirm('Etes-vous certain de supprimer cet article ?')){
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

    function ajouterArticleAcc(idPage){
        var titre = prompt("Saisir le titre de l'article","Titre");
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
                    alert(xhr.responseText);
                    location.reload();
                }
            };
            //envoie de la requete en methode post
            xhr.open('POST', 'insertArticle.php',true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send('titre='+titre+'&idpage='+idPage);
        }
    }