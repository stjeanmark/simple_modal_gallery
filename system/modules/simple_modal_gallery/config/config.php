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


/* Back end modules */
$GLOBALS['BE_MOD']['content']['simple_modal_gallery'] = array(
	'tables' => array('tl_simple_modal_gallery'),
	'icon'   => 'system/modules/simple_modal_gallery/assets/icons/simple_modal_gallery.png',
	'exportLocations' => array('Asc\Backend\SimpleModalGalleryBackend', 'exportSimpleModalGallery')
);

/* Front end modules */
$GLOBALS['FE_MOD']['simple_modal_gallery']['gallery_module'] 	= 'Asc\Module\GalleryModule';

/* Models */
$GLOBALS['TL_MODELS']['tl_simple_modal_gallery'] = 'Asc\Model\SimpleModalGallery';

if (TL_MODE == 'BE')
{
	// add js to backend
	$GLOBALS['TL_JAVASCRIPT']['smg'] = 'system/modules/simple_modal_gallery/assets/js/simple_modal_gallery_backend.js';
}
