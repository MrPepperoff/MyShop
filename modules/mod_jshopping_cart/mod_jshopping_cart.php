<?php
/**
* @version      4.0.1 20.12.2012
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/

    defined('_JEXEC') or die('Restricted access');
    
    if (!file_exists(JPATH_SITE.'/components/com_jshopping/bootstrap.php')){
        \JSError::raiseError(500,"Please install component \"joomshopping\"");
    }

    require_once (JPATH_SITE.'/components/com_jshopping/bootstrap.php');
    
    \JSFactory::loadCssFiles();
    \JSFactory::loadLanguageFile();
    \JModelLegacy::addIncludePath(JPATH_SITE.'/components/com_jshopping/models');

    $cart = \JSFactory::getModel('cart', 'Site');
    $cart->load("cart");

    require(JModuleHelper::getLayoutPath('mod_jshopping_cart')); 
