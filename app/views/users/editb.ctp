<div class="users form">
<?php echo $form->create('User', array('action'=>'editb'));?>
	<fieldset>
 		<legend><?php __('Edit Account');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('first_name');
		echo $form->input('last_name');
		echo $form->input('username');
		//echo $form->input('password');
	?>
	</fieldset>
<?php echo $form->end('Edit Account');?>
</div>
