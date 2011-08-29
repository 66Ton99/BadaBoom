<?php

namespace BadaBoom\Tests\ChainNode\Filter;

class ExceptionClassFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     * @test
     */
    public function shouldImplementChainNodeInterface()
    {
        $rc = new \ReflectionClass('BadaBoom\ChainNode\Filter\ExceptionClassFilter');
        $this->assertTrue($rc->implementsInterface('BadaBoom\ChainNode\ChainNodeInterface'));
    }
}