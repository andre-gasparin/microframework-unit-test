<?php

class SumCalculatorTest
{
    public function WhenSumTest() {

        $sumCalculator = new SumCalculator();

        $totalValue = 100;
        $totalWithSum = $sumCalculator->apply($totalValue);

        $expectedValue = 200;
		$test = new TestFunctions();
		$test->assertEquals($expectedValue, $totalWithSum, 'SumCalculator 1');
    }

    

    
}