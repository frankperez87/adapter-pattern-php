<?php

namespace Acme;

/**
 * Class Kindle
 * @package Acme
 */
class Kindle implements eReaderInterface
{

    /**
     * @return string
     */
    public function turnOn()
    {
        return "turn the Kindle on";
    }

    /**
     * @return string
     */
    public function pressNextButton()
    {
        return "press the next button on the Kindle";
    }
}
