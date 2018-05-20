<header id="top">
  <h1>Républicain.e.s</h1>
  <div id="linkToLog">
    <?php if ($SESSION["connected"])
    { ?>
    <p>Mon compte</p>
    <p>Se déconnecter</p>
    <?php }
    else
    { ?>
    <a href="login.php">Se connecter</a>
    <a href="signup.php">S’inscrire</a>
    <?php } ?>
  </div>
</header>
