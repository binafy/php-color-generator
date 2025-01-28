<?php

namespace Binafy\tests;

use Binafy\PhpColorGenerator\ColorService;
use PHPUnit\Framework\TestCase;

class ColorServiceTest extends TestCase
{
    /**
     * Test get shades from hex color.
     */
    public function test_get_shades_from_hex_color(): void
    {
        $colors = ColorService::generateShades('1363df', 10);

        $this->assertIsArray($colors);
        $this->assertEquals([
            '#1159c9',
            '#0f4fb2',
            '#0d459c',
            '#0b3b86',
            '#0a3270',
            '#082859',
            '#061e43',
            '#04142d',
            '#020a16',
            '#000000',
        ], $colors);
    }

    /**
     * Test get tints from hex color.
     */
    public function test_get_tints_from_hex_color(): void
    {
        $colors = ColorService::generateTints('1363df', 10);

        $this->assertIsArray($colors);
        $this->assertEquals([
            '#2b73e2',
            '#4282e5',
            '#5a92e9',
            '#71a1ec',
            '#89b1ef',
            '#a1c1f2',
            '#b8d0f5',
            '#d0e0f9',
            '#e7effc',
            '#ffffff',
        ], $colors);
    }

    /**
     * Test hex to rgb.
     */
    public function test_hex_to_rgb(): void
    {
        $colors = ColorService::hexToRgb('1363df');

        $this->assertIsArray($colors);
        $this->assertEquals([
            'red' => '19',
            'green' => '99',
            'blue' => '223',
        ], $colors);
    }

    /**
     * Test rgb to hex.
     */
    public function test_rgb_to_hex(): void
    {
        $color = ColorService::rgbToHex([
            'red' => '19',
            'green' => '99',
            'blue' => '223',
        ]);

        $this->assertIsString($color);
        $this->assertEquals('#1363df', $color);
    }
}
