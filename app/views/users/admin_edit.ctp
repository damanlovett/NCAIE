<div class="users form">
<h2><?php __('Edit: '.$this->data['User']['name']);?></h2>
	<fieldset>
<?php echo $form->create('User');?>
	<?php
		echo $form->input('id');
		echo $form->input('first_name');
		echo $form->input('last_name');
		//echo $form->input('name');
		echo $form->input('username', array('label'=>'Username/E-mail'));
		echo $form->input('active', array(
									'options'=>array(
									'1'=>'Yes',
									'0'=>'No')));
		//echo $form->input('role');
		//echo $form->input('group_id');
	?>
<?php echo $form->end('Update');?>
	</fieldset>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete %s?', true), $form->value('name'))); ?></li>
	</ul>
</div>
