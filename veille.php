<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Allan BIVILLE</title>
  <link rel="stylesheet" href="css/style.css?v=2"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="shortcut icon" href="images/favicon.ico"/>
  <script src="https://kit.fontawesome.com/36d8ba31b1.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="conteneur_header">
  <header>
      <div class="navigation">
        <a class="navigation_logo" href="index.html">Allan BIVILLE</a>
          <span>
            <nav id="nav_id" class="nav_class">
              <a onclick="myFunction_FermerMenuQuandClique()" class="navigation_lien" href="index.html">Retour au site</a>
          </nav>
        </span>
      </div>
  </header>
    <div class="header_texteonimage">
      <img style="background-image: url('images/header.jpg'); height:300px;" src="images/header.jpg" class="header_img"/>
      <h2 class="header_texteonimage_text">Veille Technologique<br/><br/>Les Failles Webs</h2>
    </div>
  </div>
<main>
<h1 style='text-align:center;'>Types de recherches</h4>
  <h4 style='padding:0px 30px;'>- Alertes Google par mail (Google Alerts)</h4>
  <h4 style='padding:0px 30px;'>- NewsLetters par mail (Le Monde Informatique)</h4>
  <h4 style='padding:0px 30px;'>- Recherche WEB <br/><ul>Exemple : <li><a href="https://leclerc-web.fr/les-failles-des-sites-web/" target="_blank">https://leclerc-web.fr/les-failles-des-sites-web/</a></li></ul></h4>

<?php


echo "<h1 style='text-align:center;'>FLUX RSS</h1>";

echo "<h1 style='padding:0px 20px;'>L'informaticien</h1>";
$url = "https://www.linformaticien.com/magazine/cybersecurite.html?format=feed&type=rss"; 
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>Anssi</h1>";
$url2 = "https://www.ssi.gouv.fr/feed/actualite/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>Anssi Menaces / Incidents</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/cti/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';
echo "<h1 style='padding:0px 20px;'>Anssi Alerte</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/alerte/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>Anssi Générale</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>NIST NVD</h1>";
$url2 = "https://www.nist.gov/news-events/cybersecurity/rss.xml"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>MalwareBytes RSS</h1>";
$url2 = "https://blog.malwarebytes.com/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1 style='padding:0px 20px;'>Devidia</h1>";
$url = "https://www.devidia.net/les-5-failles-de-securite-les-plus-courantes/feed/"; 
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';
?>
</main>
<footer>
  <a href="veille.php"><i class="fas fa-arrow-circle-up"></i></a>  
  <h1>Portfolio <br/>Allan BIVILLE</h1>
  <a href="mentions-legales.html">Mentions légales</a>
  <p>Copyright © Tout droits réservés</p>
</footer>
<!--| JavaScript |-->
<script src="js/progress-bar.js"></script>
<script src="js/accordeon-menu.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/scroll-reveal.js"></script>
</body>
</html>


