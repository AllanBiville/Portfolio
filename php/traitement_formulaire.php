
<?php
// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
  
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
  
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }
  
  if ($nombreErreur==0) { // S'il n'y a pas d'erreur
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $objet = htmlentities($_POST['objet']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'allan.biville@outlook.fr'; // Adresse email du webmaster
    $sujet = 'Contact Porfolio'; // Titre de l'email
    $contenu = '<html><head><title>Contact Porfolio</title></head><body>';
    $contenu .= '<p>Nouveau message recu ! (Formulaire de contact)</p>';
    $contenu .= '<p><strong>Nom </strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email </strong>: '.$email.'</p>';
    $contenu .= '<p><strong>Objet </strong>: '.$objet.'</p>';
    $contenu .= '<p><strong>Message </strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email
    
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";


    
    @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    
    echo '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Allan Biville</title>
  <meta author="Allan Biville"/>
  <meta description="Bienvenue sur le portfolio de Allan Biville"/>
  <link type="text/css" rel="stylesheet" href="../css/CSS.css">
  <link rel="shortcut icon" type="image/ico" href="../ressources/favicons/favicon.ico"/>
</head>
<body>
    <h1 id="titre">Portfolio - Allan Biville</h1>
<nav>
    <ul id="Menu">
      <li><a href="../index.html">Accueil</a></li>
      <li><a href="../curriculum-vitae.html">Curriculum Vitae</a></li>
      <li><a href="../lettre-de-motivation.html">Lettre de Motivation</a></li>
      <li><a href="../competences.html">Compétences</a></li>
      <li><a href="../veille-technologique.html">Veille Technologique</a></li>
      <li><a href="../documentation.html">Documentation</a></li>
      <li><a href="../contact.html">Contact</a></li>
  </ul>
</nav>
</br></br></br></br></br>
  <h1 id="titrepage">Contact</h1>
  <br/><h2 style="border:1px solid #ff0000; text-align:center; padding:5px;">Message envoyé!</h2></body></html>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Allan Biville</title>
  <meta author="Allan Biville"/>
  <meta description="Bienvenue sur le portfolio de Allan Biville"/>
  <link type="text/css" rel="stylesheet" href="../css/CSS.css">
  <link rel="shortcut icon" type="image/ico" href="../ressources/favicon.ico"/>
</head>
<body>
    <h1 id="titre">Portfolio - Allan Biville</h1>
<nav>
    <ul id="Menu">
      <li><a href="../index.html">Accueil</a></li>
      <li><a href="../curriculum-vitae.html">Curriculum Vitae</a></li>
      <li><a href="../lettre-de-motivation.html">Lettre de Motivation</a></li>
      <li><a href="../competences.html">Compétences</a></li>
      <li><a href="../veille-technologique.html">Veille Technologique</a></li>
      <li><a href="../documentation.html">Documentation</a></li>
      <li><a href="../contact.html">Contact</a></li>
  </ul>
</nav>
</br></br></br></br></br>
  <h1 id="titrepage">Contact</h1>
  <br/><div style="border:1px solid #ff0000; padding:5px;"><p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
  if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
  if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
    echo '</div></body></html>';
  }
}
?>