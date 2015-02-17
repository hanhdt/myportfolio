<?php

namespace App\Parsers;

class Field
{

    public function parse($fields)
    {
        // title:string, body:text
        $declarations = explode(', ', $fields);
        $parsed = [];

        foreach ($declarations as $declaration) {
            list($property, $type) = explode(':', $declaration);
            $parsed[$property] = $type;
        }

        return $parsed;
    }
}
