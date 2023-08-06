<?php
    defined('_JEXEC') or die('Restricted access');

    require_once (JPATH_SITE.'/components/com_jshopping/bootstrap.php'); 

    $db = \JFactory::getDBO();
    $jshopConfig = \JSFactory::getConfig();
    $jshopConfig->cur_lang = $jshopConfig->frontend_lang;
