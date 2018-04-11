<?php
require_once __DIR__ . '/bootstrap.php';

use libs\units\Machinery;
use libs\landscapes\Mountains;
use libs\landscapes\Water;
use libs\maps\Map;

$map = new Map();
$map->addLandscape(new Mountains());
$map->addLandscape(new Water());
$map->addLandscape(new \libs\landscapes\Plain());
$map->addLandscape(new \libs\landscapes\Plain());
$map->addLandscape(new \libs\landscapes\Water());

$humanBase = new \libs\bases\HumansBase();
$elvesBase = new \libs\bases\ElvesBase();

echo $humanBase->place($map);


