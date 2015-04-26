<div id="popsgames.php">
	<div id="descriptionClubBds" class="visible"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ante blandit, commodo diam sit amet, ullamcorper mauris. Mauris pulvinar quis nibh in volutpat. Mauris sed orci leo. Duis in sollicitudin nisi. Sed gravida est consequat augue scelerisque molestie. In finibus libero cursus lorem volutpat cursus. Nulla imperdiet, ligula nec pulvinar tempor, libero lacus fringilla tortor, eu sagittis sapien leo sit amet nisl. Nunc sed metus bibendum augue placerat scelerisque quis sit amet nisl. Vivamus varius sed sem sit amet tincidunt. Integer fringilla sagittis neque, a posuere nulla condimentum eu.</p><p>Duis vel massa non eros posuere rutrum. Morbi ultrices metus in sapien tincidunt dictum. Morbi vestibulum, leo vitae pretium hendrerit, turpis justo eleifend quam, ut commodo diam turpis id lacus. Vestibulum tincidunt diam a feugiat porta. Fusce non lorem justo. Vestibulum ullamcorper, ipsum sed mattis dignissim, nunc ligula rhoncus nunc, a mattis est eros nec erat. Vivamus tempor porta risus, ut volutpat massa aliquet eget. Vivamus malesuada pellentesque mauris, venenatis rutrum lorem tristique sed. Quisque malesuada massa vel justo iaculis, nec sodales magna tempor. Nunc a sollicitudin urna. Maecenas sit amet est at elit malesuada feugiat. In risus orci, consectetur et orci at, elementum fringilla elit. Morbi metus velit, elementum sit amet risus vel, gravida sagittis ipsum. Fusce ultricies neque nec convallis elementum. Ut quis leo ultrices, lobortis sapien id, congue sapien. Mauris aliquam finibus eros.</p></div>
	<br>
	<center>
	<img src="images/clubs/popsgames/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img1Bds" onload="displayHideImg(this.id)">
	<img src="images/clubs/popsgames/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img2Bds" onload="displayHideImg(this.id)">
	<img src="images/clubs/popsgames/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img3Bds" onload="displayHideImg(this.id)">
	</center>
	
	<div id="gestionImgBds" class="non-visible">
		<select id="selectImg1Bds" class="col-lg-2 col-lg-offset-1" style="display:inline-block" onchange="changeImg('img1Bds','images/clubs/popsgames/',document.getElementById('selectImg1Bds').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>
			
		<select id="selectImg2Bds" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img2Bds','images/clubs/popsgames/',document.getElementById('selectImg2Bds').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>

		<select id="selectImg3Bds" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img3Bds','images/clubs/popsgames/',document.getElementById('selectImg3Bds').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>

		<br>
		
		<center>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data" id="formUp" style="display:inline-block"> 
	    	<br>
			<label form="formUp">Importer une nouvelle image :</label>
			<input type="file" name="fileToUpload" id="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/popsgames/" class="non-visible">        
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