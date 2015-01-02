<?php

namespace spec\Acme;

use Acme\Kindle;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KindleAdapterSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new Kindle);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\KindleAdapter');
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
