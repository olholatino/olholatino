<?php
/**
 * @package    Diametric Template - RocketTheme
 * @version    1.3 January 22, 2013
 * @author     RocketTheme http://www.rockettheme.com
 * @copyright  Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * Gantry uses the Joomla Framework (http://www.joomla.org), a GNU/GPLv2 content management system
 *
 */
defined( '_JEXEC' ) or die( 'Restricted access' );
if (!isset($this->error)) {
	$this->error = JError::raiseWarning( 403, JText::_('ALERTNOTAUTH') );
	$this->debug = false; 
}

// load and inititialize gantry class
global $gantry;
require_once(dirname(__FILE__) . '/lib/gantry/gantry.php');
$gantry->init();

$doc = JFactory::getDocument();
$doc->setTitle($this->error->getCode() . ' - '.$this->title);
ob_start();

?>

<body <?php echo $gantry->displayBodyTag(); ?>>
	<div id="rt-top-surround"><div id="rt-top-surround2">
		<?php /** Begin Header **/ if ($gantry->countModules('header')) : ?>
		<div id="rt-header">
			<div class="rt-container">
				<?php echo $gantry->displayModules('header','standard','standard'); ?>
				<div class="clear"></div>
			</div>
		</div>
		<?php /** End Header **/ endif; ?>
	</div></div>

	<?php /** Begin Navigation **/ if ($gantry->countModules('navigation')) : ?>
	<div id="rt-navigation" <?php echo $gantry->displayClassesByTag('rt-menuoverlay'); ?>><div id="rt-navigation2"><div id="rt-navigation3" <?php if ($gantry->get('menu-centering')) : ?>class="centered"<?php endif; ?>>
		<div class="rt-container">
			<?php echo $gantry->displayModules('navigation','standard','standard'); ?>
			<div class="clear"></div>
		</div>
	</div></div></div>
	<?php /** End Navigation **/ endif; ?>

	<div id="rt-error-body">
		<div id="rt-main-container">
			<div class="rt-container">
				<div id="rt-body-surround" class="component-block component-content">
					<div class="rt-error-box">
						<h2>Error:</h2>
						<h1 class="error-title title"><span><?php echo $this->error->getCode(); ?></span> - <?php echo $this->error->getMessage(); ?></h1>
						<p><strong>You may not be able to visit this page because of:</strong></p>
						<ol>
							<li>an out-of-date bookmark/favourite</li>
							<li>a search engine that has an out-of-date listing for this site</li>
							<li>a mistyped address</li>
							<li>you have no access to this page</li>
							<li>The requested resource was not found.</li>
							<li>An error has occurred while processing your request.</li>
						</ol>
						<p></p>
						<p><a href="<?php echo $gantry->baseUrl; ?>" class="readon"><span>&larr; Home</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php

$body = ob_get_clean();
$gantry->finalize();

require_once(JPATH_LIBRARIES.'/joomla/document/html/renderer/head.php');
$header_renderer = new JDocumentRendererHead($doc);
$header_contents = $header_renderer->render(null);
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>

	<?php echo $header_contents; ?>

	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/gantry-core.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/joomla-core.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/menu-light.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/body-light.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/overlays.css" type="text/css" />
	<?php if ($gantry->get('menutype') =="fusionmenu") : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/fusionmenu.css" type="text/css" />
	<?php endif; ?>
	<?php if ($gantry->get('menutype') =="splitmenu") : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/splitmenu.css" type="text/css" />
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/error.css" type="text/css" />
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template-ie7.css">
	<![endif]-->
	<style type="text/css">
		<?php 
			$accentColor = new Color($gantry->get('body-accentcolor'));
			echo '#rt-navigation, #rt-navigation .rt-menubar ul.menutop li.active {background-color:'.$accentColor->darken('10%').';}'."\n";
			echo '.menutop .rt-arrow-pointer {border-top-color:'.$gantry->get('body-accentcolor').';}'."\n";
			echo $css = '#rt-main-container a, #rt-main-container h1 span, #rt-main-container .module-title .title span,#rt-body-surround .sprocket-lists .sprocket-lists-container li.active .sprocket-lists-title, body #roksearch_results h3, body #roksearch_results a, .item-title {color:'.$gantry->get('body-accentcolor').';}'."\n";
			echo '#rt-main-container.body-overlay-light a:hover, #rt-main-container.body-overlay-light .title a:hover span {color:'.$accentColor->darken('15%').';}'."\n";
    		echo '#rt-main-container.body-overlay-dark a:hover, #rt-main-container.body-overlay-dark .title a:hover span {color:'.$accentColor->lighten('15%').';}'."\n";
    		echo '#rt-main-container .readon span, #rt-main-container .readon .button {background-color:'.$accentColor->darken('10%').';}'."\n";
		?>
	</style>

</head>
<?php
$header = ob_get_clean();
echo $header.$body;;