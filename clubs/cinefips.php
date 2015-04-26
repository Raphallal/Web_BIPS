<div id="cinefips.php">
	<div id="descriptionClubCine" class="visible"><p>Cinéfips est le club audiovisuel de Polytech Paris Sud. Il crée des courts métrages et les diffuse lors de diverses projections, tels que les JT, à l'ensemble des étudiants. Il couvre également les différents évènements organisés par l'école : cérémonie de remise de diplômes, gala...</p><p>Le club organise des ateliers pour apprendre toutes les facettes de la réalisation d'un court métrage : scénario, tournage, montage, effets spéciaux, jeux de lumière ... Ils s'adressent à tous les cinéastes de l'école, quelque soit leur niveau, seule la motivation importe !</p><p>Chaque année, Cinéfips se charge de la production du lipdub afin de présenter l'école aux nouveaux arrivants : bonne ambiance et convivialité assurées. Nous comptons sur vous pour rendre ce lipdub encore plus spectaculaire que celui de l'année passée !</p></div>
	<br>
	<center>
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" class="img_club" alt="image" id="img1Cine" onload="displayHideImg(this.id)">
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" class="img_club" alt="image" id="img2Cine" onload="displayHideImg(this.id)">
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" class="img_club" alt="image" id="img3Cine" onload="displayHideImg(this.id)">
	</center>
	
	<div id="gestionImgCine" class="non-visible">
		<select id="selectImg1Cine" class="col-lg-2 col-lg-offset-1" style="display:inline-block" onchange="changeImg('img1Cine','images/clubs/cine/',document.getElementById('selectImg1Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="imagePetite.png">imagePetite.png</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>
			
		<select id="selectImg2Cine" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img2Cine','images/clubs/cine/',document.getElementById('selectImg2Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="imagePetite.png">imagePetite.png</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>

		<select id="selectImg3Cine" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img3Cine','images/clubs/cine/',document.getElementById('selectImg3Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="imagePetite.png">imagePetite.png</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>

		<br>
		
		<center>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data" id="formUp" style="display:inline-block"> 
	    	<br>
			<label form="formUp">Importer une nouvelle image :</label>
			<input type="file" name="fileToUpload" id="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/cine/" class="non-visible">       
	    	<input type="submit" value="Upload" style="display:inline-block">
	    	<br>
	    </form>
		</center>
	    <br>

	</div>
	<br>
	<br>
	<br>
</div>