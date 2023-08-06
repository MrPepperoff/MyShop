<?php
/**
* @version      4.1.0 14.08.2013
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
    \JSFactory::loadJsFiles();
    \JSFactory::loadLanguageFile();

    $adv_search = $params->get('advanced_search');
    $category_id = intval($params->get('category_id'));
    $search_type = $params->get('search_type', 'any');
    if ($adv_search) $adv_search_link = \JSHelper::SEFLink('index.php?option=com_jshopping&controller=search', 1);
    $jinput = \JFactory::getApplication()->input;
    $search = $jinput->getString('search', '');

    require(JModuleHelper::getLayoutPath('mod_jshopping_search'));   
