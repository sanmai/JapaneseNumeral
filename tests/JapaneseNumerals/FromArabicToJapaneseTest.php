<?php
/*
 * Copyright 2014 OFTN Inc.
 * Copyright 2017 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the MIT License; see LICENSE for details.
 */

namespace JapaneseNumerals;

class FromArabicToJapaneseTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     *
     * @param mixed $japanese
     * @param mixed $arabic
     */
    public function testConvert($japanese, $arabic)
    {
        $this->assertSame($japanese, JapaneseNumerals::fromArabicToJapanese($arabic));
    }
}
