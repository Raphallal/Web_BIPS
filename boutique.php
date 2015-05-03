<p>
	<table id="boutiqueTable" class="table header-fixed boutique">
	<thead class="floating-header">
		<tr>
			<th class="thBoutique mid">Nom</th>
			<th class="thBoutique grand">Descriptif</th>
			<th class="thBoutique petit">Prix adhérent</th>
			<th class="thBoutique petit">Prix non adhérent</th>
			<th class="thBoutique mid">Image</th>
		</tr>
	</thead>
	
	<tbody>
			
		<?php
		$req = $bdd->query('SELECT idproduit, titre, description, prixadherent, prixnonadherent, imagepath, date FROM boutique WHERE envente=1');
		$i = 0;

		while ($donnees = $req->fetch()){
			//$image = imagecreatefromjpeg($donnees['imagepath']);
			$filename = $donnees['imagepath'];

			/*$thumb_width = 80;
			$thumb_height = 60;

			$width = imagesx($image);
			$height = imagesy($image);

			$original_aspect = $width / $height;
			$thumb_aspect = $thumb_width / $thumb_height;

			if ( $original_aspect >= $thumb_aspect )
			{
			   // If image is wider than thumbnail (in aspect ratio sense)
			   $new_height = $thumb_height;
			   $new_width = $width / ($height / $thumb_height);
			}
			else
			{
			   // If the thumbnail is wider than the image
			   $new_width = $thumb_width;
			   $new_height = $height / ($width / $thumb_width);
			}

			$thumb = imagecreatetruecolor( $thumb_width, $thumb_height );

			// Resize and crop
			imagecopyresampled($thumb,
			                   $image,
			                   0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
			                   0 - ($new_height - $thumb_height) / 2, // Center the image vertically
			                   0, 0,
			                   $new_width, $new_height,
			                   $width, $height);
			imagejpeg($thumb, $filename, 80);*/

			if($i % 2 != 0){
				echo '<tr class="fondGris">';
				echo '<td class="tdBoutique mid">'.$donnees['titre'].'</td\>';
				echo '<td class="tdBoutique grand">'.$donnees['description'].'</td\>';
				echo '<td class="tdBoutique petit dore">'.$donnees['prixadherent'].' €</td\>';
				echo '<td class="tdBoutique petit rouge">'.$donnees['prixnonadherent'].' €</td\>';
				echo '<td class="tdBoutique mid"><img width=80 height=60 src="'.$filename.'"></td\>';
				echo '</tr>';
			}
			else{
				echo '<tr>';
				echo '<td class="tdBoutique mid">'.$donnees['titre'].'</td\>';
				echo '<td class="tdBoutique grand">'.$donnees['description'].'</td\>';
				echo '<td class="tdBoutique petit dore">'.$donnees['prixadherent'].' €</td\>';
				echo '<td class="tdBoutique petit rouge">'.$donnees['prixnonadherent'].' €</td\>';
				echo '<td class="tdBoutique mid"><img width=80 height=60 src="'.$filename.'"></td\>';
				echo '</tr>';
			}

			$i = $i +1;
		}
		$req->closeCursor();

		/*for($i =0; $i < 55; $i++){
			if($i % 2 != 0)
				echo 	"<tr class='fondGris'>
							<td class='tdBoutique mid'>String polytech</td\>
							<td class='tdBoutique grand'>Un magnifique string aux couleurs de l'école pour les plus dépravés d'entre vous</td>
							<td class='tdBoutique petit dore'>17.00€</td>
							<td class='tdBoutique petit rouge'>20.00€</td>
							<td class='tdBoutique mid'><img src= " . $filename . "></td>
						</tr>";
			else
				echo "<tr>
							<td class='tdBoutique mid'>L'éléphant de polytech</td\>
							<td class='tdBoutique grand'>Un string éléphant de la plus haute qualité pakistanaise, on peut voir que l'arme est belle est bien énorme et que cela ne nuit en rien au plaisir de votre partenaire</td>
							<td class='tdBoutique petit dore'>17.00€</td>
							<td class='tdBoutique petit rouge'>20.00€</td>
							<td class='tdBoutique mid'><img src= " . $filename . "></td>
						</tr>";
		}*/
		?>
	</tbody>
	</table>

	<input type="button" value="ajouter un nouveau produit" onclick="changeView()">

	<form method="post" action="addProduit.php" enctype="multipart/form-data" id="formAddProduit" class="non-visible" onSubmit="changeView()"> 
		<br>
		<h4>Ajouter un nouveau produit</h4>
		<br>
		<label form="formAddProduit">Nom du produit : </label>
		<input type="text" name="nom" value="nom">
		<br>
		<label form="formAddProduit">Description : </label>
		<textarea name="description" >description</textarea>
		<br>
		<label form="formAddProduit">Prix adhérent : </label>
		<input type="number" name="prixAdh" min="0" max="150" step="0.5">
		<br>
		<label form="formAddProduit">Prix non adhérent : </label>
		<input type="number" name="prixNonAdh" min="0" max="150" step="0.5">
		<br>
		<label form="formAddProduit">Image : </label>
		<input name="fileImgProduit" id="fileImgProduit" type="file" style="display:inline-block">
		<input name="directory" value="images/" class="non-visible" type="text">        
    	<input value="Ajouter" type="submit" style="display:block">
    	<br>
	</form>
</p>