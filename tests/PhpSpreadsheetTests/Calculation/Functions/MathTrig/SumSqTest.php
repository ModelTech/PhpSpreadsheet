<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\MathTrig;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig;
use PHPUnit\Framework\TestCase;

class SumSqTest extends TestCase
{
    public function setUp()
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerSUMSQ
     *
     * @param mixed $expectedResult
     */
    public function testSUMSQ($expectedResult, ...$args)
    {
        $result = MathTrig::SUMSQ(...$args);
        $this->assertEquals($expectedResult, $result, '', 1E-12);
    }

    public function providerSUMSQ()
    {
        return require 'data/Calculation/MathTrig/SUMSQ.php';
    }
}
