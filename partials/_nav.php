


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">"En Route Vers la Réussite"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= set_active("index") ?>">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>

      </li>
       <?php if(is_logged_in()): ?>
        <li class="nav-item <?= set_active("profile") ?>">
        <a class="nav-link" href="profile.php?id=<?=get_session('user_id') ?>"> Mon profil</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="logout.php">Déconnexion</a>
      </li>
      <li class="nav-item <?= set_active("profile") ?>">
        <a class="nav-link" href="share_code.php?id=<?=get_session('user_id') ?>"> Partager |Soumettre</a>
      </li>
          <?php else: ?>
      <li class="nav-item <?= set_active("login") ?>">
        <a class="nav-link" href="login.php">Connexion</a>
      </li>
      <li class="nav-item <?= set_active("register") ?>">
        <a class="nav-link " href="register.php" tabindex="-1" aria-disabled="true">Inscription</a>
      </li>

          <?php endif; ?>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>