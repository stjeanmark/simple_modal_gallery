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

/* Register the classes */
ClassLoader::addClasses(array
(
	'Asc\Module\GalleryModule' 		=> 'system/modules/simple_modal_gallery/library/Asc/Module/GalleryModule.php',
	'Asc\Model\SimpleModalGallery' 		=> 'system/modules/simple_modal_gallery/library/Asc/Model/SimpleModalGallery.php'
));

ClassLoader::addClasses(array
(
	'CustomTags\SimpleModalGalleryInsertTag' 		=> 'system/modules/simple_modal_gallery/library/CustomTags/SimpleModalGalleryInsertTag.php'
));

/* Register the templates */
TemplateLoader::addFiles(array
(
    	'mod_gallery_module' 		=> 'system/modules/simple_modal_gallery/templates/modules',
	'item_slide' 			=> 'system/modules/simple_modal_gallery/templates/items',
));
