<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Youtube</title>
</head>
<body>
    <?php
    $v1 = array("titolo" => "A MILANO CON 5000 CAVALLI | #IGAC 19", "idVideo" => "9YPiZ8Qu-os");
    $v2 = array("titolo" => "ACCADONO COSE EP:17", "idVideo" => "-qcgdussKDQ");
    $v3 = array("titolo" => "I PIU' SCORRETTI CAMPIONI di Formula 1", "idVideo" => "MpPuEj7RuQs");
    $listaVideo = array($v1, $v2, $v3);
    //inserisciVideoYoutube($listaVideo[0], 50, 250);
    $alt = 250;
    $lar = 50;
    
    foreach ($listaVideo as $key) {
        inserisciVideoYoutube($key, $alt, $lar);
        $alt += 125;
        $lar += 25;
    }

    function inserisciVideoYoutube($v, $altPx, $larPerc){
        echo "<h2>" . $v["titolo"] . "</h2>";
        echo "<iframe height='{$altPx}px' width='{$larPerc}%' src='https://www.youtube.com/embed/" . $v["idVideo"] . "'></iframe>";
    }

    
    ?>
</body>
</html>