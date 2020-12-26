<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Get Groovy - Connexion</title>
	</head>
	<body>
		<header>
			<h1>Get Groovy</h1>
			<nav>
				<a href="index.html">Acceuil</a>
				<a href="Shop.html">Albums</a>
				<a href="index.html#promos">Promotions</a>
				<a href="contact.html">Contact</a>
				<a href="connexion.html">Inscription</a>
			</nav>
			<hr>
			<img src="assets/images/banner.jpg" alt="Banner" width="1500">
		</header>
		<div>
			<h2>Welcome to the groove</h2>
			<hr>
			<form action="acceuil.html" method="post">
				<table border="2">

					<tr>
						<td rowspan='8' colspan='1'>Fiche Personnelle</td>
						<td>
							<label for="nom">Nom:
							</label>
						</td>
						<td><input type="text" name="nom" id="nom" maxlength="20"></td>
					</tr>
					<tr>
						<td>
							<label for="prenom">Prénom:
							</label>
						</td>
						<td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
					</tr>
					<tr>
						<td>
							<label for="dateNais">Date de naissance:
							</label>
						</td>
						<td><input type="date" name="dateNais" id="dateNais" max="2002-01-01"></td>
					</tr>
					<tr>
						<td>
							<label for="sexe">Sexe:
							</label>
						</td>
						<td>
							<input type="radio" name="sexe" id="sexe" value="femme" checked><label for="femme">Femme
							</label>
							<input type="radio" name="sexe" id="sexe" value="homme"><label for="homme">Homme
							</label>
						</td>
					</tr>
					<tr>
						<td>
							<label for="email">Adresse mail:
							</label>
						</td>
						<td>
							<input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
						</td>
					</tr>
					<tr>
						<td>
							<label for="tel">Téléphone:
							</label>
						</td>
						<td>
							<input type="tel" name="tel" id="tel" placeholder="12-345-678" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}">
						</td>
					</tr>
					<tr>
						<td>
							<label for="prof">Profession:
							</label>
						</td>
						<td>
							<select name="prof" id="prof">
								<option value="select">Select</option>
								<option value="etudiant">Etudiant</option>
								<option value="enseignant">Enseignant</option>
								<option value="ingenieur">Ingenieur</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="adresse">Adresse:
							</label>
						</td>
						<td>
							<textarea name="adresse" id="adresse" cols="30" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td rowspan='2' colspan='1'>Préférences</td>
						<td rowspan='1' colspan='2'>Style de musique:
						</td>
					</tr>
					<tr>
						<td rowspan='1'>
							<input type="checkbox" id="rnb" name="rnb" value="RnB">
							<label for="rnb">
								R&B</label><br>
							<input type="checkbox" id="soul" name="soul" value="soul">
							<label for="soul">
								Soul</label><br>
							<input type="checkbox" id="jazz" name="jazz" value="jazz">
							<label for="jazz">
								Jazz</label>
						</td>
						<td rowspan='1'>
							<input type="checkbox" id="rock" name="rock" value="rock">
							<label for="rock">
								Rock</label><br>
							<input type="checkbox" id="electronic" name="electronic" value="electronic">
							<label for="electronic">
								Electronic</label><br>
							<input type="checkbox" id="classic" name="classic" value="classic">
							<label for="classic">
								Classic</label>
						</td>
					</tr>
					<tr>
						<td rowspan='3' colspan='1'>Information de Connexion</td>
						<td>
							<label for="login">Login:
							</label>
						</td>
						<td>
							<input type="text" name="login" id="login">
						</td>
					</tr>
					<tr>
						<td>
							<label for="pass">Mot de passe:
							</label>
						</td>
						<td>
							<input type="password" name="pass" id="pass"></td>
					</tr>
					<tr>
						<td>
							<label for="pass1">Confirmer mot de passe:
							</label>
						</td>
						<td><input type="password" name="pass1" id="pass1"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Envoyer">
						</td>
						<td>
							<input type="reset" value="Annuler">
						</td>
					</tr>
				</table>
			</form>

		</div>
		<hr>
		<footer>
			<address>123 NoWhere Street</address>
		</footer>
	</body>
</html>
