<?php
    require_once '../Controller/albumC.php';

    $albumC =  new albumC();

	$albums = $albumC->afficherAlbum();

	if (isset($_GET['idAlbum'])) {
		$albumC->deleteAlbum($_GET['idAlbum']);
		header('Location:showAlbums.php');
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get Groovy - Shop</title>
	<link rel="stylesheet" href="../assets/css/style.css"> 

</head>

<body>
	<?php include_once 'header.php'; ?>
	<a href = "searchAlbum.php" class="btn btn-primary shop-item-button">Search</a>
		<section class="container">
			<h2>MUSIC</h2>
			<a href = "addAlbum.php" class="btn btn-primary shop-item-button" href = "#">Ajouter</a>
			<div class="shop-items">
				<?php
					foreach ($albums as $album) {
				?>
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $album['titre'] ?> </strong>
					<img src="../assets/images/<?= $album['image'] ?>" width = "200" height = "200" class="shop-item-image">
					<div class="shop-item-details">
						<span class="shop-item-price"><?= $album['prix'] ?> dt.</span>
						<a type="button" class="btn btn-primary shop-item-button" href = "updateAlbum.php?idAlbum=<?= $album['idAlbum'] ?>">Modifier</a>
						<a type="button" class="btn btn-primary shop-item-button" href = "showAlbums.php?idAlbum=<?= $album['idAlbum'] ?>">Supprimer</a>
					</div>
				</div>
				<?php 
					}
				?>
			</div>
		</section>

	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>