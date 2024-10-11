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
    inserisciVideoYoutube($listaVideo[0], 50, 250);

    function inserisciVideoYoutube($v, $larPerc, $altPx){
        echo "<h2>$v[titolo]</h2>";
        echo "<iframe src='https://www.youtube.com/watch?v=" . $v["idVideo"] . "' height='$altPx %' width='$larPerc px' ></iframe>";
    }
    ?>
</body>
</html>