<?php

class DiscountCalculatorTest
{
    public function ShouldApply_WhenValueIsAboveTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
		$test = new TestFunctions();
		$test->assertEquals($expectedValue, $totalWithDiscount, 'DiscountCalculator 1');
    }

    public function ShouldNotApply_WhenValueIsBellowTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 90;
		
		$test = new TestFunctions();
		$test->assertEquals($expectedValue, $totalWithDiscount, 'DiscountCalculator 2');
    }

    
}