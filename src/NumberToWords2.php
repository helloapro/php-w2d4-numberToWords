<?php
    class Number2
    {
        function thousand($input)
        {
            if ($input > 10999 && $input < 20000) {
                $firstTeenThousand = (int)substr($input, 0, 2);
                $removeThousand = $input - $firstTeenThousand * 1000;
                $output = $this->numberToWords($firstTeenThousand) . "thousand" . $this->hundred($removeThousand);

            } else {
                if ($input > 99999) {
                    $firstHundredThousand = (int)substr($input, 0, 3);
                    $removeThousand = $input - $firstHundredThousand * 1000;
                    $output = $this->hundred($firstHundredThousand) . "thousand" . $this->hundred($removeThousand);
                } elseif ($input > 999) {
                    $firstThousand = (int)substr($input, 0, 1);
                    $removeThousand = $input - $firstThousand * 1000;
                    $output = $this->numberToWords($firstThousand) . "thousand" . $this->hundred($removeThousand);
                }
            }
            // if ($input < 11000) {
            //     $firstHundredThousand = (int)substr($input, 0, 3);
            //     $removeThousand = $input - $firstHundredThousand * 1000;
            //     $output = $this->numberToWords($firstHundredThousand) . "thousand" . $this->hundred($removeThousand);
            // }
            return $output;
        }

        function hundred($input)
        {
            $arrayHundred = array("one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5, "six" => 6, "seven" => 7, "eight" => 8, "nine" => 9);
            if ($input > 99) {
                $firstIntHundred = (int)substr($input, 0, 1);
                $removeHundred = $input - $firstIntHundred * 100;
                $output = array_search($firstIntHundred, $arrayHundred, true) . "hundred" . $this->numberToWords($removeHundred);
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
