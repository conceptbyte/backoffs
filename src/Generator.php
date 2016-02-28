<?php

namespace Backoffs;

class Generator
{

    /**
     * Generate an exponential backoff for a number
     *
     * @param $number
     * @return number
     */
    public function exponential($number)
    {
        return (int) ceil(pow(M_E, $number));
    }

    /**
     * Generate a linear backoff for a number
     *
     * @param $number
     * @return int
     */
    public function linear($number)
    {
        return (int) $number += 1;
    }

    /**
     * Generate a logarithmic backoff for a number
     *
     * @param $number
     * @return int
     */
    public function logarithmic($number)
    {
        return (int) ceil(log($number));
    }
}