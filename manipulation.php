<?php

$data = require 'data.php';

// Create a new array with the country names only (no medals)
$countryNames = array_map(fn (array $country): string => $country['country'], $data);
// Create a new array with the country names in uppercase
$countryNamesUpperCase = array_map(fn (array $country): string => strtoupper($country['country']), $data);
//Create a new array with countries that have the letter A
$countriesWithLetterA = array_filter($data, fn($country) : string => str_contains($country['country'], 'A'));
//Create a new array with the value of all medal
$allMedals = array_map(fn ($country) : float|int => array_sum($country['medals']), $data);
$allMedalsQuantity = array_reduce($allMedals, fn($countable, $actualCount) : int => $countable + $actualCount, 0);

var_dump($allMedalsQuantity);