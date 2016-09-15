# Number to Words #

#### An application to practice BDD in PHP, September 15th, 2016

#### By Josh Huffman and April Peng

## Description ##

This application let's users enter an amount of cents and shows the smallest number of quarters, dimes, nickels, and pennies needed to make change.

## Setup/Installation Instructions ##

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Return plain english string of single-digit number.
    * input: 1
    * output: "one"

* Return plain english string of double-digit number.
    * input: 23
    * output: "twenty-three"

* Return plain english string of triple-digit number.
    * input: 563
    * output: "five hundred sixty-three"

* Return plain english string of 4-digit number.
    * input: 7090
    * output: "seven thousand ninety"

* Return plain english string of 7-digit number.
    * input: 2015300
    * output: "two million fifteen thousand three hundred"

* Return plain english string of 4-digit number.
    * input: 23
    * output: "twenty-three"

* Handle special cases.
    * input: 12
    * output: "twelve"




## Known Bugs ##

There are no known bugs at this time.

## Support and Contact Details ##

Please report any bugs or issues example@gmail.com.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 Josh Huffman & April Peng
