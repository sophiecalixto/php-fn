<?php

$data = require 'data.php';

// Create a new array with the country names only (no medals)
$countryNames = array_map(function ($country) {
    return $country['country'];
}, $data);
// Create a new array with the country names in uppercase
$countryNamesUpperCase = array_map(function ($country) {
    return strtoupper($country['country']);
}, $data);
//Create a new array with countries that have the letter A
$countriesWithLetterA = array_filter($data, function($country) {
    return str_contains($country['country'], 'A');
});

var_dump($countriesWithLetterA);