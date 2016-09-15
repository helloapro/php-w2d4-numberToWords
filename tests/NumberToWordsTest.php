<?php
    require_once 'src/NumberToWords.php';

    class NumberToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_toWord_ones()
        {
            $test_numberToWord = new Number;
            $input = 1;

            $result = $test_numberToWord->toWords($input);

            $this->assertEquals("one", $result);
        }

        function test_toWord_teens()
        {
            $test_toWord = new Number;
            $input = 15;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("fifteen", $result);
        }

        function test_toWord_Tys()
        {
            $test_toWord = new Number;
            $input = 43;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("fortythree", $result);
        }

        function test_toWord_Hundreds()
        {
            $test_toWord = new Number;
            $input = 243;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("twohundredfortythree", $result);
        }

        function test_toWord_teenThousands()
        {
            $test_toWord = new Number;
            $input = 15243;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("fifteenthousandtwohundredfortythree", $result);
        }

        function test_toWord_hundredThousands()
        {
            $test_toWord = new Number;
            $input = 115243;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("onehundredfifteenthousandtwohundredfortythree", $result);
        }

        function test_toWord_Thousands()
        {
            $test_toWord = new Number;
            $input = 7890;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("seventhousandeighthundredninety", $result);
        }

        function test_toWord_Billions()
        {
            $test_toWord = new Number;
            $input = 99789015450;

            $result = $test_toWord->toWords($input);

            $this->assertEquals("ninetyninebillionsevenhundredeightyninemillionfifteenthousandfourhundredfifty", $result);
        }

    }
?>
