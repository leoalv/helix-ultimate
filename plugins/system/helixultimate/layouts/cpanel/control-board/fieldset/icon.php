<?php
/**
 * @package Helix_Ultimate_Framework
 * @author JoomShaper <support@joomshaper.com>
 * @copyright Copyright (c) 2010 - 2018 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */

defined('_JEXEC') or die();

use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Uri\Uri;

extract($displayData);


$iconsrc = Uri::root() . "plugins/system/helixultimate/assets/images/icons/{$fieldset->name}.svg";

?>


<div class="helix-ultimate-fieldset helix-ultimate-fieldset-<?php echo $fieldset->name; ?>">
	<div class="helix-ultimate-fieldset-header" data-fieldset="<?php echo strtolower($fieldset->name); ?>" data-toggle="tooltip" title="<?php echo Text::_($fieldset->label); ?>">
		<div class="helix-ultimate-fieldset-header-inner">
			<div class="helix-ultimate-fieldset-icon">
				<img src="<?php echo $iconsrc; ?>" alt="<?php echo $fieldset->name; ?>" width="16" height="16">
			</div>
		</div>
	</div>
</div>