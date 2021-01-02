<?php

class TestFunctions
{
	 public function assertEquals($expectedValue, $actualValue, $class) {

        if ($expectedValue !== $actualValue) {
            $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualValue;
            throw new \Exception($message);
        }

        echo "Class: ". $class ."<br> Test passed! <hr>";
    }
}
	