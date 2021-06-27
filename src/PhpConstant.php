<?php

namespace Kevinpurwito\PhpConstant;

use ReflectionClass;

class PhpConstant
{
    public static function all(): array
    {
        $ref = new ReflectionClass(static::class);
        $constants = $ref->getConstants();
        $arr = [];
        foreach ($constants as $key => $value) {
            $arr[] = $value;
        }
        return $arr;
    }

    public static function options(): array
    {
        $arr = [];
        $constants = static::all();
        foreach ($constants as $constant) {
            $arr[$constant] = ucwords(str_replace('_', ' ', $constant));
        }
        return $arr;
    }

    public static function asString($glue = ','): string
    {
        return implode($glue, static::all());
    }
}
