
<?php
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['email']);
    $objet = htmlentities($_POST['objet']);
    $message = htmlentities($_POST['message']);
    
    // Variables concernant l'email
    $destinataire = 'contact@vitotel.fr'; // Adresse email du webmaster
    $sujet = 'Contact Vitotel'; // Titre de l'email
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
</head>
<body>
<a href="index.html">Accueil</a>
</br></br></br></br></br>
  <h1>Contact</h1>
  <br/><h2 style="border:1px solid #ff0000; text-align:center; padding:5px;">Message envoyé!</h2></body></html>'; // Afficher un message pour indiquer que le message a été envoyé
  } else { // S'il y a un moins une erreur
    echo '<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
<a href="index.html">Accueil</a>
</br></br></br></br></br>
  <h1>Contact</h1>
  <br/><h2 style="border:1px solid #ff0000; text-align:center; padding:5px;">Echec... Message non envoyé...</h2></body></html>';
    echo '</body></html>';
  }
}
?>