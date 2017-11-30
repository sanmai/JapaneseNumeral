[![Build Status](https://travis-ci.org/sanmai/JapaneseNumeral.svg?branch=master)](https://travis-ci.org/sanmai/JapaneseNumeral)
[![Coverage Status](https://coveralls.io/repos/github/sanmai/JapaneseNumeral/badge.svg?branch=master)](https://coveralls.io/github/sanmai/JapaneseNumeral?branch=master)

[![Latest Stable Version](https://poser.pugx.org/sanmai/japanese-numerals/version)](https://packagist.org/packages/sanmai/japanese-numerals)
[![License](https://poser.pugx.org/sanmai/japanese-numerals/license)](https://packagist.org/packages/sanmai/japanese-numerals)

# JapaneseNumeral
Library to convert Japanese numeral to their Western variants (AKA Hindu-Arabic numerals)

Installation is simple:

    composer require sanmai/japanese-numerals

# Usage

To convert a numberal from Hindu-Arabic numerals to Japanese numerals, use:

```php
$japanese = \JapaneseNumerals\JapaneseNumerals::fromArabicToJapanese(123);
var_dump($japanese);
```
    
Should output:

    string(12) "百二十三"

To convert a string of Japanese numerals to Hindu-Arabic numerals, use:

```php
$arabic = \JapaneseNumerals\JapaneseNumerals::fromJapaneseToArabic('二千二十五');
var_dump($arabic);
```

Should output:

    string(4) "2025"

# Known bugs

This library isn't bug-free. Most notably it fails to interpret `九百八十三万六千七百三` as `9836703` and `二十億三千六百五十二万千八百一` as `2036521801`, examples given in [the section on large numbers in the Wikipedia article](https://en.wikipedia.org/wiki/Japanese_numerals#Large_numbers).

# Acknowledgements

Special thanks go to Navarr Barnier (@navarr) for [the initial implementation of the algorithm](https://github.com/oftn-oswg/common/blob/master/number/japanese.php). 