<?php

namespace spec\Evaneos\Security;

use Evaneos\Security\UserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin \Evaneos\Security\User
 */
class UserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new UserId(17));
    }
    function it_is_initializable()
    {
        $this->shouldHaveType('\Evaneos\Security\User');
    }

    function it_has_an_id()
    {
        $userId = new UserId(12);
        $this->beConstructedWith($userId);
        $this->id()->shouldReturn($userId);
    }

    function it_can_be_represented_as_a_string_using_UserId()
    {
        $this->__toString()->shouldReturn('17');
    }
}
