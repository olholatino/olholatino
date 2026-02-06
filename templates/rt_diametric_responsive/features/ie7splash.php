<?php
/**
 * @package    Diametric Template - RocketTheme
 * @version   1.3 January 22, 2013
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Rockettheme Reaction Template uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');
/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureIE7Splash extends GantryFeature {
    var $_feature_name = 'ie7splash';
    
    
    function isEnabled(){
    	if ($this->get('enabled')) {
        	return true;
        }
    }
    
    function isInPosition($position) {
        return false;
    }
    function isOrderable(){
        return true;
    }
    
    function init() {
        global $gantry;
        
        if (JFactory::getApplication()->input->getString('tmpl')=='unsupported' && $gantry->browser->name == 'ie' && $gantry->browser->shortversion == '7') {
            header("Location: ".$gantry->baseUrl."?tmpl=unsupported");
        }
    }
}