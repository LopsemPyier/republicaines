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

      
      <input type="submit" value="Créer le compte" />
    </form>

    <?php include 'frames/footer.php'; ?>
  </body>
</html>