<?php

namespace libs\components;

/**
 * interface MapGeneratingStrategy
 *
 * @author Yuriy Stos
 */
interface MapGeneratingStrategy
{
    /**
     * Processing array with landscapes
     *
     * @param array $landscapes
     * @return array
     */
    public function process(array $landscapes): array;
}
