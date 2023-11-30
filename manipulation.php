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

var_dump($countryNamesUpperCase);