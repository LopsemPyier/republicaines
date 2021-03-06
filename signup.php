<?php include 'relationships/starting.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles/styleIndex.css" />
    <title>Login - Républicain.e.s</title>
  </head>

  <body>
    <?php include 'frames/header.php'; ?>

    <?php include 'frames/underHead.php'; ?>


    <h2>Bienvenue, républicain.e</h2>
    <p>Pour l’instant, le système de comptes ne sert pas à grand chose, mais nous l’avons installé en anticipant l’avenir du site, qui ne sera plus juste une interface supplémentaire pour pouvoir regarder nos vidéos youtube, mais bien plus encore !</p>

    <form method="post" action="functions/signup.php">
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" required/>
      <label for="pwd">Mot de passe :</label>
      <input type="password" name="pwd" id="pwd" required/>
      <label for="pseudo">Pseudo (facultatif) :</label>
      <input type="text" name="pseudo" id="pseudo" />

      <input type="checkbox" name="news" id="news" />
      <label for="news">Je souhaite recevoir des annonces par mails</label>

      <input type="submit" value="Créer le compte" />
    </form>

    <?php include 'frames/footer.php'; ?>
  </body>
</html>
