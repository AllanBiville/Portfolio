<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>APAEIA</title>
    <link rel="stylesheet" href="style.css" />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
  />
</head>

  <body>
  <header>
        <a href="index.php"><img src="images/logo.png" /></a>
      <nav>
      <div class="sucess">
        Bonjour <?php echo $_SESSION['username']; 
        ?>
        <a href="logout.php">Déconnexion</a>
        </div>
        <a href="index.php">Accueil</a>
        <div class="dropdown">
        <a id="menu-deroulant">Outils</a>
        <div class="dropdown-child">
          <a target="_blank" href="https://docs.google.com/document/d/1VqLaJo0amkRZ59FRvjcIL0jjOdXzsK49X_X0E1yxwIM/edit?usp=sharing">Documentation Technique</a>
          <a target="_blank" href="https://docs.google.com/document/d/1J45vOBnCVOw279oP22MAeJOMb6dlHaYUg9Qr__D0sB8/edit?usp=sharing">Documentation Utilistateur</a>
          <a href=""></a>
        </div>
        </div>
        <a href="intranet.php">Intranet</a>
      	</nav></br>
    </header>
    <main>
      <h1 class="Titre-Page">Intranet</h1>
      <a href="#">
        <img src="images/glpi.png"/><br/><br/>
      </a>
      <a href="#">
      <img src="images/nextcloud.png"/>
      </a>
    </main>
  </body>
</html>

