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
  $db = connexion("maquette_14_15");
  $sql = 'SELECT modhule,titre
    FROM `maquette_14_15`.`modules`
    WHERE annee_gestionnaire = "'.$_SESSION["annee"].'"
    AND (gestionnaire = "'.$_SESSION["filiere"].'" OR gestionnaire = "'.$_SESSION["filiere"]."-".$_SESSION["spe"].'")';
  $json_response = array();
  $req = mysqli_query($db, $sql) or die(mysqli_error($db));
  while($data = mysqli_fetch_assoc($req))
  {
    $res["module"] = $data["modhule"];
    $res["titre"] = $data["titre"]." - S".substr($data["modhule"],1,1);
    array_push($json_response, $res);
  }
  echo json_encode($json_response);
?>
