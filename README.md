# php-phrase-builder
Function to create a list of phrases based on 2 arrays and a template phrase. Used to create keywords for Adwords.

Needed a way to create a phrase and substitute in 2 places. for example:

array 1: pizza, milk, apple, soda

array 2: Arizona, Alaska, California

Phrase: Best {1} in {2}

Result is 12 phrases like: Best pizza in Arizona, Best Pizza in Alaska ... Best Soda in California

I used it to create a bunch of 1000+ block of phrases for adwords.

## Usage

//Set up 2 arrays in PHP
<?php
require_once('functions.php');
$cities = [
    'gilbert',
    'winston-salem',
    'north las vegas',
    'norfolk',
    'chesapeake',
    'garland',
    'irving',
    'hialeah',
    'fremont',
    'boise',
    'richmond',
    'baton rouge',
    'spokane',
];

$az_cities = [
    'phoenix',
    'chandler',
    'mesa',
    'tucson',
    'glendale',
    'scottsdale',
    'gilbert',
    'tempe',
    'peoria',
    'surprise',
    'yuma',
    'avondale',
    'flagstaff',
    ];


//create phrase
$the_phrase = 'Distance between {1} and {2}';

//use functions to create phrases and convert to CSV file
$final = combine_arrays($az_cities, $cities, $the_phrase);

//optional - convert to csv. Other display options might be better for some people.
create_csv_from_array($final);
