<?php
    require_once '../Controller/clientsC.php';
    require_once '../Model/clients.php';

    $clientsC =  new clientsC();

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        $clients = new Clients($_POST['nom'], (float)$_POST['prenom'], $_POST['email']);
        
        $clientsC->addClients($clients);
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
    <?php
        if (isset($_GET['idAlbum'])) {
            $result = $albumC->getAlbumById($_GET['idAlbum']);
			if ($result !== false) {
    ?>
	<section class="container">
		<h2>Update Album</h2>
        <a href = "showAlbums.php" class="btn btn-primary shop-item-button">All albums</a>
		<div class="form-container">
            <form action="" method = "POST">
                <div class="row">
                    <div class="col-25">                
                        <label>Title: </label>
                    </div>
                    <div class="col-75">
                        <input type="text" name = "titre" value = "<?= $result['titre'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Price</label>
                    </div>
                    <div class="col-75">
                        <input type="number" name = "prix" value = "<?= $result['prix'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Image</label>
                    </div>
                    <div class="col-75">
                        <input type = "file" name = "image" value = "<?= $result['image'] ?>">
                    </div>
                </div>
                <br>
                <div class="row">
                    <input type="submit" value="Submit" name = "submit">
                </div>
            </form>
		</div>
	</section>

    <?php
        }
    }
        else {
            header('Location:showAlbums.php');
        }
    
    ?>
	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>