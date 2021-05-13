<?php

/*
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009 - 2019 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */

namespace Asc\Backend;

use Contao\DataContainer;
use Contao\Image;
use Asc\Model\SimpleModalGallery;

class Wizard
{
    public function onProductTypeWizard(DataContainer $dc)
    {
        if ($dc->value < 1) {
            return '';
        }
        else
        {
            return 'asdf';
        }

      /*
        return sprintf(
            ' <a href="%s" title="%s" style="padding-left:3px" onclick="Backend.openModalIframe({\'width\':768,\'title\':\'%s\',\'url\':this.href});return false">%s</a>',
            sprintf(
                'contao/main.php?do=iso_setup&amp;mod=producttypes&amp;table=tl_iso_producttype&amp;act=edit&amp;id=%s&amp;popup=1&amp;nb=1&amp;rt=%s',
                $dc->value,
                REQUEST_TOKEN
            ),
            sprintf(specialchars($GLOBALS['TL_LANG']['tl_iso_producttype']['edit'][1]), $dc->value),
            specialchars(str_replace("'", "\\'", sprintf($GLOBALS['TL_LANG']['tl_iso_producttype']['edit'][1], $dc->value))),
            Image::getHtml('alias.gif', $GLOBALS['TL_LANG']['tl_iso_producttype']['edit'][0])
        );
        */
    }
}
