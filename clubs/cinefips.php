<div id="cinefips.php">
	<div id="descriptionClubCine" class="visible"><p>Cinéfips est le club audiovisuel de Polytech Paris Sud. Il crée des courts métrages et les diffuse lors de diverses projections, tels que les JT, à l'ensemble des étudiants. Il couvre également les différents évènements organisés par l'école : cérémonie de remise de diplômes, gala...</p><p>Le club organise des ateliers pour apprendre toutes les facettes de la réalisation d'un court métrage : scénario, tournage, montage, effets spéciaux, jeux de lumière ... Ils s'adressent à tous les cinéastes de l'école, quelque soit leur niveau, seule la motivation importe !</p><p>Chaque année, Cinéfips se charge de la production du lipdub afin de présenter l'école aux nouveaux arrivants : bonne ambiance et convivialité assurées. Nous comptons sur vous pour rendre ce lipdub encore plus spectaculaire que celui de l'année passée !</p></div>
	<textarea class="non-visible" id="descriptionClubModifCine" style="width:800px;height:150px"></textarea>
	<br>
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" alt="image" style="width:150px;height:150px" id="img1Cine">
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" alt="image" style="width:150px;height:150px" id="img2Cine">
	<img src="images/clubs/cine/logoCineFips.jpg" name="logoCineFips.jpg" alt="image" style="width:150px;height:150px" id="img3Cine">
	<br>
	<div id="gestionImgCine" class="non-visible">
		<br>
		<form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 1 :</label>
			<select id="selectImg1Cine" onchange="changeImg('img1Cine','images/clubs/cine/',document.getElementById('selectImg1Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/cine/" class="non-visible">       
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
    	<br>
    	<form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 2 :</label>
			<select id="selectImg2Cine" onchange="changeImg('img2Cine','images/clubs/cine/',document.getElementById('selectImg2Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">  
			<input type="text" name="directory" value="images/clubs/cine/" class="non-visible">     
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
	    <br>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 3 :</label>
			<select id="selectImg3Cine" onchange="changeImg('img3Cine','images/clubs/cine/',document.getElementById('selectImg3Cine').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
<option value="logoCineFips.jpg">logoCineFips.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/cine/" class="non-visible">       
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
	    <br>
	</div>
	<br>
	<br>
</div>