<?php
/**
 * Copyright (c) 2020. Adrian Schubek
 * https://adriansoftware.de
 */

namespace adrianschubek\Support;

function with($val, callable $callback = null)
{
    if ($callback === null) {
        return new WithProxy($val);
    }

    $callback($val);

    return $val;
}