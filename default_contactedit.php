<?php
/**
 * @version     1.0.0
 * @package     com_myaccount
 * @copyright   Copyright (C) 2012. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Pablo Vigil <pablo.vigil@modelitsoftware.com> - http://www.modelitsoftware.com
 */

defined('_JEXEC') or die;

?>
<ul id="contact-edit">
	<form id="contactForm" action="post" class="form-validate">
		<?php foreach ($this->form->getFieldset('edit') as $field): 
			if (!$field->hidden) :?>					
				<li <?php echo ($field->title == 'Type') ? 'class="float-left"' : '' ?>><span class="contact-label edit"><?php echo $field->label; ?></span> <?php echo $field->input; ?></li>
			<?php else: ?>
            	<?php echo $field->input; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		<div id="contact-saving" class="contact-saving"></div>
		<div id="contact-btn-panel" class="profile-btn-panel">
			<input type="submit" value="Save" id="save-btn" class="save-btn" />
			<span class="cancel-block">or <a href="#" id="cancel-contact" class="cancel-btn">Cancel</a></span>
		</div>	
		<?php echo JHtml::_("form.token"); ?>
	</form>
</ul>
