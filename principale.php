<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Competition d'Arts</title>
</head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Competition d'Arts</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorie.html">Gestion des Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestion des Participants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestion des Œuvres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gestion des Jury</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Résultat et prix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">..</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">..</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">..</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container mt-4">
 <!-- tester si l'utilisateur est connecté -->


 
 <!-- tester si l'utilisateur est connecté -->
 <?php
 session_start();
 if(isset($_GET['deconnexion']))
 { 
 if($_GET['deconnexion']==true)
 { 
 session_unset();
 header("location:login.php");
 }
 }
 else if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 // afficher un message
 echo "<br>Bonjour $user, vous êtes connectés";
 }
 ?>
 
 <div class="container mt-4">
    <h3>Bienvenue sur la page de gestion de compétition d'arts</h3>
    <p>Dans cette page vous pouvez gerer les participants, les jury, le resultat et les prix de la competition.</p>
  </div>
 </div>


 <!-- ... Fin du code HTML ... -->
        

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
</html>