<?php
/**
 * @package		VINAORA NIVO SLIDER
 * @subpackage	mod_vt_nivo_slider
 * @copyright	Copyright (C) 2011-2014 VINAORA. All rights reserved.
 * @license		GNU General Public License version 2 or later.
 */

// no direct access
defined('_JEXEC') or die;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Factory;
use Joomla\CMS\Form\FormField;

/**
 * Form Field class for the Joomla Framework.
 *
 */
class JFormFieldJSColor extends FormField
{
	protected $type = 'JSColor';

	public function getInput()
	{

		$module = strrchr(dirname(__DIR__), 'mod_');

		$doc =& Factory::getDocument();
		$doc->addScript( Uri::root(true) . "/media/{$module}/jscolor/jscolor.js" );

		// Add 'color' class CSS if not exits
		if(stripos((string) $this->element['class'], 'color') === false)
		{
			$this->element['class'] = 'color ' . $this->element['class'];
		}

		// Initialize some field attributes.
		$size = $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
		$maxLength = $this->element['maxlength'] ? ' maxlength="' . (int) $this->element['maxlength'] . '"' : '';
		$class = $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
		$readonly = ((string) $this->element['readonly'] == 'true') ? ' readonly="readonly"' : '';
		$disabled = ((string) $this->element['disabled'] == 'true') ? ' disabled="disabled"' : '';
		$required = $this->required ? ' required="required" aria-required="true"' : '';

		// Initialize JavaScript field attributes.
		$onchange = $this->element['onchange'] ? ' onchange="' . (string) $this->element['onchange'] . '"' : '';

		return '<input type="text" name="' . $this->name . '" id="' . $this->id . '" value="'
			. htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8') . '"' . $class . $size . $disabled . $readonly . $onchange . $maxLength . $required . '/>';
	}
}
