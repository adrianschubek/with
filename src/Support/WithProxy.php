<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Support;


class WithProxy
{
    public $obj;

    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    public function __call($name, $arguments)
    {
        $this->obj->{$name}(...$arguments);

        return $this->obj;
    }
}