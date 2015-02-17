<?php

namespace spec\App\Parsers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FieldSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Parsers\Field');
    }

    function it_parses_fields_into_an_array()
    {
        $this->parse('title:string')->shouldReturn([
            'title' => 'string'
        ]);

        $this->parse('title:string, body:text')->shouldReturn([
            'title' => 'string',
            'body' => 'text',
        ]);
    }
}
