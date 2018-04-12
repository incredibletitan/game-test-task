<?php
require_once __DIR__ . '/../vendor/autoload.php';

/*Initializing map by random count of different types landscaped*/
$landscapes = (new \libs\managers\MapBuilder())
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
        break;
    } catch (\libs\landscapes\UnsupportedLandscapeException $le) {
        echo "Trying to place Base1<br/>";
    }
}

//Placing Base 2
echo "Trying to place Base 2<br/>";

$reversedLandscapes = array_reverse($landscapes);

foreach ($reversedLandscapes as $landscape) {
    try {
        $base2->place($landscape);
        break;
    } catch (\libs\landscapes\UnsupportedLandscapeException $le) {
        echo "Trying to place Base2<br/>";
    }
}

//Units fighting
foreach ($base1Units as $base1Unit) {
    foreach ($base2Units as $base2Unit) {
        try {
            $base1Unit->fight($base2Unit);
            break;
        } catch (\libs\units\UnsupportedUnitException $e) {
            echo $e->getMessage() . "<br/>";
        }
    }
}

//Units moving
foreach ($landscapes as $map) {
    foreach ($base1Units as $base1Unit) {
        try {
            $base1Unit->move($map);
            break;
        } catch (\libs\landscapes\UnsupportedLandscapeException $e) {
            echo $e->getMessage() . "<br/>";
        }
    }
}