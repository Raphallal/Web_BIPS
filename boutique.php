<?php
$image = imagecreatefromjpeg("C:/Users/Eleris/Pictures/string.jpg");
$filename = 'images/string.jpg';

$thumb_width = 80;
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
imagejpeg($thumb, $filename, 80);
?>
<p>
	<table class="table header-fixed boutique">
	<thead class="floating-header">
		<tr>
			<th class="thBoutique mid">Nom</th>
			<th class="thBoutique grand">Descriptif</th>
			<th class="thBoutique petit">Prix adhérent</th>
			<th class="thBoutique petit">Prix non adhérent</th>
			<th class="thBoutique mid">Image</th>
		</tr>
	</thead>
	<!----
	<div style="height:450px;overflow-Y:auto;">
	<table>
	--->
	<tbody>
			
		<?php
		for($i =0; $i < 55; $i++){
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
		}
		?>
	</tbody>
	</table>
</p>
<!----
<tr>
	<td class="col-lg-2 tdBoutique">String polytech</td>
	<td class="col-lg-3 tdBoutique">Un manifique string aux couleurs de l'école pour les plus dépravés d'entre vous</td>
	<td class="col-lg-1 tdBoutique dore">17.00€</td>
	<td class="col-lg-1 tdBoutique rouge">20.00€</td>
	<td class="col-lg-2 tdBoutique">String doré</td>
</tr>
<tr>
   <th>Mot de passe </th>
   <td><input type="password" name="passwd" id="passwd"/></td>
</tr>
<tr>
   <th></th>
   <td><input type="submit" value="Se connecter" /></td>
</tr>
---->