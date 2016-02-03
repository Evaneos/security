<?php

namespace spec\Evaneos\Security;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin \Evaneos\Security\UserId
 */
class UserIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(36);
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('\Evaneos\Security\UserId');
    }

    function it_can_be_represented_as_a_string()
    {
        $this->__toString()->shouldReturn('36');
    }

    function it_has_an_id()
    {
        $this->id()->shouldReturn(36);
    }
}
