# php-phrase-builder
Function to create a list of phrases based on 2 arrays and a template phrase. Used to create keywords for Adwords.

Needed a way to create a phrase and substitute in 2 places. for example:

array 1: pizza, milk, apple, soda

array 2: Arizona, Alaska, California

Phrase: Best {1} in {2}

Result is 12 phrases like: Best pizza in Arizona, Best Pizza in Alaska ... Best Soda in California

I used it to create a bunch of 1000+ block of phrases for adwords.

## Usage

Set up 2 arrays in PHP

Create phrase

combine phrases using function

display or create csv with resulting csv
