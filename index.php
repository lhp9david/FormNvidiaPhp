<?php
require_once 'controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/img/nvidia.png">
  <link rel="stylesheet" href="assets/style.css">
  <title>Document</title>
</head>

<body>



  <?php if ($showForm) { ?>


    <div class="container">
      <h1>Contact</h1>

      <form action="" method="post">

        <div>
          <label for="lastname">Votre nom: </label> 
          <input type="text" name="lastname" id="lastname" value="<?= (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; ?>"><span><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
        </div>

        <div>
          <label for="firstname">Votre prénom: </label>
          <input type="text" name="firstname" id="firstname" value="<?= (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; ?>"><span><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
        </div>

        <div>
          <label for="pseudo">Votre pseudo: </label>
          <input type="text" name="pseudo" id="pseudo" value="<?= (isset($_POST['pseudo'])) ? $_POST['pseudo'] : ''; ?>"><span><?= isset($errors['pseudo']) ? $errors['pseudo'] : '' ?></span>
        </div>

        <div>
          <label for="mail">Votre mail: </label>
          <input type="email" name="mail" id="mail" value="<?= (isset($_POST['mail'])) ? $_POST['mail'] : ''; ?>"><span><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
        </div>


        <div>
          <label for="date">Votre date de naissance: </label>
          <input type="date" name="date" id="date" value="<?= (isset($_POST['date'])) ? $_POST['date'] : ''; ?>"><span><?= isset($errors['date']) ? $errors['date'] : '' ?></span>
        </div>

        <div>
          <label for="reseau">Objet: <span><?= isset($errors['reseau']) ? $errors['reseau'] : '' ?></span></label>
          <select name="reseau" id="reseau">
            <option value="">--Comment avez vous connu le site--</option>
            <?php foreach ($reseau as $key => $val) { ?>
              <option value="<?= $key + 1 ?>" <?= isset($_POST['reseau']) && $_POST['reseau'] == $key +1 ? 'selected' : '' ?>><?= $val ?></option>
            <?php } ?>
          </select>
        </div>

        <div>
          <label for="password">Mot de passe: </label>
          <input type="password" name="password" id="password"><span><?= isset($errors['password']) ? $errors['password'] : '' ?></span>
        </div>

        <div>
          <label for="confirmPass">Confirmer le mot de passe: </label>
          <input type="password" name="confirmPass" id="confirmPass"><span><?= isset($errors['confirmPass']) ? $errors['confirmPass'] : '' ?></span>
        </div>






        <div>
          <input type="checkbox" id="CGU" name="CGU"><span><?= isset($errors['CGU']) ? $errors['CGU'] : '' ?></span>
          <label class="check" for="CGU">J'accepte les CGU</label>
        </div>


        <p id="alert"></p>

        <input id="submit" type="submit" value="Valider">
      </form>
    </div>
  <?php } else { ?>

    <div class="welcome">
      <p>Merci <b><?= $_POST['pseudo'] ?> </b></p>
      <p>Votre inscription à bien été prise en compte</p>
      <p>Vous allez recevoir un mail à l'adresse <br> <b><?= $_POST['mail'] ?></b></p>
    </div>

  <?php } ?>




  <footer>
    <a href="#">Mentions légales</a>
  </footer>

</body>


</html>