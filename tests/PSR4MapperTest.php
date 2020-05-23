<?php

namespace ZeroToMasters\Psr4Autoloader\Tests;

use PHPUnit\Framework\TestCase;
use ZeroToMasters\Psr4Autoloader\PSR4Mapper;

class PSR4MapperTest extends TestCase
{
    public function testSePuedeInicializarElMapper()
    {
        $mapper = new PSR4Mapper();

        $this->assertInstanceOf(PSR4Mapper::class, $mapper);
    }
}
