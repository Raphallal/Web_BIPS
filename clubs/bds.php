<div id="bds.php">
	<div id="descriptionClubBds" class="visible"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet ante blandit, commodo diam sit amet, ullamcorper mauris. Mauris pulvinar quis nibh in volutpat. Mauris sed orci leo. Duis in sollicitudin nisi. Sed gravida est consequat augue scelerisque molestie. In finibus libero cursus lorem volutpat cursus. Nulla imperdiet, ligula nec pulvinar tempor, libero lacus fringilla tortor, eu sagittis sapien leo sit amet nisl. Nunc sed metus bibendum augue placerat scelerisque quis sit amet nisl. Vivamus varius sed sem sit amet tincidunt. Integer fringilla sagittis neque, a posuere nulla condimentum eu.</p><p>Duis vel massa non eros posuere rutrum. Morbi ultrices metus in sapien tincidunt dictum. Morbi vestibulum, leo vitae pretium hendrerit, turpis justo eleifend quam, ut commodo diam turpis id lacus. Vestibulum tincidunt diam a feugiat porta. Fusce non lorem justo. Vestibulum ullamcorper, ipsum sed mattis dignissim, nunc ligula rhoncus nunc, a mattis est eros nec erat. Vivamus tempor porta risus, ut volutpat massa aliquet eget. Vivamus malesuada pellentesque mauris, venenatis rutrum lorem tristique sed. Quisque malesuada massa vel justo iaculis, nec sodales magna tempor. Nunc a sollicitudin urna. Maecenas sit amet est at elit malesuada feugiat. In risus orci, consectetur et orci at, elementum fringilla elit. Morbi metus velit, elementum sit amet risus vel, gravida sagittis ipsum. Fusce ultricies neque nec convallis elementum. Ut quis leo ultrices, lobortis sapien id, congue sapien. Mauris aliquam finibus eros.</p></div>
	<textarea class="non-visible" id="descriptionClubModifBds" style="width:800px;height:150px"></textarea>
	<br>
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" alt="image" style="width:150px;height:150px" id="img1Bds">
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" alt="image" style="width:150px;height:150px" id="img2Bds">
	<img src="images/clubs/bds/imageExemple.jpg" name="imageExemple.jpg" alt="image" style="width:150px;height:150px" id="img3Bds">
	<br>
	<div id="gestionImgBds" class="non-visible">
		<br>
		<form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 1 :</label>
			<select id="selectImg1Bds" onchange="changeImg('img1Bds','images/clubs/bds/',document.getElementById('selectImg1Bds').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/bds/" class="non-visible">       
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
    	<br>
    	<form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 2 :</label>
			<select id="selectImg2Bds" onchange="changeImg('img2Bds','images/clubs/bds/',document.getElementById('selectImg2Bds').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">  
			<input type="text" name="directory" value="images/clubs/bds/" class="non-visible">     
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
	    <br>
	    <form method="post" action="uploadImage.php" enctype="multipart/form-data"> 
			<label>Image 3 :</label>
			<select id="selectImg3Bds" onchange="changeImg('img3Bds','images/clubs/bds/',document.getElementById('selectImg3Bds').value)"><option value="imageExemple.jpg">imageExemple.jpg</option>
</select>
			<label>Nouvelle image :</label>
			<input type="file" name="fileToUpload" style="display:inline-block">
			<input type="text" name="directory" value="images/clubs/bds/" class="non-visible">       
	    	<input type="submit" value="Upload" style="display:inline-block">
	    </form>
	    <br>
	</div>
	<br>
	<br>
</div>