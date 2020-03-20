<?php

use qubeek\mdash\EMTypograph;
use PHPUnit\Framework\TestCase;

class EMTTest extends TestCase
{

    /**
     * Тестирует корректное добавление верхнего индекса к единицам площади/объема
     *
     * @return void
     */
    public function testSuperscriptForSquareUnits()
    {

        $tests = [
            [
                'text' => 'Размер изделия 50х31',
                'result' => '<p>Размер изделия 50&times;31</p>',
            ],
            [
                'text' => 'Размер изделия 62x21x21',
                'result' => '<p>Размер изделия 62&times;21&times;21</p>',
            ],
            [
                'text' => 'Площадь квартиры 52 м2',
                'result' => '<p>Площадь квартиры 52&nbsp;м&sup2;</p>',
            ],
            [
                'text' => 'Объем спичечного коробка 26 см3',
                'result' => '<p>Объем спичечного коробка 26&nbsp;см&sup3;</p>',
            ],
            [
                'text' => 'Сегодня проходим § 5',
                'result' => '<p>Сегодня проходим &sect;&thinsp;5</p>',
            ],
            [
                'text' => 'Сегодня проходим §&nbsp;5',
                'result' => '<p>Сегодня проходим &sect;&thinsp;5</p>',
            ]
        ];

        foreach ($tests as $test) {
            $typographer = new EMTypograph();
            $typographer->set_text($test['text']);
            $this->assertEquals($test['result'], $typographer->apply());
        }
    }
}
