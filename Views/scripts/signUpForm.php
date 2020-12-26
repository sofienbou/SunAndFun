<?php
// define variables and set to empty values
$email = $password = $datenaissance = $nom = $prenom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = valideeNom($_POST["nom"]);
  $prenom = valideePrenom($_POST["prenom"]);
  $email = valideeEmail($_POST["email"]);
  $datenaissance = $_POST["datenaissance"];
  $password = valideePassword($_POST["password"]);
}

//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
}
function valideeNom($data){
    
}
// TODO : Complete valideePrenom valideeEmail valideePassword

?>