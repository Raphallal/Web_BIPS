<?php session_start()  ;
	if( !isset($_SESSION['logged'] ) || !isset($_SESSION['admin']) || !isset($_SESSION['username']) )
	{
		$_SESSION['logged'] = false ;
		$_SESSION['admin'] = false ;
		$_SESSION['username'] = NULL ;
		$_SESSION['filiere'] = NULL ;
 		$_SESSION['annee'] = NULL ;
 		$_SESSION['spe'] = NULL ;
	}

include("connexion.php");

$db = connexion("bips");
$valid_formats = array("pdf");
$max_file_size = 1024*4096; //4Mo
$path = "files/"; // Upload directory
$count = 0;
$module = $_POST['module'];
$typeDoc = $_POST['typeDoc'];
$year = $_POST['year'];

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to exeicute all files
	foreach ($_FILES['files']['name'] as $f => $name) {
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }
	    if ($_FILES['files']['error'][$f] == 0) {
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files
	        	$filename = $module[$f].$typeDoc[$f].$year[$f].".pdf";
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$filename)){
					$sql = "INSERT INTO files(path, modhule, type, year, uploader, id)";
					$sql .= "VALUES('".$path.$filename."','".$module[$f]."','".$typeDoc[$f]."','".$year[$f]."','".$_SESSION["username"]."',NULL);";

					mysqli_query($db, $sql) or die(mysql_error($db));
	            	$count++; // Number of successfully uploaded file
	            }

	        }
	    }
	}
}


?>

<script type="text/javascript">
 	document.location.replace("annales.php");
</script>
