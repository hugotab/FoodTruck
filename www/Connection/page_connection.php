<?php
session_start(); ?>
<?php
if(!empty($_POST) && !empty($_POST['pseudo'])){
  require_once 'db.php';
  require_once 'function.php';
  $req = $pdo->prepare('SELECT * FROM membre WHERE pseudo = :pseudo OR email = :pseudo');
  $req->execute(['pseudo' => $_POST['pseudo']]);
  if(password_verify($_POST['password'], $user->password)){
    $_SESSION['auth'] = $user;
    header('Location: ../index.php');
  }
}
 ?>
<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8" />
    <title>Formulaire_de_connection</title>

    <link rel="stylesheet" href="Formulaire_de_connection.css" />
    <script src="formulaire_de_connection.js"></script>
</head>

<body>

<?php require '../menu.php' ?>
    <!-- formulaire de connection-->


    <form id="login">
        <h1>Se connecter</h1>
        <fieldset id="inputs">
            <p><input id="utilisateur" type="text" placeholder="Utilisateur" autofocus required></p>
            <p><input id="mot_de_passe" type="password" placeholder="Mot de passe" required></p>

            <p>
                <input type="submit" id="Se_connecter" value="Se connecter">
            </p>
              <a href="page_inscription.php">Pas de compte ?</a>
        </fieldset>
    </form>



    <?php require '../footer.php' ?>
</body>

</html>
