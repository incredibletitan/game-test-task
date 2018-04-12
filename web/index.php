<?php
require_once __DIR__ . '/../vendor/autoload.php';

/*Initializing map by random count of different types landscaped*/
$landscapes = (new \libs\builders\MapBuilder())
    ->createWater(mt_rand(3, 10))
    ->createPlain(mt_rand(2, 15))
    ->createMountains(mt_rand(4, 10))
    ->createSwamp(mt_rand(3, 5))
    ->getMap(new \libs\components\RandomMapGeneratingStrategy());

/*Initializing first units base*/
$base1 = new \libs\bases\HumansBase();
$base1Units = $base1->getUnitsBuilder()
    ->createHumans(rand(1, 4))
    ->createMachinery(rand(1, 5))
    ->createPlanes(rand(1, 5))
    ->getUnits(new \libs\components\RandomUnitsGeneratingStrategy());

/*Initializing second units base*/
$base2 = new \libs\bases\HumansBase();
$base2Units = $base2->getUnitsBuilder()
    ->createHumans(rand(1, 5))
    ->createMachinery(rand(1, 4))
    ->createPlanes(rand(1, 3))
    ->getUnits(new \libs\components\RandomUnitsGeneratingStrategy());

//Placing Base 1
echo "Trying to place Base1<br/>";

foreach ($landscapes as $landscape) {
    try {
        $base1->place($landscape);
        echo 'Base 1 successfully placed on ' . get_class($landscape) . ' landscape <br/>';
        break;
    } catch (\libs\landscapes\UnsupportedLandscapeException $le) {
        echo 'Can\'t place base 1 on ' . get_class($landscape) . ' landscape<br/>';
    }
}
echo "-------------------------------------------<br/>";

//Placing Base 2
echo "Trying to place Base 2<br/>";

$reversedLandscapes = array_reverse($landscapes);

foreach ($reversedLandscapes as $landscape) {
    try {
        $base2->place($landscape);
        echo 'Base 2 successfully placed on ' . get_class($landscape) . ' landscape <br/>';
        break;
    } catch (\libs\landscapes\UnsupportedLandscapeException $le) {
        echo 'Can\'t place base 2 on ' . get_class($landscape) . ' landscape<br/>';
    }
}

echo "-------------------------------------------<br/>";

echo "Units fighting<br/>";

//Units fighting
foreach ($base1Units as $base1Unit) {
    foreach ($base2Units as $base2Unit) {
        try {
            $base1Unit->fight($base2Unit);
            echo 'Base 1 unit ' . get_class($base1Unit) . ' successfully destroyed ' . get_class($base2Unit) . '<br/>';
        } catch (\libs\units\UnsupportedUnitException $e) {
            echo 'Base 1 unit ' . get_class($base1Unit) . ' can\'t fight with ' . get_class($base2Unit) . '<br/>';
        }
    }
}

echo "-------------------------------------------<br/>";

echo "Units moving<br/>";
//Units moving
foreach ($landscapes as $map) {
    foreach ($base1Units as $base1Unit) {
        try {
            $base1Unit->move($map);
            echo 'Base 1 unit ' . get_class($base1Unit) . ' successfully moved on ' . get_class($map) . '<br/>';
        } catch (\libs\landscapes\UnsupportedLandscapeException $e) {
            echo 'Base 1 unit ' . get_class($base1Unit) . ' can\'t move on ' . get_class($map) . '<br/>';
        }
    }
}