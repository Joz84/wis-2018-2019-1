<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<title>Recherche d'appartements</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="icon" type="image/png" href="assets/img/logo.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<nav>
<h1> <p align="center">Recherche de logements</p> </h1>
	</nav>
	<div id="filtre">
		<form action="/php/exo4/index.php" method="post">
			<input type="hidden" name="filtre" value="ok">
		  	<label for="pieces">Nb Pièces</label>
		  	<input type="number" name="pieces" value="" placeholder="Nb Pièces" required>
		  	<label for="format">Format</label>
		  	<select name="format" required>
		  		<option value="">Choisir</option>
		  		<option value="location">Location</option>
		  		<option value="vente">Vente</option>
		  	</select>
		  	<label for="mini">Prix Mini</label>
		  	<input type="number" name="mini" value="" placeholder="Prix Mini" required>
		  	<label for="maxi">Prix Maxi</label>
		  	<input type="number" name="maxi" value="" placeholder="Prix Maxi" required>
		  	<label for="type">Type de bien</label>
		  	<select name="type" required>
		  		<option value="">Choisir</option>
		  		<option value="maison">Maison</option>
		  		<option value="appartement">Appartement</option>
		  	</select>
		  	<input id="submit" type="submit" value="Filtrer">
		</form> 
	</div>
	<div id="results">

	<?php if (!empty($_SESSION['apparts'])) {
		
		for ($i=0; $i < count($_SESSION['apparts']); $i++) { ?>
			
			<div id="annonce_<?php echo $_SESSION['apparts'][$i]['id'] ?>">
				<p><?php echo $_SESSION['apparts'][$i]['description'] ?></p>
			</div>

		<?php }
	} ?>
		<!--Google map-->
		<div id="map-container-google-1" class="z-depth-1-half map-container text-center" style="height: 500px">
   			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.8669670861864!2d-0.5629520846309054!3d44.86500298124523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd55288bbafad91d%3A0xc45ad65f16b980bf!2sChartrons%2C+33300+Bordeaux!5e0!3m2!1sfr!2sfr!4v1545312019686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<!--Google Maps-->

	<div class="container">
	  <div class="row ">
	    <div class="col-12 col-sm-12 ">
	    	<img src="appartements/assets/img/Appart1.png" width="350" height="200">
		</div>
		<div class="col-12 col-sm-12 ">
	    	<img src="appartements/assets/img/Appart2.png" width="350" height="200">
		</div>
		<div class="col-12 col-sm-12 ">
	    	<img src="appartements/assets/img/Appart3.png" width="350" height="200">
		</div>
	  </div>
	</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<scrMapipt src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	</div>
	<script src="assets/js/script.js" type="text/javascript"></script>
</body>
</html>