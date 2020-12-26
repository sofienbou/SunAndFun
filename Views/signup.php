
<?php
// define variables and set to empty values
$email = $password = $datenaissance = $nom = $prenom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = isset($_POST["nom"]);
  $prenom = isset($_POST["prenom"]);
  $email = isset($_POST["email"]);
  $datenaissance = isset ($_POST["datenaissance"]);
  $password = isset($_POST["password"]);
}


function valideeNom($data){
    return $data;
}
function valideePrenom($data){
  return $data;
}function valideeEmail($data){
  return $data;
}function valideePassword($data){
  return $data;
}
// TODO : BD CONNECT

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Sun'n Fun</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>
<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End *****-->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="./blog.php">
          <h2>Travel Agency <em>Website</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./blog.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item"><a class="nav-link" href="packages">Packages</a></li>

            <li class="nav-item"><a class="nav-link" href="./blog.php">Blog</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">More</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about-us">About Us</a>
                <a class="dropdown-item" href="testimonials">Testimonials</a>
                <a class="dropdown-item" href="terms">Terms</a>
              </div>
            </li>

            <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="./signup.php">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link" href="blog">Login</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </header>  <br><br><br>  <br><br><br>
  <div class="container">
  <form method="post" action="signup.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
  <label for="nomClient">Nom</label>
  <input type="text" class="form-text form-control" placeholder="nom" id="nom">
  </div>
  <div class="form-group">
  <label for="nomClient">Prenom</label>
  <input type="text" class="form-text form-control" placeholder="prenom" id="prenom">
  </div>
  <div class="form-group">
  <label for="nomClient">Date de Naissance</label>
  <input type="date" id="datenaissance" class="form-control" placeholder="Votre Date De Naissance">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright © 2020 Sun'n Fun</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>
</html>