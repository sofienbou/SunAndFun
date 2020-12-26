<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get Groovy - Shop</title>
	<!-- <link rel="stylesheet" href="../assets/css/style.css"> -->

</head>

<body>
	<?php include_once 'header.php'; ?>

	<div class="sidenav">
		<h2>Mes Achats</h2>
		<div>
			<table>
				<thead>
					<td class="cart-item cart-header cart-column">Album</td>
					<td class="cart-item cart-header cart-column">Titre</td>
					<td class="cart-price cart-header cart-column">Prix</td>
					<td class="cart-quantity cart-header cart-column">Quantité</td>

				</thead>
				<tbody class="cart-items">

				</tbody>
				<tfoot class="">
					<td class="cart-total"></td>
					<td class=" cart-total cart-item"><strong class="cart-total-title">Total</strong></td>
					<td class=" cart-total cart-item"><span class="cart-total-price"> 0 dt.</span></td>
					<td class=" cart-total cart-item"><button type="button"
							class="btn btn-primary btn-purchase">Acheter</button>
					</td>
				</tfoot>
			</table>

		</div>

	</div>


	<section class="container">
		<h2>MUSIC</h2>
		<div class="shop-items">
			<div class="shop-item">
				<strong class="shop-item-title">Album 1</strong>
				<img src="../assets/images/album1.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">20 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>
			<div class="shop-item">
				<strong class="shop-item-title">Album 2</strong>
				<img src="../assets/images/album2.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">15.500 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>

			<div class="shop-item">
				<strong class="shop-item-title">Album 3</strong>
				<img src="../assets/images/album3.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">20 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>

			<div class="shop-item">
				<strong class="shop-item-title">Album 4</strong>
				<img src="../assets/images/album4.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">18.990 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>

			<div class="shop-item">
				<strong class="shop-item-title">Album 5</strong>
				<img src="../assets/images/album5.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">20 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>

			<div class="shop-item">
				<strong class="shop-item-title">Album 6</strong>
				<img src="../assets/images/album6.jpg" class="shop-item-image">
				<div class="shop-item-details">
					<span class="shop-item-price">15.500 dt.</span>
					<button type="button" class="btn btn-primary shop-item-button">Ajouter</button>
				</div>
			</div>
		</div>
	</section>
	<?php include_once 'footer.php'; ?>

	<script src="../assets/js/script.js"></script>
</body>

</html>