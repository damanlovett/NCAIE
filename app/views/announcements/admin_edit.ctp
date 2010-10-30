<div class="announcements form">
<?php echo $form->create('Announcement');?>
	<fieldset>
 		<legend><?php __('Edit Announcement');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('title');
		echo $form->input('message');
		echo $form->hidden('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Announcement.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Announcement.id'))); ?></li>
		<li><?php echo $html->link(__('Back to List', true), array('action'=>'index'));?></li>
	</ul>
</div>
