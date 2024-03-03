<?php
/**
 * @package		MASTERPRO NIVO SLIDER
 * @subpackage	mod_vt_nivo_slider
 * @copyright	Copyright (C) 2023 Masterpro Project. All rights reserved.
 * @license		GNU General Public License version 2 or later.
 */

// no direct access
defined('_JEXEC') or die;
?>

<!-- BEGIN: Masterpro Nivo Slider -->
<div class="vt_nivo_slider<?php echo $moduleclass_sfx?>">
	<div class="slider-wrapper theme-pascal">
		<?php if ($ribbon) { ?><div class="ribbon"></div><?php } ?>
		<div id="vt_nivo_slider<?php echo $module_id; ?>" class="nivoSlider">
			<a href="http://vinaora.com/vinaora-visitors-counter/" target="_blank"><img src="<?php echo $base_url; ?>/media/mod_vt_nivo_slider/images/demo-pascal/toystory_pascal.jpg" alt="toystory_pascal" title="#nivocaption1_<?php echo $module_id; ?>" /></a>
			<a href="http://vinaora.com/vinaora-cu3er-3d-slideshow/" target="_blank"><img src="<?php echo $base_url; ?>/media/mod_vt_nivo_slider/images/demo-pascal/up_pascal.jpg" alt="up_pascal" title="#nivocaption2_<?php echo $module_id; ?>" /></a>
			<a href="http://vinaora.com/vinaora-cu3ox-slideshow/" target="_blank"><img src="<?php echo $base_url; ?>/media/mod_vt_nivo_slider/images/demo-pascal/walle_pascal.jpg" alt="walle_pascal" title="#nivocaption3_<?php echo $module_id; ?>" /></a>
			<a href="http://vinaora.com/vinaora-nivo-slider/" target="_blank"><img src="<?php echo $base_url; ?>/media/mod_vt_nivo_slider/images/demo-pascal/nemo_pascal.jpg" alt="nemo_pascal" title="#nivocaption4_<?php echo $module_id; ?>" /></a>
		</div>
		<div id="nivocaption1_<?php echo $module_id; ?>" class="nivo-html-caption">
			<div class="nivo-heading">Vinaora Visitors Counter</div>
			<div class="nivo-description"></div>
		</div>
		<div id="nivocaption2_<?php echo $module_id; ?>" class="nivo-html-caption">
			<div class="nivo-heading">Vinaora Cu3er 3D slide-show</div>
			<div class="nivo-description"></div>
		</div>
		<div id="nivocaption3_<?php echo $module_id; ?>" class="nivo-html-caption">
			<div class="nivo-heading">Vinaora Cu3ox Slideshow</div>
			<div class="nivo-description"></div>
		</div>
		<div id="nivocaption4_<?php echo $module_id; ?>" class="nivo-html-caption">
			<div class="nivo-heading">Masterpro Nivo Slider</div>
			<div class="nivo-description"></div>
		</div>
	</div>
</div>
<?php require Joomla\CMS\Helper\ModuleHelper::getLayoutPath('mod_vt_nivo_slider', '_script'); ?>
<!-- END: Masterpro Nivo Slider -->
