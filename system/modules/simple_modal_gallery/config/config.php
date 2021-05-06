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


/**
* Back end modules
*/

// DECLARING LOCATIONS BACK END PLUGIN
$GLOBALS['BE_MOD']['content']['simple_modal_gallery'] = array(
	'tables' => array('tl_simple_modal_gallery'),
	'icon'   => 'system/modules/simple_modal_gallery/assets/icons/simple_modal_gallery.png',
	'exportLocations' => array('Asc\Backend\SimpleModalGalleryBackend', 'exportSimpleModalGallery')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_simple_modal_gallery'] = 'Asc\Model\SimpleModalGallery';


/**
 * Hooks
 */
if (\Config::getInstance()->isComplete()) {
	$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('CustomTags\SimpleModalGalleryInsertTag', 'onReplaceTag');
}
