<?php

namespace bw\math;

/**
 * Class Time
 * @package bw\math
 */
class Time {

    /**
     * @param int $time
     * @return string
     */
    public static function calculateTime(int $time): string {
        return gmdate("i:s", $time); 
    }
}
