https://docs.google.com/document/d/13VL375qrXua75u4T8NvRMxx2lIPUcnvHrZXnA0nPFfM/edit?usp=sharing
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Allan BIVILLE</title>
  <link rel="shortcut icon" href="images/favicon.ico"/>
</head>
<body>
<?php
echo "<h1>L'informaticien</h1>";
$url = "https://www.linformaticien.com/magazine/cybersecurite.html?format=feed&type=rss"; 
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1>Anssi</h1>";
$url2 = "https://www.ssi.gouv.fr/feed/actualite/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1>Anssi Menaces / Incidents</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/cti/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';
echo "<h1>Anssi Alerte</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/alerte/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1>Anssi Générale</h1>";
$url2 = "https://www.cert.ssi.gouv.fr/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1>NIST NVD</h1>";
$url2 = "https://www.nist.gov/news-events/cybersecurity/rss.xml"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';

echo "<h1>MalwareBytes</h1>";
$url2 = "https://blog.malwarebytes.com/feed/"; 
$rss = simplexml_load_file($url2);
echo '<ul>';

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 echo '<li><a href="'.$item->link.'">'.$item->title.'</a> ('.$date.')</li>';
}
echo '</ul>';


?>
</body>
</html>
