<?php session_start(); ?>
<?php require 'function.php'; ?>
<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8" />
    <title>Formulaire_de_connection</title>

    <link rel="stylesheet" href="Formulaire_de_connection.css" />
    <script src="formulaire_de_connection.js"></script>
</head>

<body>

  <?php
    if (!empty($_POST)) {
      $errors = array();

      require_once 'db.php';

      if(empty($_POST['pseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['pseudo'])){
        $errors['pseudo'] = "Votre pseudo n'est pas valide (alphanumérique)";
      }else{
        $req = $pdo->prepare('SELECT idmembre FROM membre WHERE pseudo = ?');
        $req->execute([$_POST['pseudo']]);
        $user = $req->fetch();

        if($user){
          $errors['pseudo'] = 'Ce pseudo est deja pris';
        }
      }

      if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valable";
      }else{
        $req = $pdo->prepare('SELECT idmembre FROM membre WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();}
        if($user){
          $errors['email'] = 'Cet email est deja pris';
        }

      if(empty($_POST['password'])){
        $errors['email'] = "Vous devez rentrer un mot de passe valide";
      }

    if(empty($errors)){
      $req = $pdo->prepare("INSERT INTO membre SET pseudo = ?, password = ?, email = ?");
      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
      $req->execute([$_POST['pseudo'], $password, $_POST['email']]);
      $user_id = $pdo->lastInsertId();

      $_SESSION['UserPdo'] = ['id'=> $user_id, 'name' => $_POST['pseudo']];

      mail($_POST['email'],'Confirmation du compte',"Afin de valider votre compte cliquer sur le lien\n\http://foodtruck.com/Connection/confirm.php?id=$user_id");
      header('Location: ../index.php');
      exit();
    }
  }
   ?>

  <?php require '../menu.php' ?>

    <!-- Formulaire de création de compte-->

    <?php if(!empty($errors)): ?>
      <div class="alert">
        <p>Vous avez mal rempli le formulaire</p>
        <ul>
          <?php foreach($errors as $error): ?>
            <li><?= $error; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form id="inscription" method="post">
        <h1>Créer un compte</h1>
        <fieldset>

            <p><label for="nom"> Votre Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo"  value="popop"/></p>

            <p><label for="email">Votre e-mail : </label>
                <input type="text" name="email" id="email" value='lt@pop.com'></p>

            <label for="password">Votre mot de passe : </label>
            <input type="password" name="password" id="password" value="popop">

            <p>
                <input type="submit" value="Envoyer" id="submit" />
            </p>
        </fieldset>
    </form>



    <?php require '../footer.php' ?>
</body>


</html>
