<?php
    require_once '../Controller/albumC.php';
    require_once '../Model/album.php';

    $albumC =  new albumC();

    if (isset($_POST['titre']) && isset($_POST['prix']) && isset($_POST['image'])) {
        $album = new Album($_POST['titre'], (float)$_POST['prix'], $_POST['image']);
        
        $albumC->addAlbum($album);

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
    <style>

    </style>
</head>

<body>
	<?php include_once 'header.php'; ?>
    <a href = "searchAlbum.php" class="btn btn-primary shop-item-button">Search</a>
	<section class="container">
		<h2>New Album</h2>
        <a href = "showAlbums.php" class="btn btn-primary shop-item-button">All albums</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Title: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "titre">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" >
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>
	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>