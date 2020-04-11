<?php

declare(strict_types=1);

namespace FGhazaleh\Support\String;

use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{

    /**
     * @test
     */
    public function testingSubString()
    {
        $str = new Str('Franco Ghazaleh');

        $result = $str->subString(4)->toString();

        $this->assertSame('co Ghazaleh',$result);
    }

    /**
     * @test
     */
    public function testingTrim()
    {
        $str = new Str('  Franco  ');
        $this->assertSame('Franco',(string)$str->trim());

        $str = new Str(' Franco ');
        $this->assertSame(' Franco',(string)$str->rtrim());

        $str = new Str(' Franco ');
        $this->assertSame('Franco ',(string)$str->ltrim());
    }

    /**
     * @test
     */
    public function testingStringLength()
    {
        $str = new Str('Franco Ghazaleh');

        $this->assertSame(15,$str->length());
    }

    /**
     * @test
     */
    public function testingStringUpperCaseAndLowerCase()
    {
        $str = new Str('Franco');

        $this->assertSame('FRANCO',$str->toUpper()->toString());
        $this->assertSame('franco',$str->toLower()->toString());
    }

    /**
     * @test
     */
    public function testingStringReplace()
    {
        $str = new Str('Franco Ghazaleh');

        $result = $str->replace('Gh','3h');

        $this->assertSame('Franco 3hazaleh',$result->toString());
    }

    /**
     * @test
     */
    public function testingStringAfterAndBefore()
    {
        $str = new Str('Franco');

        $this->assertSame('Franco Ghazaleh',$str->after(' Ghazaleh')->toString());

        $this->assertSame('Awesome Franco',$str->before('Awesome ')->toString());
    }

    /**
     * @test
     */
    public function testingStringReverse()
    {
        $str = new Str('Franco');

        $this->assertSame('ocnarF',$str->reverse()->toString());

    }

    /**
     * @test
     */
    public function testingChartAt()
    {
        $str = new Str('Franco Ghazaleh');
        $this->assertSame('o',$str->chartAt(5));
    }

    /**
     * @test
     */
    public function testingChartCodeAt()
    {
        $str = new Str('Franco Ghazaleh');
        $this->assertSame(99,$str->chartCodeAt(4));
    }

    /**
     * @test
     */
    public function testingIndexOf()
    {
        $str = new Str('Franco Ghazaleh');

        $this->assertSame(7,$str->indexOf('G'));

        $this->assertSame(-1,$str->indexOf('GG'));
    }

    /**
     * @test
     */
    public function testingLastIndexOf()
    {
        $str = new Str('Franco Ghazaleh');

        $this->assertSame(11,$str->lastIndexOf('a'));

        $this->assertSame(-1,$str->lastIndexOf('GG'));
    }
}