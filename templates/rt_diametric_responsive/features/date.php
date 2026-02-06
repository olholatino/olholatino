<?php
/**
 * @package    Diametric Template - RocketTheme
 * @version		1.3 January 22, 2013
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright 	Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */

defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');
gantry_import('core.utilities.gantrydate');

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryFeatureDate extends GantryFeature {
    var $_feature_name = 'date';
   
	function render($position="") {
		global $gantry;
		ob_start();

		$now    = new GantryDate();		
		$format = $this->get('formats');

	    ?>
	    <div class="rt-block datefeature-block">
		<span class="rt-date-feature"><span><?php echo $now->toFormat($format); ?></span></span>
		</div>
		<?php
	    return ob_get_clean();
	}
	
}