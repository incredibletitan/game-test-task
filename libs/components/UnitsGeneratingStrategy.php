<?php

namespace libs\components;

/**
 * Class UnitsGeneratingStrategy
 *
 * @author Yuriy Stos
 */
interface UnitsGeneratingStrategy
{
    /**
     * Processing array with units
     *
     * @param array $units
     * @return array
     */
    public function process(array $units): array;
}