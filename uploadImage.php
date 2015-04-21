<?php
	//$target_dir = "images/";
	$target_dir = $_POST["directory"];
	$target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
	$uploadOk = 1;
	$errorString = "Error :";
	$noErrorString = " ";
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $errorString = $errorString."\n"."File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        //echo "File is not an image.";
	        $errorString = $errorString."\n"."File is not an image";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    //echo "Sorry, file already exists.";
	    $errorString = $errorString."\n"."Désolé, le fichier existe déjà sur le serveur";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES['fileToUpload']["size"] > 500000) {
	    //echo "Sorry, your file is too large.";
	    $errorString = $errorString."\n"."Désolé, le fichier est trop lourd";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $errorString = $errorString."\n"."Désolé, seul les fichiers jpg, jpeg, png et gif sont supportés";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //echo "Sorry, your file was not uploaded.";
	    $errorString = $errorString."\n"."Fichier non uploadé";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES['fileToUpload']["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $_FILES['fileToUpload']["name"]). " has been uploaded.";
	        $noErrorString = "Le fichier ". basename( $_FILES['fileToUpload']["name"]). " a été uploadé avec succès.";
	    } else {
	        //echo "Sorry, there was an error uploading your file.";
	        $errorString = $errorString."\n"."Désolé,  une erreur est survenue lorsque le ficher à été uploadé";
	    	$uploadOk = 0;
	    }
	}
?>

<script type="text/javascript">

	var errorString = <?php echo json_encode($errorString);?>;
	var noErrorString = <?php echo json_encode($noErrorString);?>;
 	var uploadOk = parseInt('<?php echo $uploadOk; ?>');

 	document.location.replace("index.php?page=clubs");

	if(uploadOk == 0){
		alert(errorString);
	}
	else if(uploadOk == 1){
		alert(noErrorString);
	}
</script>