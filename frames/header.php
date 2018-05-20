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
    <p>Se connecter</p>
    <p>S’inscrire</p>
    <?php } ?>
  </div>
</header>
