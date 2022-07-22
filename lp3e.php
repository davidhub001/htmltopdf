<?php 
include ('data.php');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lp3e</title>
    <link rel="stylesheet" href="style.css">
    <style><?php 
    include('style.css');
    ?></style>
</head>
<body>
    <div class="haut">   
        <div class="entete">
            <div class="logmmrs"><img src="https://mmrs.gov.mg/wp-content/plugins/mmrs/img_logo/mmrs.png" alt="" srcset=""></div>
            <div class="logmada">
                <img src="https://mmrs.gov.mg/wp-content/uploads/2022/03/cropped-logo-mada.png" alt="" srcset="">
            </div>
            <div class="qrcode"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Qrcode_wikipedia_fr_v2clean.png/220px-Qrcode_wikipedia_fr_v2clean.png" alt="" srcset=""></div>
        </div>
        <div class="mmrs_texte">
                <p>MINISTERE DES MINES</p>
                <p>ET DES RESSOURCES STRATEGIQUES</p>
                <p>-----------------------</p>
                <p>SECRETARIAT GENERAL</p>
                <p>----------------------</p>
                <p>DIRECTION INTERREGIONALE TOAMASINA</p>
                <p>---------------------</p>
        </div>
        <div class="mmrs_texte2">
            <p class="xx">LAISSEZ – PASSER MODELE III-E</p>
            <p>N° : MMRS/SG/DIRTO/2022/PI/IIIE-0001</p>
        </div>
        <div class="data_texte">
            <p class="yy">1. Informations sur l’Exportateur</p>
            <p>Nom et Prénoms  : <span><?php echo $data->nom?></span></p>
            <p>Type de l’autorisation : <span><?php echo $data->autorisation?></span></p>
            <p>N° AD ou autorisation : <span><?php echo $data->num_auto?></span></p>
            <p>Date : <span><?php echo $data->date?></span></p>
            <p class="yy">2. Informations sur les Produits</p>
        </div>
    </div>
    <div class="table">
        <table>
            <tr>
                <th>Substances</th>
                <th>Etat</th>
                <th>Poids (Kg)</th>
            </tr>
            <?php 
            $total = 0;
            for($i=0;$i<count($data->data_table);$i++):?>
            <tr>
                <td><span><?php echo $data->data_table[$i]['subs']?></span></td>
                <td><span><?php echo $data->data_table[$i]['etat']?></span></td>
                <td><span><?php echo $data->data_table[$i]['poids']?></span></td>
            </tr>
            <?php 
            $total += $data->data_table[$i]['poids'];
            endfor;?>
            <tr>
                <th colspan="2" class="tt">Total</th>
                <td class="tt"><span><?php echo $total?></span></td>
            </tr>
        </table>
    </div>
    
    <div class="data_texte2">
        <p class="yy">3. Information sur l’importateur</p>
        <p>Nom et Prénoms : <span><?php echo $data->nom_imp?></span></p>
        <p>Adresse : <span><?php echo $data->address_import?></span></p>
        <p>Pays de destination : <span><?php echo $data->pays?></span></p>
        <p class="fait">Fait à Toamasina, le <span><?php echo $data->fait?></span></p>
    </div>
</body>
</html>