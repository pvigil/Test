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
<ul id="work-edit" style="display:none;">
	<form id="workForm" action="post" class="form-validate">
		<?php foreach ($this->form->getFieldset('work') as $field): 
			if (!$field->hidden) :?>
				<li><span class="contact-label edit"><?php echo $field->title; ?></span> <?php echo $field->input; ?></li>
            <?php else: ?>
            	<?php echo $field->input; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		<div id="work-saving" class="contact-saving"></div>
		<div id="work-btn-panel" class="profile-btn-panel">
			<input type="submit" value="Save" id="savework-btn" class="save-btn" />
			<span class="cancel-block">or <a href="#" id="cancel-work" class="cancel-btn">Cancel</a></span>
		</div>
		<?php echo JHtml::_("form.token"); ?>
	</form>
</ul>
