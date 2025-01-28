<?php

namespace Binafy\tests;

use Binafy\PhpColorGenerator\ColorService;
use PHPUnit\Framework\TestCase;

class GenerateHintShadeTest extends TestCase
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
}
