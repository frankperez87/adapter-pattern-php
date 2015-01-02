<?php

namespace Acme;

/**
 * Interface eReaderInterface
 * @package Acme
 */
interface eReaderInterface
{
    /**
     * @return mixed
     */
    public function turnOn();

    /**
     * @return mixed
     */
    public function pressNextButton();
}