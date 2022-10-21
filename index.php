<?php
/*
    Avant d'utiliser le librairie css (libscss) modifier d'abord le fichier FontMetrics.php est chager 
    $chrootValid !== true en $chrootValid == true
    donner droit 777 au dossier dompdf/lib
*/
include 'function.php';
$nom_fichier_pdf = 'test';
$url_page_scraper = "page.php";
convert($nom_fichier_pdf, $url_page_scraper);
?>