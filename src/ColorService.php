<?php

namespace Binafy\PhpColorGenerator;

class ColorService
{
    /**
     * Convert hex color to RGB.
     */
    public static function hexToRGB(string $hex): array
    {
        $hex = ltrim($hex, '#');

        return [
            'red' => hexdec(substr($hex, 0, 2)),
            'green' => hexdec(substr($hex, 2, 2)),
            'blue' => hexdec(substr($hex, 4, 2)),
        ];
    }

    /**
     * Convert RGB to hex format.
     */
    public static function rgbToHex(array $rgb): string
    {
        return sprintf(
            '#%02x%02x%02x',
            max(0, min(255, round($rgb['red']))),
            max(0, min(255, round($rgb['green']))),
            max(0, min(255, round($rgb['blue'])))
        );
    }

    /**
     * Darken a color by a percentage.
     */
    public static function darken(array $rgb, float $percentage): array
    {
        return [
            'red' => max(0, round($rgb['red'] * (1 - $percentage))),
            'green' => max(0, round($rgb['green'] * (1 - $percentage))),
            'blue' => max(0, round($rgb['blue'] * (1 - $percentage))),
        ];
    }

    /**
     * Lighten a color by a percentage.
     */
    public static function lighten(array $rgb, float $percentage): array
    {
        return [
            'red' => min(255, round($rgb['red'] + (255 - $rgb['red']) * $percentage)),
            'green' => min(255, round($rgb['green'] + (255 - $rgb['green']) * $percentage)),
            'blue' => min(255, round($rgb['blue'] + (255 - $rgb['blue']) * $percentage)),
        ];
    }

    /**
     * Generate shades of a given color.
     */
    public static function generateShades(string $hex, int $times): array
    {
        $rgb = self::hexToRGB($hex);
        $shades = [];

        for ($i = 1; $i <= $times; $i++) {
            $shades[] = self::rgbToHex(self::darken($rgb, $i * 0.1));
        }

        return $shades;
    }

    /**
     * Generate tints of a given color.
     */
    public static function generateTints(string $hex, int $times): array
    {
        $rgb = self::hexToRGB($hex);
        $tints = [];

        for ($i = 1; $i <= $times; $i++) {
            $tints[] = self::rgbToHex(self::lighten($rgb, $i * 0.1));
        }

        return $tints;
    }

    /**
     * Generate dark and light colors.
     */
    public function generateDarkBrightColors(string $hex, int $times = 10): array
    {
        return [
            'dark' => $this->generateShades($hex, $times),
            'light' => $this->generateTints($hex, $times),
        ];
    }
}
