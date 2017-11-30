<?php
/*
 * Copyright 2014 OFTN Inc.
 * Copyright 2017 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the MIT License; see LICENSE for details.
 */

require 'vendor/autoload.php';

$japanese = \JapaneseNumerals\JapaneseNumerals::fromArabicToJapanese(123);

var_dump($japanese);
//string(12) "百二十三"

$arabic = \JapaneseNumerals\JapaneseNumerals::fromJapaneseToArabic('二千二十五');

var_dump($arabic);
//string(4) "2025"
