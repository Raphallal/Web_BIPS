<?php
	
	// TRAITEMENT DE L'IMAGE A UPLOADER
	// ---------------------------------
	$target_dir = $_POST["directory"];
	$target_file = $target_dir . basename($_FILES['fileImgProduit']["name"]);
	$uploadOk = 1;
	$errorString = "Error :";
	$noErrorString = " ";
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES['fileImgProduit']["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $errorString = $errorString."\n"."File is not an image";
	        $uploadOk = 0;
	    }
	}
	// Check file size
	if ($_FILES['fileImgProduit']["size"] > 500000) {
	    $errorString = $errorString."\n"."Désolé, le fichier est trop lourd";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    $errorString = $errorString."\n"."Désolé, seul les fichiers jpg, jpeg, png et gif sont supportés";
	    $uploadOk = 0;
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    $errorString = $errorString."\n"."Désolé, le fichier existe déjà sur le serveur";
	    $uploadOk = 2;
	}
	// ------------------------------
	// FIN TRAITEMENT IMAGE

	//RECUPERATION DES INFORMATIONS DU PRODUIT
	$nom = $_POST["nom"];
	$description = $_POST["description"];
	$prixAdh = $_POST["prixAdh"];
	$prixNonAdh = $_POST["prixNonAdh"];

	if($nom == ""){
		$uploadOk = 0;
		$errorString = $errorString."\n"."Le champ nom n'a pas été remplie";
	}
	if($description == ""){
		$uploadOk = 0;
		$errorString = $errorString."\n"."Le champ description n'a pas été remplie";
	}
	if($_FILES['fileImgProduit']["name"] == ""){
		$uploadOk = 3;
	}
	//-------------------------------------

	//TRAITEMENT
	if ($uploadOk == 0) {
	    
	}
	else if ($uploadOk == 1) {
	    if (move_uploaded_file($_FILES['fileImgProduit']["tmp_name"], $target_file)) {
	        $noErrorString = "Le fichier ". basename( $_FILES['fileImgProduit']["name"]). " a été uploadé avec succès.";
	        include("connexion.php") ; 
			$bdd = connexion($bddBips) ; 

			$bdd->query('INSERT INTO boutique (titre, description, prixadherent, prixnonadherent, envente, imagepath) VALUES ('.'\''.$nom.'\', '.'\''.$description.'\' , '.'\''.$prixAdh.'\', '.'\''.$prixNonAdh.'\', 1 , '.'\'images/'.basename( $_FILES['fileImgProduit']["name"]).'\')');
	    } else {
	        $errorString = $errorString."\n"."Désolé,  une erreur est survenue lorsque le ficher à été uploadé";
	    	$uploadOk = 0;
	    }
	}
	else if ($uploadOk == 2) {
	    include("connexion.php") ; 
		$bdd = connexion($bddBips) ; 

		$bdd->query('INSERT INTO boutique (titre, description, prixadherent, prixnonadherent, envente, imagepath) VALUES ('.'\''.$nom.'\', '.'\''.$description.'\' , '.'\''.$prixAdh.'\', '.'\''.$prixNonAdh.'\', 1 , '.'\'images/'.basename( $_FILES['fileImgProduit']["name"]).'\')');
	}
	else if ($uploadOk == 3) {
	    include("connexion.php") ; 
		$bdd = connexion($bddBips) ; 

		$bdd->query('INSERT INTO boutique (titre, description, prixadherent, prixnonadherent, envente, imagepath) VALUES ('.'\''.$nom.'\', '.'\''.$description.'\' , '.'\''.$prixAdh.'\', '.'\''.$prixNonAdh.'\', 1 , \'images/aucune.png\')');
	}

?>

<script type="text/javascript">
	var errorString = <?php echo json_encode($errorString);?>;
 	var uploadOk = parseInt('<?php echo $uploadOk; ?>');

 	document.location.replace("index.php?page=boutique");

	if(uploadOk == 0){
		alert(errorString);
	}
</script>