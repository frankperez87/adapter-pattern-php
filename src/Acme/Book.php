<?php

namespace Acme;

/**
 * Class Book
 * @package Acme
 */
class Book implements BookInterface
{

    /**
     * @return string
     */
    public function open()
    {
        return 'opening the paper book.';
    }

    /**
     * @return string
     */
    public function turnPage()
    {
        return 'turning the page of the paper book.';
    }
}
