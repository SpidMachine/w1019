<?php

use PHPUnit\Framework\TestCase;

class OutputTest extends TestCase
{
    public function test()
    {
        $this->GroupController("`group`");
        echo "`group`";
    }
}