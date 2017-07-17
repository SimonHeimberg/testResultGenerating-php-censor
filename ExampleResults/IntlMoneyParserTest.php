<?php

namespace ExampleResults;

require 'vendor/moneyphp/money/tests/Parser/IntlMoneyParserTest.php';

use Tests\Money\Parser\IntlMoneyParserTest as RealTest;

class IntlMoneyParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provideFormattedMoney
     */
    public function testIntlParser($string, $units)
    {
        $test = new RealTest(); //IntlMoneyParserTest();
    }

    public static function provideFormattedMoney()
    {
        return [
            ['$1000.50', 100050],
            ['$1000.00', 100000],
        ];
    }
}
