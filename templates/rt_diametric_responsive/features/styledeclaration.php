<?php
/**
 * @package    Diametric Template - RocketTheme
 * @version    1.3 January 22, 2013
 * @author		RocketTheme http://www.rockettheme.com
 * @copyright  Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined('JPATH_BASE') or die();

gantry_import('core.gantryfeature');

class GantryFeatureStyleDeclaration extends GantryFeature {
    var $_feature_name = 'styledeclaration';

    function isEnabled() {
        global $gantry;
        $menu_enabled = $this->get('enabled');

        if (1 == (int)$menu_enabled) return true;
        return false;
    }

function init() {
        global $gantry;
		$browser = $gantry->browser;

	// COLORCHOOSER

    // Color Accent
    $accentColor = new Color($gantry->get('body-accentcolor'));
    $css = '#rt-main-container article h2 span, #rt-main-container a, #rt-main-container h1 span, #rt-main-container .module-title .title span,#rt-body-surround .sprocket-lists .sprocket-lists-container li.active .sprocket-lists-title, body #roksearch_results h3, body #roksearch_results a, .item-title, .component-body .thumbnail a {color:'.$gantry->get('body-accentcolor').';}'."\n";
    $css .= '#rt-navigation, #rt-navigation .rt-menubar ul.menutop li.active {background-color:'.$accentColor->darken('10%').';}'."\n";
    $css .= '#rt-main-container .readon span, #rt-main-container .readon .button, #rt-main-container .button, #rt-main-container .btn, .component-content .formelm-buttons button, .component-body #imageForm.form-horizontal button, .component-body #uploadform button {background-color:'.$accentColor->darken('10%').';}'."\n";
    $css .= '#rt-body-surround .box1 .module-surround, #rt-body-surround .box4 .module-surround, .rg-grid-view .tag, .rg-list-view .tag, .rg-detail-slicetag .tag, .rg-detail-filetag .tag  {background-color:'.$gantry->get('body-accentcolor').';}'."\n";
    $css .= '.menutop .rt-arrow-pointer {border-top-color:'.$accentColor->darken('11%').';}'."\n";
    $css .= '#rt-main-container.body-overlay-light a:hover, #rt-main-container.body-overlay-light .title a:hover span {color:'.$accentColor->darken('15%').';}'."\n";
    $css .= '#rt-main-container.body-overlay-dark a:hover, #rt-main-container.body-overlay-dark .title a:hover span {color:'.$accentColor->lighten('15%').';}'."\n";
    $css .= '#rt-body-surround.body-accentoverlay-dark .box1 a, #rt-body-surround.body-accentoverlay-dark .box1 .title span, #rt-body-surround.body-accentoverlay-dark .box4 a, #rt-body-surround.body-accentoverlay-dark .box4 .title span, #rt-body-surround.body-accentoverlay-dark .box5 .title span {color:'.$accentColor->lighten('15%').';}'."\n";
    $css .= '#rt-body-surround .box4 .title, #rt-body-surround .box1 .title {text-shadow: -1px 1px 0 '.$gantry->get('body-accentcolor').', -3px 3px 0 rgba(0,0,0,0.15);}'."\n";
    $css .= '#rt-body-surround .box1 a, #rt-body-surround .box1 a, #rt-body-surround .box1 .title span, #rt-body-surround #rt-top .box4 a, #rt-body-surround #rt-header .box4 a, #rt-body-surround .box4 .title span {color:'.$accentColor->lighten('15%').';}'."\n";

    // Header Colors
    $headerColor = new Color($gantry->get('headerpanel-accentcolor'));
    $headerBgColor = new Color($gantry->get('headerpanel-backgroundcolor'));
    $css .= '#rt-headerblock h1 span, #rt-headerblock .module-title .title span, body #rt-menu ul.menu li a {color:'.$gantry->get('headerpanel-accentcolor').';}'."\n";
    $css .= '#rt-headerblock .readon span, #rt-headerblock .readon .button, #rt-headerblock .button, #rt-headerblock .btn  {background-color:'.$headerColor->darken('10%').';}'."\n";
    $css .= '#rt-headerblock,#rt-headerblock .sprocket-features-arrows .prev, #rt-headerblock .sprocket-features-arrows .next, .layout-showcase .sprocket-features-pagination li {background-color:'.$gantry->get('headerpanel-backgroundcolor').';}'."\n";
    $css .= '#rt-headerblock .title, #rt-headerblock .paneltitle, #rt-headerblock .panelsubtitle, #rt-headerblock .sprocket-features-title {text-shadow: -1px 1px 0 '.$gantry->get('headerpanel-backgroundcolor').', -3px 3px 0 rgba(0,0,0,0.2);}'."\n";
    $css .= '#rt-headerblock .box1 .module-surround, #rt-headerblock .box4 .module-surround {background-color:'.$gantry->get('headerpanel-accentcolor').';}'."\n";
    $css .= '#rt-headerblock #rt-top a, #rt-headerblock #rt-header a {color:'.$gantry->get('headerpanel-accentcolor').';}'."\n";
    $css .= '.headerpanel-overlay-light#rt-headerblock #rt-top a:hover, .headerpanel-overlay-light#rt-headerblock #rt-header a:hover {color:'.$headerColor->darken('10%').';}'."\n";
    $css .= '.headerpanel-overlay-dark#rt-headerblock #rt-top a:hover, .headerpanel-overlay-dark#rt-headerblock #rt-header a:hover {color:'.$headerColor->lighten('10%').';}'."\n";
    $css .= '#rt-headerblock #rt-top .box1 a, #rt-headerblock #rt-header .box1 a, #rt-headerblock .box1 .title span, #rt-headerblock #rt-top .box4 a, #rt-headerblock #rt-header .box4 a, #rt-headerblock .box4 .title span {color:'.$headerColor->lighten('15%').';}'."\n";
    $css .= '#rt-headerblock .box4 .title, #rt-headerblock .box1 .title {text-shadow: -1px 1px 0 '.$gantry->get('headerpanel-accentcolor').', -3px 3px 0 rgba(0,0,0,0.15);}'."\n";

    // Feature Colors
    $featureColor = new Color($gantry->get('featurepanel-accentcolor'));
    $featureBgColor = new Color($gantry->get('featurepanel-backgroundcolor'));
    $css .= '#rt-feature h1 span, #rt-feature .module-title .title span {color:'.$gantry->get('featurepanel-accentcolor').';}'."\n";
    $css .= '#rt-feature .readon span, #rt-feature .readon .button, #rt-feature .button, #rt-feature .btn {background-color:'.$featureColor->darken('10%').';}'."\n";
    $css .= '#rt-feature {background-color:'.$gantry->get('featurepanel-backgroundcolor').';}'."\n";
    $css .= '#rt-feature .box1 .module-surround, #rt-feature .box4 .module-surround {background-color:'.$gantry->get('featurepanel-accentcolor').';}'."\n";
    $css .= '#rt-feature a {color:'.$gantry->get('featurepanel-accentcolor').';}'."\n";
    $css .= '#rt-feature .title, #rt-feature .paneltitle, #rt-feature .panelsubtitle {text-shadow: -1px 1px 0 '.$featureBgColor->darken('10%').', -3px 3px 0 rgba(0,0,0,0.2);}'."\n";
    $css .= '#rt-feature .feature-accentoverlay-dark .box1 a, #rt-feature feature-accentoverlay-dark .box1 .title span, #rt-feature .feature-accentoverlay-dark .box4 a, #rt-feature .feature-accentoverlay-dark .box4 .title span {color:'.$featureColor->lighten('15%').';}'."\n";
    $css .= '#rt-feature .box1 .title, #rt-feature .box4 .title {text-shadow: -1px 1px 0 '.$gantry->get('featurepanel-accentcolor').', -3px 3px 0 rgba(0,0,0,0.2);}'."\n";
    $css .= '#rt-feature .box1 a, #rt-feature .box4 a, #rt-feature .box1 .title span, #rt-feature #rt-top .box4 a, #rt-feature #rt-header .box4 a, #rt-feature .box4 .title span {color:'.$featureColor->lighten('15%').';}'."\n";

    // Showcase/Bottom Colors
    $showcaseColor = new Color($gantry->get('showcasepanel-accentcolor'));
    $showcaseBgColor = new Color($gantry->get('showcasepanel-backgroundcolor'));
    $css .= '#rt-showcase h1 span, #rt-showcase .module-title .title span, #rt-bottom h1 span, #rt-bottom .module-title .title span {color:'.$gantry->get('showcasepanel-accentcolor').';}'."\n";
    $css .= '#rt-showcase .readon span, #rt-showcase .readon .button, #rt-showcase .button, #rt-showcase .btn, #rt-bottom .readon span, #rt-bottom .readon .button, #rt-bottom .button, #rt-bottom .btn {background-color:'.$showcaseColor->darken('10%').';}'."\n";
    $css .= '#rt-showcase, #rt-bottom {background-color:'.$gantry->get('showcasepanel-backgroundcolor').';}'."\n";
    $css .= '#rt-showcase .box1 .module-surround, #rt-showcase .box4 .module-surround, #rt-bottom .box1 .module-surround, #rt-bottom .box4 .module-surround, #rt-bottom .bottom-accentoverlay-dark .box1 a, #rt-bottom .bottom-accentoverlay-dark .box4 .title span, #rt-bottom .bottom-accentoverlay-dark .box4 a, #rt-bottom .bottom-accentoverlay-dark .box1 .title span {background-color:'.$gantry->get('showcasepanel-accentcolor').';}'."\n";
    $css .= '#rt-showcase .title, #rt-bottom .title, #rt-showcase .paneltitle, #rt-showcase .panelsubtitle, #rt-bottom .paneltitle, #rt-bottom .panelsubtitle {text-shadow: -1px 1px 0 '.$gantry->get('showcasepanel-backgroundcolor').', -3px 3px 0 rgba(0,0,0,0.2);}'."\n";
    $css .= '#rt-showcase a, #rt-bottom a {color:'.$gantry->get('showcasepanel-accentcolor').';}'."\n";
    $css .= '#rt-showcase.showcasepanel-overlay-light a:hover, #rt-bottom.showcasepanel-overlay-light a:hover {color:'.$showcaseColor->darken('10%').';}'."\n";
    $css .= '#rt-showcase.showcasepanel-overlay-dark a:hover, #rt-bottom.showcasepanel-overlay-dark a:hover {color:'.$showcaseColor->lighten('10%').';}'."\n";
    $css .= '#rt-showcase .box1 a, #rt-showcase .box1 .title span, #rt-showcase .box4 a, #rt-showcase .box4 .title span, #rt-bottom .box1 a, #rt-bottom .box1 .title span, #rt-bottom .box4 a, #rt-bottom .box4 .title span {color:'.$showcaseColor->lighten('15%').';}'."\n";
    $css .= '#rt-showcase .box4 .title, #rt-showcase .box1 .title, #rt-bottom .box4 .title, #rt-bottom .box1 .title {text-shadow: -1px 1px 0 '.$gantry->get('showcasepanel-accentcolor').', -3px 3px 0 rgba(0,0,0,0.15);}'."\n";

    // Footer Colors
    $footerColor = new Color($gantry->get('footerpanel-accentcolor'));
    $footerBgColor = new Color($gantry->get('footerpanel-backgroundcolor'));
    $css .= '#rt-footer-surround h1 span, #rt-footer-surround .module-title .title span {color:'.$gantry->get('footerpanel-accentcolor').';}'."\n";
    $css .= '#rt-footer-surround .readon span, #rt-footer-surround .readon .button, #rt-footer-surround .button, #rt-footer-surround .btn {background-color:'.$footerColor->darken('10%').';}'."\n";
    $css .= '#rt-footer-surround {background-color:'.$gantry->get('footerpanel-backgroundcolor').';}'."\n";
    $css .= '#rt-footer-surround .box1 .module-surround, #rt-footer-surround .box4 .module-surround {background-color:'.$gantry->get('footerpanel-accentcolor').';}'."\n";
    $css .= '#rt-footer-surround.footerpanel-overlay-light .module-title .title span {color:'.$footerColor->darken('5%').';}'."\n";
    $css .= '#rt-footer-surround.footerpanel-overlay-dark .module-title .title span {color:'.$footerColor->lighten('20%').';}'."\n";
    $css .= '#rt-footer-surround a {color:'.$footerColor->lighten('25%').';}'."\n";
    $css .= '#rt-footer-surround.footerpanel-overlay-dark a:hover {color:'.$footerColor->lighten('15%').';}'."\n";
    $css .= '#rt-footer-surround.footerpanel-overlay-light a:hover {color:'.$footerColor->darken('15%').';}'."\n";
    $css .= '#rt-footer-surround .title, #rt-footer-surround .paneltitle, #rt-footer-surround .panelsubtitle {text-shadow: -1px 1px 0 '.$gantry->get('footerpanel-backgroundcolor').', -3px 3px 0 rgba(0,0,0,0.15);}'."\n";
    $css .= '#rt-footer-surround .box1 a, #rt-footer-surround .box1 .title span, #rt-footer-surround .box4 a, #rt-footer-surround .box4 .title span {color:'.$footerColor->lighten('15%').';}'."\n";
    $css .= '#rt-footer-surround .box4 .title, #rt-footer-surround .box1 .title {text-shadow: -1px 1px 0 '.$gantry->get('footerpanel-accentcolor').', -3px 3px 0 rgba(0,0,0,0.15);}'."\n";

    // Logo
    $css .= $this->buildLogo();

		// Static file
        if ($gantry->get('static-enabled')) {
            // do file stuff
            jimport('joomla.filesystem.file');
            $filename = $gantry->templatePath.DS.'css'.DS.'static-styles.css';

            if (file_exists($filename)) {
                if ($gantry->get('static-check')) {
                    //check to see if it's outdated

                    $md5_static = md5_file($filename);
                    $md5_inline = md5($css);

                    if ($md5_static != $md5_inline) {
                        JFile::write($filename, $css);
                    }
                }
            } else {
                // file missing, save it
                JFile::write($filename, $css);
            }
            // add reference to static file
            $gantry->addStyle('static-styles.css',99);

        } else {
            // add inline style
            $gantry->addInlineStyle($css);
        }

		$this->_disableRokBoxForiPhone();

		// Style Inclusion
        $gantry->addStyle('gantry-core.css');
        $gantry->addStyle('joomla-core.css');
        $gantry->addStyle('overlays.css');
        $bodystyle = $gantry->get('body-overlay');
        $gantry->addStyle('body-'.$bodystyle.'.css');
        $menustyle = $gantry->get('menu-overlay');
        $gantry->addStyle('menu-'.$menustyle.'.css');

		if ($gantry->get('layout-mode')=="responsive") $gantry->addStyle('responsive.css');
        if ($gantry->get('layout-mode')=="960fixed") $gantry->addStyle('960fixed.css');
        if ($gantry->get('layout-mode')=="1200fixed") $gantry->addStyle('1200fixed.css');

        if ($gantry->get('typography-enabled')) $gantry->addStyle('typography.css');
        if ($gantry->get('typography-enabled')) $gantry->addStyle('font-awesome.css');
        if ($gantry->get('extensions')) $gantry->addStyle('extensions.css');
        if ($gantry->get('extensions')) $gantry->addStyle('extensions-overlays.css');
	}

    function buildLogo(){
        global $gantry;

        if ($gantry->get('logo-type')!="custom") return "";

        $source = $width = $height = "";

        $logo = str_replace("&quot;", '"', str_replace("'", '"', $gantry->get('logo-custom-image')));
        $data = json_decode($logo);

        if (!$data){
            if (strlen($logo)) $source = $logo;
            else return "";
        } else {
            $source = $data->path;
        }

        if (substr($gantry->baseUrl, 0, strlen($gantry->baseUrl)) == substr($source, 0, strlen($gantry->baseUrl))){
            $file = JPATH_ROOT . DS . substr($source, strlen($gantry->baseUrl));
        } else {
            $file = JPATH_ROOT . DS . $source;
        }

        if (isset($data->width) && isset($data->height)){
            $width = $data->width;
            $height = $data->height;
        } else {
            $size = @getimagesize($file);
            $width = $size[0];
            $height = $size[1];
        }

        if (!preg_match('/^\//', $source))
        {
            $source = JURI::root(true).'/'.$source;
        }

        $output = "";
        $output .= "#rt-logo {background: url(".$source.") 50% 0 no-repeat !important;}"."\n";
        $output .= "#rt-logo {width: ".$width."px;height: ".$height."px;}"."\n";

        $file = preg_replace('/\//i', DS, $file);

        return (file_exists($file)) ?$output : '';
    }

    function _createGradient($direction, $from, $fromOpacity, $fromPercent, $to, $toOpacity, $toPercent){
        global $gantry;
        $browser = $gantry->browser;

        $fromColor = $this->_RGBA($from, $fromOpacity);
        $toColor = $this->_RGBA($to, $toOpacity);
        $gradient = $default_gradient = '';

        $default_gradient = 'background: linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';

        switch ($browser->engine) {
            case 'gecko':
                $gradient = ' background: -moz-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                break;

            case 'webkit':
                if ($browser->shortversion < '5.1'){

                    switch ($direction){
                        case 'top':
                            $from_dir = 'left top'; $to_dir = 'left bottom'; break;
                        case 'bottom':
                            $from_dir = 'left bottom'; $to_dir = 'left top'; break;
                        case 'left':
                            $from_dir = 'left top'; $to_dir = 'right top'; break;
                        case 'right':
                            $from_dir = 'right top'; $to_dir = 'left top'; break;
                    }
                    $gradient = ' background: -webkit-gradient(linear, '.$from_dir.', '.$to_dir.', color-stop('.$fromPercent.','.$fromColor.'), color-stop('.$toPercent.','.$toColor.'));';
                } else {
                    $gradient = ' background: -webkit-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                }
                break;

            case 'presto':
                $gradient = ' background: -o-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                break;

            case 'trident':
                if ($browser->shortversion >= '10'){
                    $gradient = ' background: -ms-linear-gradient('.$direction.', '.$fromColor.' '.$fromPercent.', '.$toColor.' '.$toPercent.');';
                } else if ($browser->shortversion <= '6'){
                    $gradient = $from;
                    $default_gradient = '';
                } else {

                    $gradient_type = ($direction == 'left' || $direction == 'right') ? 1 : 0;
                    $from_nohash = str_replace('#', '', $from);
                    $to_nohash = str_replace('#', '', $to);

                    if (strlen($from_nohash) == 3) $from_nohash = str_repeat(substr($from_nohash, 0, 1), 6);
                    if (strlen($to_nohash) == 3) $to_nohash = str_repeat(substr($to_nohash, 0, 1), 6);

                    if ($fromOpacity == 0 || $fromOpacity == '0' || $fromOpacity == '0%') $from_nohash = '00' . $from_nohash;
                    if ($toOpacity == 0 || $toOpacity == '0' || $toOpacity == '0%') $to_nohash = '00' . $to_nohash;

                    $gradient = " filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#".$to_nohash."', endColorstr='#".$from_nohash."',GradientType=".$gradient_type." );";

                    $default_gradient = '';

                }
                break;

            default:
                $gradient = $from;
                $default_gradient = '';
                break;
        }

        return  $default_gradient . $gradient;
    }

    function _HEX2RGB($hexStr, $returnAsString = false, $seperator = ','){
        $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr);
        $rgbArray = array();

        if (strlen($hexStr) == 6){
            $colorVal = hexdec($hexStr);
            $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
            $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
            $rgbArray['blue'] = 0xFF & $colorVal;
        } elseif (strlen($hexStr) == 3){
            $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
            $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
            $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
        } else {
            return false;
        }

        return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray;
    }

    function _RGBA($hex, $opacity){
        return 'rgba(' . $this->_HEX2RGB($hex, true) . ','.$opacity.')';
    }

	function _disableRokBoxForiPhone() {
		global $gantry;

		if ($gantry->browser->platform == 'iphone' || $gantry->browser->platform == 'android') {
			$gantry->addInlineScript("window.addEvent('domready', function() {\$\$('a[rel^=rokbox]').removeEvents('click');});");
		}
	}

}
