<?php
/**
 * Simple Modal Gallery - A simple gallery where each image can have multiple hotspots which trigger a modal box.
 *
 * Copyright (C) 2021 Mark St. Jean.
 *
 * @package    stjeanmark/simple_modal_gallery
 * @link       http://www.markstjean.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

namespace Asc\Backend;

use Contao\DataContainer;
use Contao\Image;

class HotspotHelper
{
    public function onSelectHotspotImage(DataContainer $dc)
    {
        return '<a href="#">something</a>';
    }
}
