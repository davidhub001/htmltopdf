<?php
use Dompdf\Dompdf;
function convert($nomfichier,$page){  
    //  include autoloader
    require_once 'dompdf/autoload.inc.php';
    // reference the Dompdf namespace
    // instantiate and use the dompdf class
    $dompdf = new Dompdf(array('enable_remote' => true));
    $dompdf->loadHtml(traite_page($page));
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'portrait');
    // $dompdf->setPaper('A4', 'landscape');
    // Render the HTML as PDF
    $dompdf->render();
    // Output the generated PDF to Browser
    $dompdf->stream($nomfichier,array("Attachment"=>0));
}
function traite_page($page){
    $html =  file_get_contents($page);
    $html = traite_url_image($page,$html);
    return css_font().$html;
}
function css_font(){
    $css = "<style>".file_get_contents('libscss/font_style.css')."</style>";
    $css .= "<style>".file_get_contents('libscss/style.css')."</style>";
    return $css;
}
function traite_url_image($url,$content){
    preg_match_all('/<img.*src="(.*)".*\/>/Uims', $content, $array_url);
    foreach($array_url[1] as $k){
        $new_reg = str_replace("/","\/",$k);
        $content = preg_replace("/$new_reg/Uims", $url.$k, $content);
    }
    return $content;
}