<?php
    $albums = [
        "Citizen of Glass"=>4.5,
        "Night"=>9,
        "New Eyes"=>5,
        "Strange Trails"=>10
    ];
    echo("Overzicht van alle albums:".PHP_EOL);
    $tot_prijs = 0;
    $count = count($albums);
    foreach($albums as $album=>$prijs){
        echo($album." kost €".$prijs.PHP_EOL);
        $tot_prijs += $prijs;
    }
    $gem_prijs = round($tot_prijs / $count,2);
    echo("Het totaalbedrag van alle albums is €".$tot_prijs.PHP_EOL);
    echo("De gemiddelde prijs van alle albums is €".$gem_prijs.PHP_EOL);
?>