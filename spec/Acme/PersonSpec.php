<?php

namespace spec\Acme;

use Acme\BookInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    protected $book;

    function let(BookInterface $book)
    {
        $this->book = $book;
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Person');
    }

    function it_should_be_able_to_start_reading()
    {
        $this->read($this->book);
    }
}
