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

/* Table tl_simple_modal_gallery */
$GLOBALS['TL_DCA']['tl_simple_modal_gallery'] = array
(
    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'enableVersioning'            => true,
        'sql' => array
        (
            'keys' => array
            (
                'id' 	=> 	'primary',
                'alias' =>  'index'
            )
        )
    ),
 
    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 0,
            'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('slide_name'),
            'format'                  => '%s'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'                => 'act=select',
                'class'               => 'header_edit_all',
                'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'toggle' => array
	    (
		'label'               => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['toggle'],
		'icon'                => 'visible.gif',
		'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
		'button_callback'     => array('Asc\Backend\SimpleModalGalleryBackend', 'toggleIcon')
	    ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),
 
    // Palettes
    'palettes' => array
    (
        'default'                     => '{slide_legend},slide_name,hotspot_icon,slide_image;{hotspot_legend},hotspot_links;{publish_legend},published;'
    ),
 
    // Fields
    'fields' => array
    (
        'id' => array
        (
		'sql'                     	=> "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
		'sql'                     	=> "int(10) unsigned NOT NULL default '0'"
        ),
	'sorting' => array
	(
		'sql'                    	=> "int(10) unsigned NOT NULL default '0'"
	),
	'alias' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['alias'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'search'                  => true,
		'eval'                    => array('unique'=>true, 'rgxp'=>'alias', 'doNotCopy'=>true, 'maxlength'=>128, 'tl_class'=>'w50'),
		'save_callback' => array
		(
			array('Asc\Backend\SimpleModalGalleryBackend', 'generateAlias')
		),
		'sql'                     => "varchar(128) COLLATE utf8_bin NOT NULL default ''"

	),
	'slide_name' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['slide_name'],
		'inputType'               => 'text',
		'default'		  => '',
		'search'                  => true,
		'eval'                    => array('mandatory'=>true, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''",
		'wizard'		 => [['Asc\Backend\HotspotHelper', 'onSelectHotspotImage']]
	),
	'hotspot_icon' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_icon'],
		'inputType'               => 'text',
		'default'		  => '',
		'search'                  => true,
		'eval'                    => array('mandatory'=>true, 'useRawRequestData'=>true, 'tl_class'=>'w50'),
		'sql'                     => "varchar(255) NOT NULL default ''"
	),
	'slide_image' => array
	(
		'label'                   => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['slide_image'],
		'inputType'               => 'picker',
		'default'		  => '',
		'search'                  => true,
		'eval' => [
			'tl_class' => 'clr',
			'mandatory' => true, 
			'fieldType' => 'radio', 
			'filesOnly' => true, 
			'mandatory' => true
		],
		'sql'                    => ['type' => 'binary', 'length' => 16, 'notnull' => false, 'fixed' => true],
		'wizard'		 => [['Asc\Backend\HotspotHelper', 'onSelectHotspotImage']]
	),
	'hotspot_links' => array
		(
			'label'					=> $GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_links'],
			'inputType'				=> 'multiColumnWizard',
			'eval' => array
			(
				'columnFields'			=> array
				(
					'hotspot_x' => array
					(
						'label'					=> $GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_x'],
						'inputType'				=> 'text',
						'eval'                   		=> array('mandatory'=>true,'tl_class'=>'w50','columnPos'=>'group1'),
					),
					'hotspot_y' => array
					(
						'label'					=> $GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_y'],
						'inputType'				=> 'text',
						'eval'                   		=> array('mandatory'=>true, 'tl_class'=>'w50','columnPos'=>'group1'),
					),
					'hotspot_title' => array
					(
						'label'					=> $GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_title'],
						'inputType'				=> 'text',
						'eval'                   		=> array('mandatory'=>true, 'tl_class'=>'long','columnPos'=>'group2'),
					),
					'hotspot_text' => array
					(
						'label'					=> $GLOBALS['TL_LANG']['tl_simple_modal_gallery']['hotspot_text'],
						'inputType'				=> 'textarea',
						'eval'                	=> array('mandatory'=>true, 'rte'=>'tinyMCE','tl_class'=>'long','columnPos'=>'group2'),
					),
				),
			),
			'sql'					=> "blob NULL",
		),
	'published' => array
	(
		'exclude'                 => true,
		'label'                   => &$GLOBALS['TL_LANG']['tl_simple_modal_gallery']['published'],
		'inputType'               => 'checkbox',
		'eval'                    => array('submitOnChange'=>true, 'doNotCopy'=>true),
		'sql'                     => "char(1) NOT NULL default ''"
	)		
    )
);
