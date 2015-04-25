<nav class="col-lg-3 menu">
	<p>
	<h2>Nous suivre</h2>
	<h3>Sur Twitter</h3>
	<a href="https://twitter.com/AssoBIPS?lang=fr">
	<img src="images/twitter.JPG" alt="Twitter" title="Twitter" />
	</a>
	<?php/* include("follow_button.htm"); */?>
	<br>
	<h3>Sur facebook</h3>
	<a href="https://www.facebook.com/bipsparissud?fref=ts">
	<img src="images/facebook.png" width="80" height="50" alt="Facebook" title="Facebook" />
	</a>
	<?php  /*?>
	<br><br>
	<h3>RSS</h3>
	<a href="">
	<img src="images/rss2.png" style="position: relative; right: 90px" width="50" height="50" alt="RSS" title="RSS" />
	</a>
	*/ ?>
	</p>
	<?php 
		if( (isset($_SESSION['logged']) && $_SESSION['logged'] == false) || !isset($_SESSION['logged']) ){
			?>
				<form action="enregistrement.php" method="post"> 
					<table>
						<tr>
							<td colspan="2"><h2>Connexion</h2></th>
						</tr>
					   <tr>
						   <th>Identifiant </th>
						   <td><input type="text" name="iden" id="iden"/></td>
					   </tr>
					   <tr>
						   <th>Mot de passe </th>
						   <td><input type="password" name="passwd" id="passwd"/></td>
					   </tr>
					   <tr>
						   <th></th>
						   <td><input type="submit" value="Se connecter" /></td>
					   </tr>
					</table>
				</form>
				<p><a href="creation_compte.php">Créer un compte</a></p>
				<p><a href="passForgot.html" target="_blank">Mot de passe oublié ?</a></p>
			<?php
		}
		else{
			echo "Connecté en tant que : <br> <b>".$_SESSION['username']."</b><br>" ; 
			if( $_SESSION['admin'] )
			{
				echo "<i>Administrateur</i><br>" ; 
			}
			echo "<br>" ; 
			?>
			<a href="enregistrement.php?d=disconnect">Me déconnecter </a><br>
			<?php
		}
	 ?>

</nav>