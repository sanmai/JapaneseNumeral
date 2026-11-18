<?php
/*
 * Copyright 2014 OFTN Inc.
 * Copyright 2017 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the MIT License; see LICENSE for details.
 */

namespace JapaneseNumerals;

class FromJapaneseToArabicTest extends TestCase
{
    public static function dataProvider()
    {
        return array_merge(parent::dataProvider(), [
            ['壱萬弐千参百四拾五', '12345'],
            ['零', '0'],
        ]);
    }

    /**
     * @dataProvider dataProvider
     *
     * @param mixed $japanese
     * @param mixed $arabic
     */
    public function testConvert($japanese, $arabic)
    {
        $this->assertSame($arabic, JapaneseNumerals::fromJapaneseToArabic($japanese));
    }

    public static function malformedNumeralProvider()
    {
        return [
            ['一恒'],
            ['一阿僧'],
            ['一那由'],
            ['一不可思'],
            ['一無量大'],
            ['一恒河二'],
        ];
    }

    /**
     * @dataProvider malformedNumeralProvider
     *
     * @param string $japanese
     */
    public function testRejectMalformedNumeral($japanese)
    {
        $this->expectException(\InvalidArgumentException::class);

        JapaneseNumerals::fromJapaneseToArabic($japanese);
    }
}
