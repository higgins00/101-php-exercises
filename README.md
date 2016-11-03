# PHP Exercises

## Getting Started

1. Fork this repository
2. Copy the Git SSH URL of your forked repository
3. `git clone` it in your local Code folder

## Exercises

1. **Guest List:** Given an array of names like `array("Alex", "Nikki", "Sumeet")`, write a function that will return a string with the number of names in the array, as well as each name, like: `"Your event has 3 RSVPs: Alex, Nikki, and Sumeet."`

2. **High Scores:** Given the associative array provided to you in [02-high-scores.php](./02-high-scores.php), write a function that only returns the names/keys that have an integer value higher than `90`.

3. **Date Calculator:** Given three different numbers representing the day, month, and year of a date, write a function that returns the number of days it has been since that date occurred. You do not need to account for leap years. 

This problem is slightly more complicated; break it down in stages:

    - First, write your function so that it only takes a number representing the year and returns the number of years that have passed since the year in the string.
        + Ex: `dateCalculator(1999)`; should return `17`
    - Then, alter your function so that is takes an argument for the year and month and returns the number of months that have passed.
        + Ex: `dateCalculator(06, 2016)`; should return `5`
    - Then, alter your function so that it still takes arguments for year and month but returns the number of days that have passed in those months. 
    - Finally, add a third argument to your function to represent days and alter your function to calculate the precise number of days that have passed.

## Running Your Code

All of the files where you will work have one line: `echo nameOfFunction($someArgument);` this line will give you meaningful output when you run the command `php name-of-file.php` in Terminal.

