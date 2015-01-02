<?php

namespace Acme;

/**
 * Interface BookInterface
 * @package Acme
 */
interface BookInterface
{
    /**
     * @return mixed
     */
    public function open();

    /**
     * @return mixed
     */
    public function turnPage();
}