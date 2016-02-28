<?php

namespace Backoffs;

class Generator
{

    /**
     * Generate an exponential backoff for a number
     *
     * @param $attempts
     * @return number
     */
    public function exponential($attempts)
    {
        return (int) ceil(pow(M_E, $attempts));
    }

    /**
     * Generate a linear backoff for a number
     *
     * @param $attemps
     * @return int
     */
    public function linear($attemps)
    {
        return (int) $attemps += 1;
    }

    /**
     * Generate a logarithmic backoff for a number
     *
     * @param $attempts
     * @return int
     */
    public function logarithmic($attempts)
    {
        return (int) ceil(log($attempts));
    }
}