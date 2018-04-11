<?php
require_once __DIR__ . '/../vendor/autoload.php';

//$mapBuilder = new \libs\managers\MapBuilder();
//$mapBuilder->createMountains(3);
//$mapBuilder->createPlain(3);
//$mapBuilder->createWater(3);
//$landscapes = $mapBuilder->getMap();

//(new \libs\bases\ElvesBase())->place(new \libs\landscapes\Plain());

(new \libs\units\Human())->fight(new \libs\units\Machinery());
(new \libs\units\Human())->fight(new \libs\units\Plane());








