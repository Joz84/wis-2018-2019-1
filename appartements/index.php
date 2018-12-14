<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="utf-8">
	<title>Recherche d'appartements</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="icon" type="image/png" href="assets/img/buildings.png">
</head>
<body>
	<nav>
		<h1>Recherche de logements</h1>
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

	</div>
	<script src="assets/js/script.js" type="text/javascript"></script>
</body>
</html>