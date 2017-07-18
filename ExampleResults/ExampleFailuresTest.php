<?php

namespace ExampleResults;

use Money\Money;
use PHPUnit\Framework\TestCase;

class ExampleFailuresTest extends TestCase
{
    function testFailure()
    {
        $money = Money::EUR(23);
        $money->divide(0);
    }

    function testFailure2()
    {
        $this->assertEquals(Money::EUR(2), Money::EUR(3));
    }

    function testIncomplete()
    {
        $this->markTestIncomplete('No yet finished...');
    }

    function testFailure3()
    {
        $this->assertEquals([], [3, 33]);
    }

    function testFailure4()
    {
        echo "some output\nfrom f4";
        $this->assertTrue(false);
    }

    /**
     * @dataProvider run3x
     */
    function testFailure5($a, $b, $c, $d, $e, $f)
    {
        $this->assertSame($a, $c);
    }

    /**
     * @dataProvider run3x
     */
    function testSkipped()
    {
        $this->markTestSkipped('This test is currently failing');
    }

    /**
     * @depends testFailure
     */
    function testDepends1()
    {
    }

    function testOutput()
    {
        echo "has output\non lines";
        fwrite(STDERR, "some output\non std err");
        $this->assertTrue(true);
    }

    public static function run3x()
    {
        $num = ['one', 'two', 'three', 'four', 'five', 'six'];
        $arr = [];
        $i = 1;
        foreach ($num as $txt) {
            $arr[] = [$i, $txt];
            ++$i;
        }

        return [
            range(1, 6),
            $num,
            $arr,
        ];
    }
}
