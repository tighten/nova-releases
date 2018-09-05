<?php

namespace Tightenco\NovaReleases;

use Laravel\Nova\Card;

class LatestRelease extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-releases-latest';
    }
}
