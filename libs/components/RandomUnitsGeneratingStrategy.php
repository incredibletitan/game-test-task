<?php

namespace libs\components;

/**
 * Class RandomMapGeneratingStrategy
 *
 * @author Yuriy Stos
 */
class RandomUnitsGeneratingStrategy implements UnitsGeneratingStrategy
{
    /**
     * Returns shuffled array
     *
     * @param array $landscapes
     * @return array
     */
    public function process(array $landscapes): array
    {
        $shuffledArray = $landscapes;
        shuffle($shuffledArray);

        return $shuffledArray;
    }
}