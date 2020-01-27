<?php
/*
 * Copyright 2014 OFTN Inc.
 * Copyright 2017 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the MIT License; see LICENSE for details.
 */

namespace JapaneseNumerals;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public static function setUpBeforeClass(): void
    {
        mb_internal_encoding('UTF-8');
    }

    const DATASET = [
        //['九百八十三万六千七百三', '9836703'], // fails the test with 9801703 returned
        //['二十億三千六百五十二万千八百一', '2036521801'], // fails the test with 2016500801 returned

        ['二千二十五', '2025'],
        ['四百六十九', '469'],
        ['三百二', '302'],
        ['百五十一', '151'],
        ['十七', '17'],
        ['十一', '11'],
        ['一万', '10000'],

        ['一', '1'],
        ['二', '2'],
        ['三', '3'],
        ['四', '4'],
        ['五', '5'],
        ['六', '6'],
        ['七', '7'],
        ['八', '8'],
        ['九', '9'],
        ['十', '10'],
        ['十一', '11'],
        ['十二', '12'],
        ['十三', '13'],
        ['十四', '14'],
        ['十五', '15'],
        ['十六', '16'],
        ['十七', '17'],
        ['十八', '18'],
        ['十九', '19'],
        ['二十', '20'],
        ['二十一', '21'],
        ['二十二', '22'],
        ['二十三', '23'],
        ['二十四', '24'],
        ['二十五', '25'],
        ['二十六', '26'],
        ['二十七', '27'],
        ['二十八', '28'],
        ['二十九', '29'],
        ['三十', '30'],
        ['三十一', '31'],
        ['三十二', '32'],
        ['三十三', '33'],
        ['三十四', '34'],
        ['三十五', '35'],
        ['三十六', '36'],
        ['三十七', '37'],
        ['三十八', '38'],
        ['三十九', '39'],
        ['四十', '40'],
        ['五十', '50'],
        ['五十一', '51'],
        ['五十二', '52'],
        ['五十三', '53'],
        ['五十四', '54'],
        ['五十五', '55'],
        ['五十六', '56'],
        ['五十七', '57'],
        ['五十八', '58'],
        ['五十九', '59'],
        ['六十', '60'],
        ['六十一', '61'],
        ['六十二', '62'],
        ['六十三', '63'],
        ['六十四', '64'],
        ['六十五', '65'],
        ['六十六', '66'],
        ['六十七', '67'],
        ['六十八', '68'],
        ['六十九', '69'],
        ['七十', '70'],
        ['七十一', '71'],
        ['七十二', '72'],
        ['七十三', '73'],
        ['七十四', '74'],
        ['七十五', '75'],
        ['七十六', '76'],
        ['七十七', '77'],
        ['七十八', '78'],
        ['七十九', '79'],
        ['八十', '80'],
        ['八十一', '81'],
        ['八十二', '82'],
        ['八十三', '83'],
        ['八十四', '84'],
        ['八十五', '85'],
        ['八十六', '86'],
        ['八十八', '88'],
        ['八十九', '89'],
        ['九十', '90'],
        ['九十一', '91'],
        ['九十二', '92'],
        ['九十三', '93'],
        ['九十四', '94'],
        ['九十五', '95'],
        ['九十六', '96'],
        ['九十七', '97'],
        ['九十八', '98'],
        ['九十九', '99'],

        ['七百', '700'],
        ['七百一', '701'],
        ['七百二', '702'],
        ['七百三', '703'],
        ['七百四', '704'],
        ['七百五', '705'],
        ['七百六', '706'],
        ['七百七', '707'],
        ['七百八', '708'],
        ['七百九', '709'],
        ['七百十', '710'],
        ['七百十一', '711'],
        ['七百十二', '712'],
        ['七百十三', '713'],
        ['七百十四', '714'],
        ['七百十五', '715'],
        ['七百十六', '716'],
        ['七百十七', '717'],
        ['七百十八', '718'],
        ['七百十九', '719'],
        ['七百二十', '720'],
        ['七百二十一', '721'],
        ['七百二十二', '722'],
        ['七百二十三', '723'],
        ['七百二十四', '724'],
        ['七百二十五', '725'],
        ['七百二十六', '726'],
        ['七百二十七', '727'],
        ['七百二十八', '728'],
        ['七百二十九', '729'],
        ['七百三十', '730'],
        ['七百三十一', '731'],
        ['七百三十二', '732'],
        ['七百三十三', '733'],
        ['七百三十四', '734'],
        ['七百三十五', '735'],
        ['七百三十六', '736'],
        ['七百三十七', '737'],
        ['七百三十八', '738'],
        ['七百三十九', '739'],
        ['七百四十', '740'],
        ['七百四十一', '741'],
        ['七百四十二', '742'],
        ['七百四十三', '743'],
        ['七百四十四', '744'],
        ['七百四十五', '745'],
        ['七百四十六', '746'],
        ['七百四十七', '747'],
        ['七百四十八', '748'],
        ['七百四十九', '749'],
        ['七百五十', '750'],
        ['七百五十一', '751'],
        ['七百五十二', '752'],
        ['七百五十三', '753'],
        ['七百五十四', '754'],
        ['七百五十五', '755'],
        ['七百五十六', '756'],
        ['七百五十七', '757'],
        ['七百五十八', '758'],
        ['七百五十九', '759'],
        ['七百六十', '760'],
        ['七百六十一', '761'],
        ['七百六十二', '762'],
        ['七百六十三', '763'],
        ['七百六十四', '764'],
        ['七百六十五', '765'],
        ['七百六十六', '766'],
        ['七百六十七', '767'],
        ['七百六十八', '768'],
        ['七百六十九', '769'],
        ['七百七十', '770'],
        ['七百七十一', '771'],
        ['七百七十二', '772'],
        ['七百七十三', '773'],
        ['七百七十四', '774'],
        ['七百七十五', '775'],
        ['七百七十六', '776'],
        ['七百七十七', '777'],
        ['七百七十八', '778'],
        ['七百七十九', '779'],
        ['七百八十', '780'],
        ['七百八十一', '781'],
        ['七百八十二', '782'],
        ['七百八十三', '783'],
        ['七百八十四', '784'],
        ['七百八十五', '785'],
        ['七百八十六', '786'],
        ['七百八十七', '787'],
        ['七百八十八', '788'],
        ['七百八十九', '789'],
        ['七百九十', '790'],
        ['七百九十一', '791'],
        ['七百九十二', '792'],
        ['七百九十三', '793'],
        ['七百九十四', '794'],
        ['七百九十五', '795'],
        ['七百九十六', '796'],
        ['七百九十七', '797'],
        ['七百九十八', '798'],
        ['七百九十九', '799'],
        ['八百', '800'],
        ['八百一', '801'],
        ['八百二', '802'],
        ['八百三', '803'],
        ['八百四', '804'],
        ['八百五', '805'],
        ['八百六', '806'],
        ['八百七', '807'],
        ['八百八', '808'],
        ['八百九', '809'],
        ['八百十', '810'],
        ['八百十一', '811'],
        ['八百十二', '812'],
        ['八百十三', '813'],
        ['八百十四', '814'],
        ['八百十五', '815'],
        ['八百十六', '816'],
        ['八百十七', '817'],
        ['八百十八', '818'],
        ['八百十九', '819'],
        ['八百二十', '820'],
        ['八百二十一', '821'],
        ['八百二十二', '822'],
        ['八百二十三', '823'],
        ['八百二十四', '824'],
        ['八百二十五', '825'],
        ['八百二十六', '826'],
        ['八百二十七', '827'],
        ['八百二十八', '828'],
        ['八百二十九', '829'],
        ['八百三十', '830'],
        ['八百三十一', '831'],
        ['八百三十二', '832'],
        ['八百三十三', '833'],
        ['八百三十四', '834'],
        ['八百三十五', '835'],
        ['八百三十六', '836'],
        ['八百三十七', '837'],
        ['八百三十八', '838'],
        ['八百三十九', '839'],
        ['八百四十', '840'],
        ['八百四十一', '841'],
        ['八百四十二', '842'],
        ['八百四十三', '843'],
        ['八百四十四', '844'],
        ['八百四十五', '845'],
        ['八百四十六', '846'],
        ['八百四十七', '847'],
        ['八百四十八', '848'],
        ['八百四十九', '849'],
        ['八百五十', '850'],
        ['八百五十一', '851'],
        ['八百五十二', '852'],
        ['八百五十三', '853'],
        ['八百五十四', '854'],
        ['八百五十五', '855'],
        ['八百五十六', '856'],
        ['八百五十七', '857'],
        ['八百五十八', '858'],
        ['八百五十九', '859'],
        ['八百六十', '860'],
        ['八百六十一', '861'],
        ['八百六十二', '862'],
        ['八百六十三', '863'],
        ['八百六十四', '864'],
        ['八百六十五', '865'],
        ['八百六十六', '866'],
        ['八百六十七', '867'],
        ['八百六十八', '868'],
        ['八百六十九', '869'],
        ['八百七十', '870'],
        ['八百七十一', '871'],
        ['八百七十二', '872'],
        ['八百七十三', '873'],
        ['八百七十四', '874'],
        ['八百七十五', '875'],
        ['八百七十六', '876'],
        ['八百七十七', '877'],
        ['八百七十八', '878'],
        ['八百七十九', '879'],
        ['八百八十', '880'],
        ['八百八十一', '881'],
        ['八百八十二', '882'],
        ['八百八十三', '883'],
        ['八百八十四', '884'],
        ['八百八十五', '885'],
        ['八百八十六', '886'],
        ['八百八十七', '887'],
        ['八百八十八', '888'],
        ['八百八十九', '889'],
        ['八百九十', '890'],
        ['八百九十一', '891'],
        ['八百九十二', '892'],
        ['八百九十三', '893'],
        ['八百九十四', '894'],
        ['八百九十五', '895'],
        ['八百九十六', '896'],
        ['八百九十七', '897'],
        ['八百九十八', '898'],
        ['八百九十九', '899'],
        ['九百', '900'],
        ['九百一', '901'],
        ['九百二', '902'],
        ['九百三', '903'],
        ['九百四', '904'],
        ['九百五', '905'],
        ['九百六', '906'],
        ['九百七', '907'],
        ['九百八', '908'],
        ['九百九', '909'],
        ['九百十', '910'],
        ['九百十一', '911'],
        ['九百十二', '912'],
        ['九百十三', '913'],
        ['九百十四', '914'],
        ['九百十五', '915'],
        ['九百十六', '916'],
        ['九百十七', '917'],
        ['九百十八', '918'],
        ['九百十九', '919'],
        ['九百二十', '920'],
        ['九百二十一', '921'],
        ['九百二十二', '922'],
        ['九百二十三', '923'],
        ['九百二十四', '924'],
        ['九百二十五', '925'],
        ['九百二十六', '926'],
        ['九百二十七', '927'],
        ['九百二十八', '928'],
        ['九百二十九', '929'],
        ['九百三十', '930'],
        ['九百三十一', '931'],
        ['九百三十二', '932'],
        ['九百三十三', '933'],
        ['九百三十四', '934'],
        ['九百三十五', '935'],
        ['九百三十六', '936'],
        ['九百三十七', '937'],
        ['九百三十八', '938'],
        ['九百三十九', '939'],
        ['九百四十', '940'],
        ['九百四十一', '941'],
        ['九百四十二', '942'],
        ['九百四十三', '943'],
        ['九百四十四', '944'],
        ['九百四十五', '945'],
        ['九百四十六', '946'],
        ['九百四十七', '947'],
        ['九百四十八', '948'],
        ['九百四十九', '949'],
        ['九百五十', '950'],
        ['九百五十一', '951'],
        ['九百五十二', '952'],
        ['九百五十三', '953'],
        ['九百五十四', '954'],
        ['九百五十五', '955'],
        ['九百五十六', '956'],
        ['九百五十七', '957'],
        ['九百五十八', '958'],
        ['九百五十九', '959'],
        ['九百六十', '960'],
        ['九百六十一', '961'],
        ['九百六十二', '962'],
        ['九百六十三', '963'],
        ['九百六十四', '964'],
        ['九百六十五', '965'],
        ['九百六十六', '966'],
        ['九百六十七', '967'],
        ['九百六十八', '968'],
        ['九百六十九', '969'],
        ['九百七十', '970'],
        ['九百七十一', '971'],
        ['九百七十二', '972'],
        ['九百七十三', '973'],
        ['九百七十四', '974'],
        ['九百七十五', '975'],
        ['九百七十六', '976'],
        ['九百七十七', '977'],
        ['九百七十八', '978'],
        ['九百七十九', '979'],
        ['九百八十', '980'],
        ['九百八十一', '981'],
        ['九百八十二', '982'],
        ['九百八十三', '983'],
        ['九百八十四', '984'],
        ['九百八十五', '985'],
        ['九百八十六', '986'],
        ['九百八十七', '987'],
        ['九百八十八', '988'],
        ['九百八十九', '989'],
        ['九百九十', '990'],
        ['九百九十一', '991'],
        ['九百九十二', '992'],
        ['九百九十三', '993'],
        ['九百九十四', '994'],
        ['九百九十五', '995'],
        ['九百九十六', '996'],
        ['九百九十七', '997'],
        ['九百九十八', '998'],
        ['九百九十九', '999'],
    ];

    public function dataProvider()
    {
        return self::DATASET;
    }
}
