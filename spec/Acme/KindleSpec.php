<?php

namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class KindleSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\Kindle');
    }

    function it_can_turn_on()
    {
        $this->turnOn()->shouldBeString();
    }

    function it_can_go_to_next_page()
    {
        $this->pressNextButton()->shouldBeString();
    }
}
