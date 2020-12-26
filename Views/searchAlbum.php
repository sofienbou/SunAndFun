<?php
    require_once '../Controller/albumC.php';

    $albumC =  new albumC();

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

	<section class="container">
		<h2></h2>
		<div class="form-container">
            <form action="" method = 'POST'>
                <div class="row">
                    <div class="col-25">                
                        <label>Search Title: </label>
                    </div>
                    <div class="col-75">
                        <input type = "text" name = 'album'>
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type = "submit" value = "Search" name ="search">
                </div>
            </form>
		</div>
	</section>

	<?php
		if (isset($_POST['album']) && isset($_POST['search'])){
			$result = $albumC->getAlbumByTitle($_POST['album']);
			if ($result !== false) {
	?>
		<section class="container">
			<h2>MUSIC</h2>
			<a href = "showAlbums.php" class="btn btn-primary shop-item-button">All albums</a>
			<div class="shop-items">
				
				<div class="shop-item">
					<strong class="shop-item-title"> <?= $result['titre'] ?> </strong>
					<img src="../assets/images/<?= $result['image'] ?>" class="shop-item-image">
					<div class="shop-item-details">
						<span class="shop-item-price"><?= $result['prix'] ?> dt.</span>
					</div>
				</div>
				
			</div>
		</section>
	<?php
		}
		else {
			echo "<div> No results found!!! </div>";
		}
	}
	?>
	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>