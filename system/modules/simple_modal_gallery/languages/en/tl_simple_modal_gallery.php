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
 * Legends
 */
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['slide_legend']     	= 'Image Details';
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_legend']   	= 'Hotspot Details';
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['publish_legend']   	= 'Publish';

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['alias'] 			           = array('Alias', 'Auto-generated alias.');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['product_name'] 			   	= array('Product Name', 'The name of the product');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['product_inventory'] 		= array('Product Inventory', 'The inventory total');

$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['slide_image'] 	      	= array('Select the Slide\'s Image', 'Select the image we will use for this particular slide');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['slide_name'] 	       	= array('Slide Name', 'Give this slide a name');

$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_links']     		= array('Hotspot Links', 'The hotspot links that will be on the slide');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_x']         		= array('Hotspot X', 'X coordinate for the hotspot link on the image');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_y'] 	        	= array('Hotspot Y', 'Y coordinate for the hotspot link on the image');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_text']      		= array('Hotspot Text', 'The text that will show in the modal box');

$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['published'] 		        = array('Published', 'Save this product\'s record.');
 
 /**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['new']   		 	= array('New Slide', 'Add a new slide');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['show']  		 	= array('Slide Details', 'Show the details of slide ID %s');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['edit']  		 	= array('Edit Slide', 'Edit slide ID %s');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['copy']  		 	= array('Copy Slide', 'Copy slide ID %s');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['delete'] 			= array('Delete Slide', 'Delete slide ID %s');
$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['toggle'] 			= array('Toggle Slide Published', 'Toggle slide ID %s');
