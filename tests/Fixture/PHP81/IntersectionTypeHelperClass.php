<?php

namespace PHP81;

class IntersectionTypeHelperClass implements IntersectionTypeHelper1Interface, IntersectionTypeHelper2Interface
{
    public function foo(): int
    {
        return 123;
    }

    public function bar(): int
    {
        return 123;
    }
}
