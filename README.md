# JapaneseNumeral
Library to convert Japanese numeral to their Western variants (AKA Hindu-Arabic numerals)

# Known bugs

This library isn't bug-free. Most notably it fails to interpret `九百八十三万六千七百三` as `9836703` and `二十億三千六百五十二万千八百一` as `2036521801`, examples given in [the section on large numbers in the Wikipedia article](https://en.wikipedia.org/wiki/Japanese_numerals#Large_numbers).