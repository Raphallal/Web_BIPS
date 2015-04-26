<div id="bds.php">
	<div id="descriptionClubBds" class="visible"><p>Lorem ipsum dolor sit amet, consempeenatis rutrum lorem tristique sed. Quisque malesuada massa vel justo iaculis, nec sodales magna tempor. Nunc a sollicitudin urna. Maecenas sit amet est at elit malesuada feugiat. In risus orci, consectetur et orci at, elementum fringilla elit. Morbi metus velit, elementum sit amet risus vel, gravida sagittis ipsum. Fusce ultricies neque nec convallis elementum. Ut quis leo ultrices, lobortis sapien id, congue sapien. Mauris aliquam finibus eros.</p></div>
	<br>
	<center>
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" id="img1Bds">
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" id="img2Bds">
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" id="img3Bds">
	</center>
	
	<div id="gestionImgBds" class="non-visible">
		<select id="selectImg1Bds" class="col-lg-2 col-lg-offset-1" style="display:inline-block" onchange="changeImg('img1Bds','images/clubs/bds/',document.getElementById('selectImg1Bds').value)"><option value="caravane_chameau_bactriane.jpg">caravane_chameau_bactriane.jpg</option>
<option value="imageExemple.jpg">imageExemple.jpg</option>
</select>
			
		<select id="selectImg2Bds" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img2Bds','images/clubs/bds/',document.getElementById('selectImg2Bds').value)"><option value="caravane_chameau_bactriane.jpg">caravane_chameau_bactriane.jpg</option>
<option value="imageExemple.jpg">imageExemple.jpg</option>
</select>

		<select id="selectImg3Bds" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img3Bds','images/clubs/bds/',document.getElementById('selectImg3Bds').value)"><option value="caravane_chameau_bactriane.jpg">caravane_chameau_bactriane.jpg</option>
<option value="imageExemple.jpg">imageExemple.jpg</option>
</select>

		<br>
		
		<center>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data" id="formUp" style="display:inline-block"> 
	    	<br>
			<label form="formUp">Importer une nouvelle image :</label>
			<input name="fileToUpload" id="fileToUpload" style="display:inline-block" type="file">
			<input name="directory" value="images/clubs/bds/" class="non-visible" type="text">        
	    	<input value="Upload" style="display:inline-block" type="submit">
	    	<br>
	    </form>
		</center>
	    <br>

	</div>
	<br>
	<br>
	<br>
</div>