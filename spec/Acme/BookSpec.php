<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BookSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Book');
        $this->shouldImplement('Acme\BookInterface');
    }

    function it_should_allow_you_to_open_the_book()
    {
        $this->open()->shouldBeString();
    }

    function it_should_allow_you_to_turn_the_page()
    {
        $this->turnPage()->shouldBeString();
    }
}
