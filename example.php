<?php
require_once('functions.php'); //include functions file, used below

//create 2 arrays which will be combined
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
