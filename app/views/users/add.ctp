<div class="users form">
	<fieldset>
 		<legend><?php __('Create Account');?></legend>
<?php echo $form->create('User');?>
	<?php
		echo $form->input('first_name');
		echo $form->input('last_name');
		//echo $form->input('name');
		echo $form->input('username', array('label'=>'E-mail'));
		echo $form->input('password');
		//echo $form->input('active');
		//echo $form->input('role');
		//echo $form->input('group_id');
	?>
<?php echo $form->end('Submit');?>
	</fieldset>
</div>
