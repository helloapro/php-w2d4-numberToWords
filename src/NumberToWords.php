<?php
    class Number
    {
        function toWords($input)
        {
            $arrayOnes = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
            $inputArray = str_split((string) $input);

            while (count($inputArray) < 12) {
                array_unshift($inputArray, "0");
            }

            $billions = (int) implode(array_slice($inputArray, 0, 3));
            $millions = (int) implode(array_slice($inputArray, 3, 3));
            $thousands = (int) implode(array_slice($inputArray, 6, 3));
            $hundreds = (int) implode(array_slice($inputArray, 9, 3));
            $output = "";
            if ($billions > 0) {
                $output .= $this->hundred($billions) . "billion";
            }
            if ($millions > 0) {
                $output .= $this->hundred($millions) . "million";
            }
            if ($thousands > 0) {
                $output .= $this->hundred($thousands) . "thousand";
            }
            if ($hundreds > 0) {
                $output .= $this->hundred($hundreds);
            }
            return $output;
        }


            function hundred($input)
            {
                $arrayHundred = array("one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5, "six" => 6, "seven" => 7, "eight" => 8, "nine" => 9);
                if ($input > 99) {
                    $firstIntHundred = (int)substr($input, 0, 1);
                    $removeHundred = $input - $firstIntHundred * 100;
                    $output = array_search($firstIntHundred, $arrayHundred, true) . "hundred" . $this->numberToWords($removeHundred);
                } else {
                    $output = $this->numberToWords($input);
                }
                return $output;
            }

            function numberToWords($input)
            {
                $output = "";
                $arraySubTwenty = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
                $arrayTeens = array("eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
                $arrayTys = array("", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");

                if ($input > 10 && $input < 20) {
                    $count = 0;
                    while ($input > 11) {
                        $count ++;
                        $input -= 1;
                    }
                    $output = $output . $arrayTeens[$count];

                } else {
                    $count = 0;
                    while ($input > 9) {
                        $count ++;
                        $input -= 10;
                    }
                    $output = $output . $arrayTys[$count];

                    $count = 0;
                    while ($input > 0){
                        $count++;
                        $input--;
                    }
                    $output = $output . $arraySubTwenty[$count];
                    }
                return $output;
        }
    }
?>
