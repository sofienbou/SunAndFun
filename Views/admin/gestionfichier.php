<?php

include "../../Controller/actualiteesC.php";
$ac = new actualiteesC();
$liste=$ac->afficherImage();
$listevideo=$ac->afficherVideo();

?>
<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Pour la recherche de l'admin :</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="rechercher">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php 
if (isset($_GET['action'])==false){

?>

<div>
<br>
</br>
</div>
<form action="ajouterFichier.php" method="post" enctype="multipart/form-data">
<div class="form-group mx-sm-3 mb-2 d-flex p-2" >
    <label for="exampleFormControlInput1">L'ID de l'actualité:</label>
    <input type="text" name="id" class="form-control" id="exampleFormControlInput1" placeholder="Saisir un id" required >
  </div>

  <div class="form-group mx-sm-3 mb-2 d-flex p-2">
    <label for="exampleFormControlInput1">La description de l'actualité:</label>
    <input type="text" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Saisir une description"required >
  </div>
  <div class="label label-succes">
  <label for="exampleFormControlInput1">Choisir un fichier : --></label>
  <input type="file" name="fileToUpload" id="fileToUpload"required >

  </div>
  <div class="form-group d-flex p-2">
  <input type="submit" class="btn btn-primary" value="enregistrer une actualité" name="submit">
</div>
</form>
	<div class="view-form" >
  <div class="list-group-item"  style="margin: 3rem"><div class="font-weight-bold ">Liste des photos :</div></div>
  
		<div class="row " style="margin: 3rem">
    <?php 
    foreach($liste as $row ){
    ?>
			<div class="col-sm-3">
			<img style="	width: 100%; height: 100%;"src="<?php echo "".$row['lien']; ?>">
			<a class="btn btn-info" href="gestionfichier.php?id=<?php echo $row['id']."&type=image&action=edit"?>" title="click for edit" ><span class="glyphicon glyphicone-edit"></span>Modifier</a>
			<a class="btn btn-danger" href="supprimerfichier.php?id=<?php echo $row['id']?>" title="click for delete" >Supprimer</a>
			</div>
      <?php } ?>
   
	</div>
  </div>


  <div class="list-group-item" style="margin: 3rem"><div class="font-weight-bold">Liste des videos :</div></div>
  <div class="row" style="margin: 3rem">

  <?php 
  foreach($listevideo as $row ){
  ?>
    <div class="col-sm-3">
    <video controls width="100%" style="	width: 100%; height: 100%;" >

    <source src="<?php echo $row['lien']?>"
            type="video/mp4"></video>
    <a class="btn btn-info" href="gestionfichier.php?id=<?php echo $row['id']."&type=video&action=edit"?>" title="click for edit" ><span class="glyphicon glyphicone-edit"></span>Modifier</a>
    <a class="btn btn-danger" href="supprimerfichier.php?id=<?php echo $row['id']?>" title="click for delete" >Supprimer</a>
    </div>
    <?php } ?>
 
</div>
</div>
<?php } else{
  if($_GET['type']=="image"){$e=$ac->afficherImage_id($_GET['id']);
  
  }
  else{
    $e=$ac->afficherVideo_id($_GET['id']);
  }
  foreach($e as $element){

  
  ?>
  <form action="modifierfichier.php" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleFormControlInput1">id</label>
    <input type="text" value="<?php echo $element['id'];?>" name="id" class="form-control" id="exampleFormControlInput1" readonly >
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">description</label>
    <input type="text" name="description" value="<?php echo $element['description'];?>" class="form-control" id="exampleFormControlInput1" placeholder="saisir une description"required >
  </div>
  <div class="form-group">
  <label for="exampleFormControlInput1">choisir un fichier </label>
  <input type="file" name="fileToUpload" id="fileToUpload"required >
  </div>
  <input name="type" type="hidden" value="<?php echo $_GET['type'];?>">
  <input type="submit" class="btn btn-primary" value="enregistrer une actualité" name="submit">
 
</form>
  <?php 
}} ?>

</body>
</html>
