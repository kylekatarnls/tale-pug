<?php

namespace Tale\Jade\Lexer\Token;

use Tale\Jade\Lexer\TokenBase;
use Tale\Jade\Util\NameTrait;

class DoctypeToken extends TokenBase
{
    use NameTrait;

    protected function dump()
    {
        return $this->getName();
    }
}