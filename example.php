<?php

require 'vendor/autoload.php';

$japanese = \JapaneseNumerals\JapaneseNumerals::fromArabicToJapanese(123);

var_dump($japanese);
//string(12) "百二十三"

$arabic = \JapaneseNumerals\JapaneseNumerals::fromJapaneseToArabic('二千二十五');

var_dump($arabic);
//string(4) "2025"
