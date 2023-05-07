<?php
$file = "bd.txt";

$nom="";
$categorie="";
$prix="";
$url="";


    
$nom = $_POST["nom"];
$categorie = $_POST["categorie"];
$prix = $_POST["prix"];
$url = $_POST["url"];

$texte= $nom+$categorie+$prix+$url;

$handle = fopen($file,"a");
fwrite($handle, $texte);
fclose($handle);
echo $nom;


?>


