<div id="cohesion.php">
	<div id="descriptionClubCohesion" class="visible"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ante blandit, commodo diam sit amet, ullamcorper mauris. Mauris pulvinar quis nibh in volutpat. Mauris sed orci leo. Duis in sollicitudin nisi. Sed gravida est consequat augue scelerisque molestie. In finibus libero cursus lorem volutpat cursus. Nulla imperdiet, ligula nec pulvinar tempor, libero lacus fringilla tortor, eu sagittis sapien leo sit amet nisl. Nunc sed metus bibendum augue placerat scelerisque quis sit amet nisl. Vivamus varius sed sem sit amet tincidunt. Integer fringilla sagittis neque, a posuere nulla condimentum eu.</p><p>Duis vel massa non eros posuere rutrum. Morbi ultrices metus in sapien tincidunt dictum. Morbi vestibulum, leo vitae pretium hendrerit, turpis justo eleifend quam, ut commodo diam turpis id lacus. Vestibulum tincidunt diam a feugiat porta. Fusce non lorem justo. Vestibulum ullamcorper, ipsum sed mattis dignissim, nunc ligula rhoncus nunc, a mattis est eros nec erat. Vivamus tempor porta risus, ut volutpat massa aliquet eget. Vivamus malesuada pellentesque mauris, venenatis rutrum lorem tristique sed. Quisque malesuada massa vel justo iaculis, nec sodales magna tempor. Nunc a sollicitudin urna. Maecenas sit amet est at elit malesuada feugiat. In risus orci, consectetur et orci at, elementum fringilla elit. Morbi metus velit, elementum sit amet risus vel, gravida sagittis ipsum. Fusce ultricies neque nec convallis elementum. Ut quis leo ultrices, lobortis sapien id, congue sapien. Mauris aliquam finibus eros.</p></div>
	<br>
	<center>
	<img src="images/clubs/cohesion/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img1Cohesion">
	<img src="images/clubs/cohesion/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img2Cohesion">
	<img src="images/clubs/cohesion/imageExemple.jpg" name="imageExemple.jpg" class="img_club" alt="image" class="col-lg-4" id="img3Cohesion">
	</center>
	
	<div id="gestionImgCohesion" class="non-visible">
		<select id="selectImg1Cohesion" class="col-lg-2 col-lg-offset-1" style="display:inline-block" onchange="changeImg('img1Cohesion','images/clubs/cohesion/',document.getElementById('selectImg1Cohesion').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>
			
		<select id="selectImg2Cohesion" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img2Cohesion','images/clubs/cohesion/',document.getElementById('selectImg2Cohesion').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>

		<select id="selectImg3Cohesion" class="col-lg-2 col-lg-offset-2" style="display:inline-block" onchange="changeImg('img3Cohesion','images/clubs/cohesion/',document.getElementById('selectImg3Cohesion').value)">
			<option value="imageExemple.jpg">imageExemple.jpg</option>
		</select>

		<br>
		
		<center>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data" id="formUp" style="display:inline-block"> 
	    	<br>
			<label form="formUp">Importer une nouvelle image :</label>
			<input type="file" name="fileToUpload" id="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/cohesion/" class="non-visible">        
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