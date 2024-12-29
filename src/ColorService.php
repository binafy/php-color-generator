<?php

namespace Binafy\PhpColorGenerator;

class ColorService
{
    /**
     * The hex color.
     *
     * @var string
     */
    protected $hex;

    public function __construct(string $hex)
    {
        $this->hex = $hex;
    }


}
