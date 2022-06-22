<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
    }
   
    ?>
<!DOCTYPE html>
<body>
    <html lang ="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title>Bonjour !</title>
<h1> Bonjour ! <?php echo $_SESSION['user'];?></h1>
<a href="deconnexion.php" class="btn btn-danger vtn-lg">Déconnexion</a>
</body>
</html>