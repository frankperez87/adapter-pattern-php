<?php

namespace Acme;

class Person
{
    /**
     * @param BookInterface $book
     */
    public function read(BookInterface $book)
    {
        echo $book->open();
        echo $book->turnPage();
    }
}
