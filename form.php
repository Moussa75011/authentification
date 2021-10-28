<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('conexion.php');

//on verifie les champs du formulaire 
if (isset($_REQUEST['identifiant'], $_REQUEST['password'])){
 
  // On récupére le username et on supprime les antislashes ajoutés par le formulaire
  $identifiant = stripslashes($_REQUEST['identifiant']);
  $identifiant = mysqli_real_escape_string($conn, $identifiant); 
  
  // On récupére le password et on supprime les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);

  //requéte SQL avec password crypté
    $query = "INSERT into `users` (identifiant, password)
              VALUES ('$identifiant', '".hash('sha256', $password)."')";
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Inscription reussir.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  <h1 class="box-logo box-title"><a href="https://waytolearnx.com/">WayToLearnX.com</a></h1>
    <h1 class="box-title">Ajout Compte</h1>
  <input type="text" class="box-input" name="identifiant" placeholder="identifiant" required />
    <input type="password" class="box-input" name="password" placeholder="Password" required />
    <input type="submit" name="submit" value="Ajout compte" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>