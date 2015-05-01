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
$db = connexion($bddBips);
if(!$_SESSION['admin']) $sql = 'DELETE FROM `bips`.`files`
WHERE files.uploader = "'.$_SESSION["username"].'"
AND files.id = '.$_GET["id"];

else $sql = 'DELETE FROM `bips`.`files`
WHERE files.id = '.$_GET["id"];

mysqli_query($db, $sql) or die(mysqli_error($db));
?>

<script type="text/javascript">
 	document.location.replace("annales.php");
</script>
