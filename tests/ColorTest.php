<?php

namespace Binafy\tests;

use Binafy\PhpColorGenerator\Color;
use PHPUnit\Framework\TestCase;

class ColorTest extends TestCase
{
    /**
     * Test get shades from hex color.
     */
    public function test_get_shades_from_hex_color(): void
    {
        $colors = Color::generateShades('1363df', 10);

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
        $colors = Color::generateTints('1363df', 10);

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
        $colors = Color::hexToRgb('1363df');

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
        $color = Color::rgbToHex([
            'red' => '19',
            'green' => '99',
            'blue' => '223',
        ]);

        $this->assertIsString($color);
        $this->assertEquals('#1363df', $color);
    }

    /**
     * Test rgb to darken colors.
     */
    public function test_rgb_to_darken_colors(): void
    {
        $colors = Color::darken([
            'red' => '19',
            'green' => '99',
            'blue' => '223',
        ], 0.5);

        $this->assertIsArray($colors);
        $this->assertEquals([
            'red' => 10,
            'green' => 50,
            'blue' => 112,
        ], $colors);
    }

    /**
     * Test rgb to lighten colors.
     */
    public function test_rgb_to_lighten_colors(): void
    {
        $colors = Color::lighten([
            'red' => '19',
            'green' => '99',
            'blue' => '223',
        ], 0.5);

        $this->assertIsArray($colors);
        $this->assertEquals([
            'red' => 137,
            'green' => 177,
            'blue' => 239,
        ], $colors);
    }

    /**
     * Test generate dark and bright colors from hex color.
     */
    public function test_generate_dark_and_bright_colors_from_hex_color(): void
    {
        $colors = (new Color)->generateDarkBrightColors('1363df');

        $this->assertIsArray($colors);
        $this->assertArrayHasKey('dark', $colors);
        $this->assertArrayHasKey('light', $colors);
    }
}
