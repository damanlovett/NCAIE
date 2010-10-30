<div class="users form">
<h2><?php __('Password: '.$this->data['User']['name']);?></h2>
	<fieldset>
<?php echo $form->create('User', array('action'=>'password'));?>
	<?php
		echo $form->input('id');
		echo $form->input('password');
		echo $form->hidden('first_name');
		echo $form->hidden('username');
	?>
<?php echo $form->end('Update Password');?>
	</fieldset>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $form->value('name'))); ?></li>
	</ul>
</div>
